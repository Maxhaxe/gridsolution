<?php
/**
 * Template Name: Diensten (Grid Solutions)
 * Description: Template voor Diensten (Grid Solutions) binnen het Grid Solutions thema.
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
          <p class="breadcrumb"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a><span>|</span>Diensten</p>
          <span class="eyebrow">Diensten</span>
          <h1>Engineering- en tekenwerkdiensten</h1>
          <p>Wij ondersteunen netbeheerbedrijven en hun toeleveranciers bij elk aspect van een engineeringtraject: van secundaire engineering op hoogspanningsstations tot het volledig uitwerken van werkpakketten in ELCAD en EPLAN.</p>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section__head reveal">
          <span class="eyebrow">Wat wij doen</span>
          <h2>Engineering, tekenwerk en documentatie</h2>
          <p class="lead">
            Wij nemen engineeringsvraagstukken volledig over of versterken uw eigen engineeringafdeling.
            Alle diensten worden uitgevoerd volgens de standaarden, bibliotheken en veiligheidsregels
            die binnen de netbeheersector gelden.
          </p>
        </div>
        <div class="grid grid--2">
          <article class="card reveal" id="secundaire-engineering">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 6h16M4 12h10M4 18h16"/><circle cx="19" cy="12" r="2"/></svg></div>
            <h2>Secundaire engineering</h2>
            <p>
              De secundaire installatie bepaalt hoe een station wordt beveiligd, bestuurd en bewaakt.
              Wij ontwerpen en werken deze systemen volledig uit: van beveiligingsfilosofie en
              systeemkeuze tot de definitieve schema&rsquo;s en instelwaarden.
            </p>
            <ul class="checklist">
              <li>Enkellijn- en principeschema&rsquo;s van meet-, beveiligings- en besturingssystemen</li>
              <li>Beveiligingsfilosofie, functietabellen en stuurschema&rsquo;s</li>
              <li>Meetschema&rsquo;s met stroom- en spanningstransformatoren</li>
              <li>Signaaloverzichten en koppelingen naar SCADA en RTU</li>
              <li>Gelijkstroom- en voedingsschema&rsquo;s, batterij- en laadsystemen</li>
              <li>Aarding en bliksembeveiliging in de secundaire installatie</li>
            </ul>
          </article>
          <article class="card reveal" id="elcad">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="4" y="4" width="16" height="16" rx="2"/><path d="M9 9h6v6H9z"/></svg></div>
            <h2>ELCAD-tekenwerk</h2>
            <p>
              Wij zijn volledig ingewerkt in ELCAD en kennen de manier waarop netbeheerbedrijven hun
              tekeningbestanden opbouwen en beheren. Daardoor zijn onze tekeningen direct inpasbaar
              &ndash; ook in bestaande, historische projecten.
            </p>
            <ul class="checklist">
              <li>Schema&rsquo;s in de eigen tekenstandaard en symboolbibliotheek van de opdrachtgever</li>
              <li>Klemmenstroken met volledige ader- en kabeladministratie</li>
              <li>Kabelbladen, verbindingslijsten en signaaloverzichten</li>
              <li>Revisietekeningen en het bijwerken van bestaande tekeningensets</li>
              <li>Opschonen en structureren van verouderde tekeningbestanden</li>
              <li>Oplevering in de formaten die uw organisatie hanteert</li>
            </ul>
          </article>
          <article class="card reveal" id="eplan">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M5 5h14v14H5z"/><path d="M9 2v3M15 2v3M9 19v3M15 19v3M2 9h3M2 15h3M19 9h3M19 15h3"/></svg></div>
            <h2>EPLAN engineering</h2>
            <p>
              Met EPLAN Electric P8 werken wij projectmatig en gestructureerd. Door macro&rsquo;s,
              apparaatselecties en artikeldata consequent te gebruiken, is elk ontwerp herhaalbaar,
              controleerbaar en direct geschikt voor productie en beheer.
            </p>
            <ul class="checklist">
              <li>Kastindeling en inbouwontwerpen voor schakel- en besturingskasten</li>
              <li>Macro&rsquo;s en klantspecifieke bibliotheken voor herhaalbaar ontwerp</li>
              <li>Artikel- en apparaatdata, stuklijsten en materiaaloverzichten</li>
              <li>Klemmen-, kabel- en aderconfiguratie in het project</li>
              <li>Rapportages: klemmenstroken, kabellijsten, apparatuuroverzichten</li>
              <li>Productiebestanden en export voor panelenbouw en montage</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <section class="section section--tint">
      <div class="container">
        <div class="grid grid--2">
          <article class="card reveal" id="werkpakketten">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M4 6h16v12H4z"/><path d="M8 10h8M8 14h5"/></svg></div>
            <h2>Complete werkpakketten</h2>
            <p>
              Een werkpakket moet compleet zijn: de monteur moet er zonder vragen mee aan de slag kunnen.
              Wij stellen daarom het volledige pakket samen, inclusief de documenten die bij realisatie
              en oplevering nodig zijn.
            </p>
            <ul class="checklist">
              <li>Uitgangspuntennotitie en ontwerpdocumentatie</li>
              <li>Definitieve tekeningensets in ELCAD of EPLAN</li>
              <li>Materiaallijsten, stuklijsten en besteloverzichten</li>
              <li>Montage- en inbedrijfstellingsinstructies</li>
              <li>Meet- en beproevingsplannen en opleverdossiers</li>
              <li>Ondersteuning tijdens realisatie en bij vragen uit het veld</li>
            </ul>
          </article>
          <article class="card reveal" id="revisie">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M20 6 9 17l-5-5"/><path d="M3 12a9 9 0 1 1 3 6.7"/></svg></div>
            <h2>Revisie en actualisatie</h2>
            <p>
              In de praktijk loopt de documentatie van een station zelden gelijk met de installatie.
              Wij brengen het verschil in kaart en zorgen voor &eacute;&eacute;n betrouwbare, actuele
              tekeningenset.
            </p>
            <ul class="checklist">
              <li>Inventarisatie op locatie van de werkelijke situatie</li>
              <li>Vergelijking van bestaande tekeningen met de installatie</li>
              <li>Verwerken van wijzigingen tot een consistente as-built set</li>
              <li>Revisiebeheer: versiebeheer, bladwijzers en wijzigingslijsten</li>
              <li>Oplevering in de bronbestanden van het gebruikte tekenpakket</li>
            </ul>
          </article>
          <article class="card reveal" id="detachering">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><circle cx="9" cy="8" r="3"/><path d="M3 20c0-3.3 2.7-6 6-6s6 2.7 6 6"/><path d="M17 9v6M14 12h6"/></svg></div>
            <h2>Detachering en flexibele capaciteit</h2>
            <p>
              Niet elke engineeringsvraag vraagt om een volledig project. Onze engineers en tekenaars
              zijn ook per dagdeel, projectmatig of als vaste bezetting beschikbaar &ndash; op locatie
              of remote, werkend in uw eigen systemen en processen.
            </p>
            <ul class="checklist">
              <li>Inzet bij piekbelasting of bij langdurige afwezigheid</li>
              <li>Werken binnen uw eigen projectomgeving en tekenstandaard</li>
              <li>Vaste contactpersoon en heldere rapportage over de voortgang</li>
              <li>Inzetbaar op locatie in heel Nederland of remote</li>
              <li>Ook als tijdelijk technisch aanspreekpunt voor een team</li>
            </ul>
          </article>
          <article class="card reveal" id="advies">
            <div class="card__icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><path d="M12 3l9 5v8l-9 5-9-5V8z"/><path d="M12 12l9-4M12 12v9M12 12L3 8"/></svg></div>
            <h2>Advies en ontwerptoetsing</h2>
            <p>
              Soms is de belangrijkste vraag welke oplossing het beste past. Wij adviseren over
              systeemkeuzes, standaardisatie en haalbaarheid, en toetsen ontwerpen op volledigheid,
              consistentie en normconformiteit.
            </p>
            <ul class="checklist">
              <li>Afweging van oplossingsrichtingen en standaardisatie</li>
              <li>Toetsing van concept- en definitief ontwerp</li>
              <li>Toetsing op normen, veiligheidsregels en interne standaarden</li>
              <li>Ondersteuning bij uitgangspunten en specificaties</li>
            </ul>
          </article>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="section__head reveal">
          <span class="eyebrow">Samenwerking</span>
          <h2>Zo werken wij met uw organisatie</h2>
        </div>
        <div class="stats reveal">
          <div class="stat">
            <strong>Vast aanspreekpunt</strong>
            <span>&Eacute;&eacute;n engineer als contactpersoon, van eerste vraag tot oplevering</span>
          </div>
          <div class="stat">
            <strong>Werkwijze op maat</strong>
            <span>Wij werken in uw systemen, met uw standaarden en bibliotheken</span>
          </div>
          <div class="stat">
            <strong>Heldere planning</strong>
            <span>Afspraken over doorlooptijd, tussenmomenten en oplevervorm</span>
          </div>
          <div class="stat">
            <strong>Kwaliteit geborgd</strong>
            <span>Interne review voordat een pakket wordt opgeleverd</span>
          </div>
        </div>
      </div>
    </section>

    <section class="section">
      <div class="container">
        <div class="cta-band reveal">
          <div>
            <h2>Weten wat wij voor uw project kunnen betekenen?</h2>
            <p>Neem contact op en vertel ons waar u aan werkt. Wij reageren binnen 24 uur (op werkdagen) met een voorstel voor de aanpak.</p>
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

