/* ============================================================
   Grid Solutions – main.js
   Mobiel menu, actieve navigatie, scroll-animaties,
   formuliervalidatie en jaartal in de footer.
   ============================================================ */
(function () {
  'use strict';

  /* ---------- 1. Mobiel menu ---------- */
  var toggle = document.querySelector('.nav-toggle');
  var nav = document.querySelector('.nav');

  if (toggle && nav) {
    toggle.addEventListener('click', function () {
      var open = nav.classList.toggle('is-open');
      toggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    });

    nav.addEventListener('click', function (event) {
      if (event.target.tagName === 'A' && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', function (event) {
      if (event.key === 'Escape' && nav.classList.contains('is-open')) {
        nav.classList.remove('is-open');
        toggle.setAttribute('aria-expanded', 'false');
        toggle.focus();
      }
    });
  }

  /* ---------- 2. Actieve navigatielink ---------- */
  var current = window.location.pathname.split('/').pop() || 'index.html';
  document.querySelectorAll('.nav__link').forEach(function (link) {
    var href = link.getAttribute('href') || '';
    var target = href.split('/').pop().split('#')[0];
    if (target && target === current) {
      link.classList.add('is-active');
      link.setAttribute('aria-current', 'page');
    }
  });

  /* ---------- 3. Scroll-animaties ---------- */
  var revealItems = document.querySelectorAll('.reveal');
  if (revealItems.length) {
    if ('IntersectionObserver' in window) {
      var observer = new IntersectionObserver(function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      }, { rootMargin: '0px 0px -8% 0px', threshold: 0.08 });

      revealItems.forEach(function (item) { observer.observe(item); });
    } else {
      revealItems.forEach(function (item) { item.classList.add('is-visible'); });
    }
  }

  /* ---------- 3b. Vangnet: nooit een lege pagina ---------- */
  /* Als de scroll-animatie niet aanslaat (bijv. door een browserinstelling of
     een verouderde browser), tonen we de content na korte tijd alsnog. */
  window.setTimeout(function () {
    if (document.querySelector('.reveal.is-visible')) { return; }
    document.querySelectorAll('.reveal').forEach(function (item) {
      if (item.getBoundingClientRect().top < window.innerHeight) {
        item.classList.add('is-visible');
      }
    });
    window.setTimeout(function () {
      if (!document.querySelector('.reveal.is-visible')) {
        document.querySelectorAll('.reveal').forEach(function (item) {
          item.classList.add('is-visible');
        });
      }
    }, 1200);
  }, 1200);


  /* ---------- 4. Jaartal in de footer ---------- */
  document.querySelectorAll('[data-year]').forEach(function (el) {
    el.textContent = String(new Date().getFullYear());
  });

  /* ---------- 5. Formuliervalidatie ---------- */
  document.querySelectorAll('form[data-validate]').forEach(function (form) {
    var message = form.querySelector('.form__message');
    var mailFallback = form.getAttribute('data-mailto');

    var showMessage = function (type, text) {
      if (!message) { return; }
      message.className = 'form__message form__message--' + type + ' is-visible';
      message.textContent = text;
      message.setAttribute('role', type === 'error' ? 'alert' : 'status');
    };

    var markError = function (field, hasError, text) {
      var wrapper = field.closest('.field');
      if (!wrapper) { return; }
      wrapper.classList.toggle('field--error', hasError);
      var hint = wrapper.querySelector('.field__error');
      if (hint && text) { hint.textContent = text; }
      field.setAttribute('aria-invalid', hasError ? 'true' : 'false');
    };

    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var valid = true;
      var firstInvalid = null;

      form.querySelectorAll('input, select, textarea').forEach(function (field) {
        if (field.type === 'submit' || field.type === 'button' || field.type === 'hidden') { return; }
        var value = (field.value || '').trim();
        var isRequired = field.hasAttribute('required');
        var errorText = '';

        if (isRequired && (field.type === 'checkbox' ? !field.checked : value === '')) {
          errorText = 'Dit veld is verplicht.';
        } else if (value !== '' && field.type === 'email' && !/^[^\s@]+@[^\s@]+\.[a-z]{2,}$/i.test(value)) {
          errorText = 'Vul een geldig e-mailadres in.';
        } else if (value !== '' && field.type === 'tel' && !/^[+()0-9\s-]{7,}$/.test(value)) {
          errorText = 'Vul een geldig telefoonnummer in.';
        }

        markError(field, errorText !== '', errorText);
        if (errorText !== '') {
          valid = false;
          if (!firstInvalid) { firstInvalid = field; }
        }
      });

      if (!valid) {
        showMessage('error', 'Controleer de gemarkeerde velden en probeer het opnieuw.');
        if (firstInvalid) { firstInvalid.focus(); }
        return;
      }

      var name = (form.querySelector('[name="naam"]') || {}).value || '';
      showMessage('ok', 'Bedankt voor je bericht' + (name ? ', ' + name.trim() : '') +
        '. We nemen binnen 24 uur (op werkdagen) contact met je op.');

      if (mailFallback) {
        var body = [];
        form.querySelectorAll('input, select, textarea').forEach(function (field) {
          if (field.name && field.type !== 'checkbox' && field.type !== 'submit') {
            body.push(field.name + ': ' + field.value);
          }
        });
        window.location.href = mailFallback + '?subject=' +
          encodeURIComponent(form.getAttribute('data-subject') || 'Aanvraag via gridsolutions') +
          '&body=' + encodeURIComponent(body.join('\n'));
      }

      form.reset();
    });

    form.querySelectorAll('input, select, textarea').forEach(function (field) {
      field.addEventListener('input', function () {
        if (field.closest('.field') && field.closest('.field').classList.contains('field--error')) {
          markError(field, false, '');
        }
      });
    });
  });
})();
