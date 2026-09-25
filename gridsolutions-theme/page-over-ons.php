<?php
/**
 * Template Name: Over Ons (Grid Solutions)
 * Description: Template voor Over Ons (Grid Solutions) binnen het Grid Solutions thema.
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
          <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>|</span>Over ons</p>
          <span class="eyebrow">Over ons</span>
          <h1>Engineeringsbureau voor netbeheerbedrijven</h1>
          <p>Wij zijn een team van engineers en tekenaars dat werkt aan de elektrische netten van Nederland. Met ELCAD en EPLAN als vaste gereedschappen en de netbeheersector als ons speelveld.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="split split--top">
          <div class="reveal">
            <span class="eyebrow">Wie wij zijn</span>
            <h2>Een engineeringspartij voor de netten van Nederland</h2>
            <p>
              Grid Solutions is een engineeringbureau dat gespecialiseerd is in de elektrotechnische
              installaties van netbeheerbedrijven. Wij voeren opdrachten uit voor de grote
              netbeheerbedrijven en voor partijen die in dezelfde keten werken: aannemers,
              panelenbouwers en industri&eacute;le opdrachtgevers.
            </p>
            <p>
              Onze kracht ligt in de combinatie van vakinhoud en documentatie. Wij weten hoe een
              secundaire installatie in elkaar zit, en wij weten hoe die installatie vervolgens
              eenduidig op tekening en in een werkpakket moet worden vastgelegd. Daarbij werken wij
              met de pakketten die in de sector gangbaar zijn: <strong>ELCAD</strong> en
              <strong>EPLAN</strong>.
            </p>
            <p>
              Wij werken projectmatig, met heldere afspraken en vaste tussenmomenten. Onze engineers
              denken mee over de oplossing en durven vragen te stellen &ndash; dat voorkomt problemen
              tijdens de realisatie.
            </p>
            <blockquote class="quote">&ldquo;Als je denkt aan engineering voor het net, denk je aan Grid Solutions.&rdquo;</blockquote>
            <ul class="tag-list">
              <li>Netbeheer</li>
              <li>Hoogspanning</li>
              <li>Middenspanning</li>
              <li>Secundaire installaties</li>
              <li>ELCAD</li>
              <li>EPLAN</li>
            </ul>
          </div>
          <div class="figure reveal" aria-hidden="true">
            <svg viewBox="0 0 620 520" role="presentation">
              <defs>
                <linearGradient id="gsbg2" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0" stop-color="#2c4551"/>
                  <stop offset="1" stop-color="#5f8a99"/>
                </linearGradient>
              </defs>
              <rect width="620" height="520" fill="url(#gsbg2)"/>
              <g stroke="#ffffff" stroke-width="2" fill="none" opacity=".85">
                <circle cx="140" cy="150" r="80"/>
                <circle cx="400" cy="150" r="80"/>
              </g>
              <g stroke="#a9cad4" stroke-width="3" fill="none">
                <path d="M120 210 140 95 160 210"/>
                <path d="M128 140h24M125 165h30M122 190h36"/>
                <path d="M140 95 156 140M140 95 124 140M126 140 158 165M154 140 122 165M122 165 158 190M158 165 122 190"/>
                <path d="M70 120 Q120 145 120 115 M112 135 Q85 165 68 150 M210 120 Q160 145 160 115 M168 135 Q195 165 212 150"/>
              </g>
              <g stroke="#a9cad4" stroke-width="3" fill="none">
                <rect x="345" y="175" width="110" height="80" rx="4"/>
                <path d="M340 175h120"/>
                <path d="M370 175v-45M400 175v-45M430 175v-45"/>
                <path d="M362 130h16M362 140h16M362 150h16M362 160h16"/>
                <path d="M392 130h16M392 140h16M392 150h16M392 160h16"/>
                <path d="M422 130h16M422 140h16M422 150h16M422 160h16"/>
              </g>
              <path d="M404 190 388 220 400 220 392 245 412 210 400 210 408 190Z" fill="#ffffff"/>
              <g stroke="#ffffff" stroke-width="2.5" fill="none" opacity=".95">
                <path d="M80 330h460M80 400h460M80 470h460"/>
                <path d="M180 330v140M420 330v140"/>
                <path d="M150 330h60v70h-60zM390 400h60v70h-60z"/>
              </g>
              <g fill="#ffffff">
                <circle cx="80" cy="330" r="5"/><circle cx="80" cy="400" r="5"/><circle cx="80" cy="470" r="5"/>
                <circle cx="540" cy="330" r="5"/><circle cx="540" cy="400" r="5"/><circle cx="540" cy="470" r="5"/>
              </g>
            </svg>
          </div>
        </div>
      </div>
    </section>

    <section class="section section--tint">
      <div class="container">
        <div class="section__head reveal">
          <span class="eyebrow">Waar wij voor staan</span>
          <h2>Onze uitgangspunten</h2>
        </div>
        <div class="grid grid--3">
          <article class="card reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="12" r="9"/><path d="M12 3v18M3 12h18"/></svg></div>
            <h3>Vakinhoud boven volume</h3>
            <p>Een tekening is pas goed als de installatie ook echt werkt. Wij toetsen ons werk daarom op technische logica, niet alleen op volledigheid van het blad.</p>
          </article>
          <article class="card reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3l7 4v6c0 4-3 7-7 8-4-1-7-4-7-8V7z"/><path d="m9 12 2 2 4-4"/></svg></div>
            <h3>Veiligheid en kwaliteit</h3>
            <p>Kwaliteit en veiligheid staan altijd voorop. Wij werken volgens de geldende normen, veiligheidsregels en de interne standaarden van de opdrachtgever.</p>
          </article>
          <article class="card reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 7h16M4 12h16M4 17h10"/></svg></div>
            <h3>Duidelijke communicatie</h3>
            <p>Korte lijnen, eerlijke planningen en &eacute;&eacute;n aanspreekpunt. U weet altijd waar het project staat en wat er van u nodig is.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--dark">
      <div class="container">
        <div class="split">
          <div class="reveal">
            <span class="eyebrow">Onze expertise</span>
            <h2>Waar wij goed in zijn</h2>
            <p class="lead">
              Wij combineren kennis van de installatie met kennis van de documentatie. Daardoor
              leveren wij werk dat technisch klopt &eacute;n direct bruikbaar is binnen de processen
              van de netbeheerder.
            </p>
            <ul class="checklist mt-2">
              <li>Secundaire engineering van meet-, beveiligings- en besturingssystemen</li>
              <li>Hoogspannings- en middenspanningsstations, van nieuwbouw tot vervanging</li>
              <li>Tekenen en projectbeheer in ELCAD en EPLAN Electric P8</li>
              <li>Normen en standaarden: IEC 60617, IEC 61850, NEN-EN 61439, NEN 3140</li>
              <li>Werkpakketten, revisie, as-built documentatie en revisiebeheer</li>
              <li>Afstemming met aannemers, panelenbouwers en leveranciers</li>
            </ul>
          </div>
          <div class="grid grid--2 reveal">
            <div class="stat">
              <strong>ELCAD</strong>
              <span>Schema&rsquo;s, klemmenstroken, kabelbladen en revisiewerk</span>
            </div>
            <div class="stat">
              <strong>EPLAN</strong>
              <span>Projectmatige kastontwerpen, macro&rsquo;s en rapportages</span>
            </div>
            <div class="stat">
              <strong>HS / MS</strong>
              <span>Secundaire installaties op stations van netbeheerders</span>
            </div>
            <div class="stat">
              <strong>Documentatie</strong>
              <span>Complete werkpakketten en opleverdossiers</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section__head reveal">
          <span class="eyebrow">Ons team</span>
          <h2>Engineers met oog voor detail</h2>
          <p class="lead">
            Ons team bestaat uit engineers en tekenaars met verschillende niveaus van ervaring.
            Samen zorgen zij voor de opbouw, uitwerking en controle van elk project.
          </p>
        </div>
        <div class="grid grid--2">
          <article class="card reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="12" cy="8" r="3.5"/><path d="M5 20c0-3.9 3.1-7 7-7s7 3.1 7 7"/></svg></div>
            <h3>Lead Engineer</h3>
            <p>
              Verantwoordelijk voor het technisch ontwerp, de uitgangspunten en de kwaliteit van het
              eindresultaat. Deze engineer stuurt het team aan, bewaakt de voortgang en is de
              gesprekspartner naar de opdrachtgever.
            </p>
          </article>
          <article class="card reveal">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 6h16v12H4z"/><path d="M8 10h8M8 14h5"/></svg></div>
            <h3>Detailengineer / Tekenaar</h3>
            <p>
              Werkt de schema&rsquo;s, klemmenstroken, kabelbladen en kastindelingen uit in ELCAD en
              EPLAN, binnen de standaarden en bibliotheken van de opdrachtgever. Nauwkeurig,
              consistent en volledig.
            </p>
          </article>
        </div>
        <div class="btn-row btn-row--center mt-3">
          <a class="btn btn--primary" href="<?php echo esc_url(gridsolutions_get_page_url('vacatures')); ?>">Bekijk onze vacatures</a>
          <a class="btn btn--ghost" href="mailto:info@gridsolutions.nl?subject=Open%20sollicitatie">Open sollicitatie sturen</a>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="cta-band reveal">
          <div>
            <h2>Kennismaken met Grid Solutions?</h2>
            <p>Wij vertellen graag hoe wij met onze engineeringcapaciteit bijdragen aan uw projecten en planningen.</p>
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

