<?php
/**
 * Template Name: Contact (Grid Solutions)
 * Description: Template voor Contact (Grid Solutions) binnen het Grid Solutions thema.
 */

get_header();
?>

<!-- Tekst die via de WordPress pagina-editor is ingevoerd wordt hier getoond -->
<?php
if (have_posts()) :
    while (have_posts()) :
        the_post();
        if (trim(get_the_content())) :
?>
            <section class="section pb-0">
                <div class="container">
                    <div class="intro mb-md">
                        <?php the_content(); ?>
                    </div>
                </div>
            </section>
<?php
        endif;
    endwhile;
endif;
?>

<main id="main">
    <section class="page-hero">
      <div class="hero__grid-bg" aria-hidden="true"></div>
      <div class="container">
        <div class="page-hero__inner">
          <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>|</span>Contact</p>
          <span class="eyebrow">Contact</span>
          <h1>Neem contact met ons op</h1>
          <p>Vertel ons waar u aan werkt of welke capaciteit u zoekt. We denken graag mee over de aanpak, planning en invulling van de engineering.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="contact-grid">
          <div class="reveal">
            <h2>Direct contact</h2>
            <p class="lead">
              Heeft u een engineeringvraag, zoekt u extra capaciteit of wilt u weten of wij bij uw
              project passen? Neem contact op via e-mail of het formulier. U ontvangt binnen 24 uur
              (op werkdagen) een reactie.
            </p>
            <ul class="contact-list">
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m3 7 9 6 9-6"/></svg>
                <div>
                  <strong>E-mail</strong>
                  <a href="mailto:info@gridsolutions.nl">info@gridsolutions.nl</a>
                </div>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 21s7-6.1 7-11a7 7 0 1 0-14 0c0 4.9 7 11 7 11Z"/><circle cx="12" cy="10" r="2.5"/></svg>
                <div>
                  <strong>Werkgebied</strong>
                  <span>Heel Nederland &ndash; op locatie of remote</span>
                </div>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 7v5l4 2"/></svg>
                <div>
                  <strong>Reactietijd</strong>
                  <span>Binnen 24 uur, op werkdagen</span>
                </div>
              </li>
              <li>
                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M12 3l9 5v8l-9 5-9-5V8z"/><path d="M12 12l9-4M12 12v9M12 12L3 8"/></svg>
                <div>
                  <strong>Waarvoor kunt u ons benaderen?</strong>
                  <span>Engineeringopdrachten, werkpakketten, revisie, detachering en sollicitaties</span>
                </div>
              </li>
            </ul>
            <p class="form__note">
              Bedrijfsgegevens zoals vestigingsadres, KvK- en BTW-nummer worden hier binnenkort
              toegevoegd. Voor formele correspondentie kunt u nu al gebruikmaken van ons e-mailadres.
            </p>
          </div>

          <div class="reveal">
            <form class="form" action="mailto:info@gridsolutions.nl" method="post" enctype="text/plain" data-validate data-mailto="mailto:info@gridsolutions.nl" data-subject="Aanvraag via Grid Solutions" novalidate>
              <h2 class="mt-0">Stuur ons een bericht</h2>
              <div class="form__message" role="status" aria-live="polite"></div>

              <div class="form__row">
                <div class="field">
                  <label for="naam">Naam <span class="req">*</span></label>
                  <input type="text" id="naam" name="naam" autocomplete="name" required>
                  <span class="field__error">Dit veld is verplicht.</span>
                </div>
                <div class="field">
                  <label for="bedrijf">Organisatie</label>
                  <input type="text" id="bedrijf" name="bedrijf" autocomplete="organization">
                  <span class="field__error"></span>
                </div>
              </div>

              <div class="form__row">
                <div class="field">
                  <label for="email">E-mailadres <span class="req">*</span></label>
                  <input type="email" id="email" name="email" autocomplete="email" required>
                  <span class="field__error">Vul een geldig e-mailadres in.</span>
                </div>
                <div class="field">
                  <label for="telefoon">Telefoonnummer</label>
                  <input type="tel" id="telefoon" name="telefoon" autocomplete="tel">
                  <span class="field__error">Vul een geldig telefoonnummer in.</span>
                </div>
              </div>

              <div class="field">
                <label for="onderwerp">Onderwerp</label>
                <select id="onderwerp" name="onderwerp">
                  <option>Engineeringopdracht</option>
                  <option>Werkpakket of revisie</option>
                  <option>Extra engineeringcapaciteit / detachering</option>
                  <option>ELCAD- of EPLAN-tekenwerk</option>
                  <option>Sollicitatie</option>
                  <option>Anders</option>
                </select>
                <span class="field__error"></span>
              </div>

              <div class="field">
                <label for="bericht">Bericht <span class="req">*</span></label>
                <textarea id="bericht" name="bericht" required placeholder="Beschrijf kort uw vraag, project of opdracht - inclusief de gewenste planning als die er al is."></textarea>
                <span class="field__error">Dit veld is verplicht.</span>
              </div>

              <div class="field field--check">
                <input type="checkbox" id="privacy" name="privacy" required>
                <label for="privacy">Ik geef toestemming om mijn gegevens te gebruiken om contact met mij op te nemen over deze aanvraag. <span class="req">*</span></label>
                <span class="field__error">Dit veld is verplicht.</span>
              </div>

              <button class="btn btn--primary" type="submit">Bericht versturen</button>
              <p class="form__note">
                Dit formulier opent uw e-mailprogramma met de ingevulde gegevens, zodat uw bericht
                direct bij ons binnenkomt. Liever direct mailen? Dat kan via
                <a href="mailto:info@gridsolutions.nl">info@gridsolutions.nl</a>.
              </p>
            </form>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--tint">
      <div class="container">
        <div class="section__head reveal">
          <span class="eyebrow">Veelgestelde vragen</span>
          <h2>Voordat u contact opneemt</h2>
        </div>
        <div class="grid grid--3">
          <article class="card reveal">
            <h3>Werken jullie ook aan kleine opdrachten?</h3>
            <p>Ja. Wij zijn net zo goed inzetbaar voor een losse tekening of een revisieset als voor een compleet werkpakket binnen een meerjarig project.</p>
          </article>
          <article class="card reveal">
            <h3>In welke systemen werken jullie?</h3>
            <p>Wij werken in ELCAD en EPLAN Electric P8, en sluiten aan op de projectstructuur, bibliotheken en tekenstandaard van de opdrachtgever.</p>
          </article>
          <article class="card reveal">
            <h3>Kunnen jullie op locatie werken?</h3>
            <p>Ja. Onze engineers werken zowel op locatie bij de opdrachtgever als remote, afhankelijk van het project en de eisen rondom veiligheid en vertrouwelijkheid.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="cta-band reveal">
          <div>
            <h2>Liever direct schakelen?</h2>
            <p>Mail ons met een korte omschrijving van uw vraag. Wij reageren binnen 24 uur (op werkdagen) en denken direct mee over de vervolgstappen.</p>
          </div>
          <div class="btn-row">
            <a class="btn btn--light" href="<?php echo esc_url(gridsolutions_get_page_url('contact')); ?>">Neem contact op</a>
            <a class="btn btn--outline-light" href="mailto:info@gridsolutions.nl">Mail ons direct</a>
          </div>
        </div>
      </div>
    </section>
  </main>

<?php
get_footer();

