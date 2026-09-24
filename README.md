# Grid Solutions – website

Statische website (HTML, CSS, vanilla JavaScript) voor **Grid Solutions**: een engineeringbureau dat
engineering- en tekenwerkopdrachten uitvoert voor de grote netbeheerbedrijven, met diepgaande
ervaring in **ELCAD** en **EPLAN**.

De informatiestructuur is geïnspireerd op coerselektro.nl (engineering en tekenwerk voor
elektriciteitsnetbeheerders), maar volledig eigen gemaakt voor Grid Solutions.

## Structuur

```
gridsolutions/
├─ index.html          Homepage (hero, USP's, diensten, ELCAD/EPLAN, werkwijze, over ons, vacatures, CTA)
├─ diensten.html       Diensten: secundaire engineering, ELCAD, EPLAN, werkpakketten, revisie, detachering, advies
├─ over-ons.html       Over het bureau: uitgangspunten, expertise, team
├─ vacatures.html      Vacatures: Lead Engineer en Detailengineer / Tekenaar + open sollicitatie
├─ contact.html        Contactgegevens, contactformulier en veelgestelde vragen
├─ Start website.bat   Dubbelklik: start lokale server en opent de site in de browser
├─ robots.txt          Toegestaan voor alle crawlers + sitemapverwijzing
├─ sitemap.xml         Alle pagina's (domein: www.gridsolutions.nl)
└─ assets/
   ├─ logo.svg         Logo (twee cirkels met hoogspanningsmast en transformator + woordmerk)
   ├─ favicon.svg      Favicon op basis van het mast-symbool
   ├─ css/style.css    Volledige stylesheet (responsive, met CSS-variabelen)
   └─ js/main.js       Mobiel menu, actieve navigatie, scroll-animaties, formuliervalidatie
```

## Lokaal bekijken

**Snelste manier (Windows):** dubbelklik **`Start website.bat`**. Het script start een lokale
server en opent de site automatisch in je standaardbrowser. In het venster staat precies welk
adres er gebruikt wordt:

```
  Grid Solutions - website wordt gestart

    Map      : C:\...\gridsolutions\
    Adres    : http://127.0.0.1:8000/
    Ook via  : http://localhost:8000/
```

De server draait in het geminimaliseerde venster **"Grid Solutions server"**. Sluit dat venster
om de server te stoppen.

Wat het script zelf regelt:

| Situatie | Wat het script doet |
| --- | --- |
| Poort 8000 al in gebruik | Kiest automatisch de eerstvolgende vrije poort (8001, 8002, …) en meldt dat |
| `localhost` lost op naar IPv6 (`::1`) | De server luistert dual-stack, dus **zowel** `127.0.0.1` als `localhost` als `[::1]` werkt |
| Server nog niet klaar | Wacht (max. ~12 s) tot de server écht antwoordt en opent pas dan de browser |
| Geen werkende Python gevonden | Opent `index.html` direct als bestand (de site werkt ook zo volledig) |
| Server start niet | Toont de melding en opent `index.html` als terugvaloptie |

**Zonder server:** dubbelklik `index.html`. De site is volledig statisch en werkt ook via
`file://` (zie de tabel hieronder).

**Handmatig** een server starten:

```powershell
cd C:\Users\maxha\AppData\Local\Cline\gridsolutions
python -m http.server 8000 --bind ::
# open http://127.0.0.1:8000/  (of http://localhost:8000/)
```

De regel `--bind ::` is belangrijk: zonder die optie luistert de server alleen op IPv4 en kan
`http://localhost:8000/` in de browser mislukken, omdat Windows `localhost` ook naar IPv6
(`::1`) laat wijzen.

De site is volledig statisch: er is geen buildstap, database of server-side code nodig. Alle
paden zijn relatief, dus de map kan in zijn geheel naar elke hostingomgeving worden gekopieerd
(hoofdmap van het domein; `index.html` is de startpagina).

### Werkt `http://localhost:8000/` niet?

| Wat je ziet | Oorzaak / oplossing |
| --- | --- |
| "Deze site is niet bereikbaar" / verbinding geweigerd | De server draait niet (meer). Start `Start website.bat` opnieuw en laat het venster **"Grid Solutions server"** openstaan. Controleer ook het adres in het zwarte venster: bij een bezette poort is dat `8001`, `8002`, enz. |
| `localhost:8000` werkt, `127.0.0.1:8000` (of andersom) niet | IPv6- versus IPv4-resolving van `localhost`. Gebruik het adres dat in het venster staat, of probeer de andere vorm. |
| Adres werkt, maar de pagina blijft leeg | Zie de rij "Grote delen van de pagina blijven onzichtbaar" hieronder. |
| Vraagt Windows om netwerktoegang voor Python | Klik op **Toestaan**. Voor het bekijken op deze pc maakt het niet uit: verkeer via `localhost`/`127.0.0.1` wordt nooit door de firewall geblokkeerd. |
| Je wilt alleen even kijken | Dubbelklik `index.html`. Er is geen server nodig voor het bekijken van de site. |

### Als de site leeg of kapot lijkt

| Klacht | Oorzaak / oplossing |
| --- | --- |
| Grote delen van de pagina blijven onzichtbaar / lege secties | De scroll-animatie (`.reveal`) werd uitgevoerd zonder JavaScript. Dit is verholpen: zonder JavaScript staat alle content direct zichtbaar (`html:not(.js) .reveal` in `style.css`) en `main.js` heeft een vangnet dat content na 1,2 s alsnog toont. Werkt het nog niet: open de pagina via `Start website.bat` (een `http://`-adres) in plaats van een voorbeeldvenster in een editor; sommige editors blokkeren scripts. |
| Vreemde tekens zoals `Ã«` of `â€“` | De pagina's zijn UTF-8. Gebeurt dit in een editor, kies daar dan de codering UTF-8. In de browser kan dit alleen optreden bij een server die een andere tekenset afdwingt; zet dan `AddDefaultCharset UTF-8` (Apache) of `charset utf-8;` (nginx). |
| Menu ontbreekt op mobiel | Op schermen tot 880 px staat de navigatie achter de menuknop (hamburger) rechts in de balk. |
| Formulier verstuurt niet | Het formulier opent het e-mailprogramma van de bezoeker (`mailto:`). Zonder JavaScript wordt het formulier via de `action="mailto:..."`-fallback verstuurd. Voor een echte serververwerking: zie punt 3 hieronder. |


## Huisstijl

| Kleur | Hex | Gebruik |
| --- | --- | --- |
| Hoofdkleur | `#5f8a99` | Knoppen, accenten, logo |
| Donkerder | `#4c7281` | Hover-states, koppen |
| Licht | `#a9cad4` | Logo-cirkel, accenten op donker |
| Basis donker | `#22343c` | Topbar, footer, donkere secties |
| Achtergrond | `#f6f9fa` | Afwisselende secties |

Typografie: `Rajdhani` / `Bahnschrift` voor koppen (technisch, vierkant karakter, net als het logo)
en `Inter` / `Segoe UI` voor lopende tekst. Er zijn geen externe webfonts of libraries nodig.

## Nog aan te vullen (placeholders)

1. **Logo**: `assets/logo.svg` is een vectoruitwerking van het aangeleverde logo (raster-afbeelding
   was niet als bestand beschikbaar). Vervang dit door het originele bestand indien gewenst; de
   bestandsnaam kan hetzelfde blijven.
2. **Contactgegevens**: `info@gridsolutions.nl` is als e-mailadres ingevuld. Telefoonnummer,
   vestigingsadres, KvK- en BTW-nummer staan nog niet op de site (zie de TODO-commentaren in
   `index.html`, `contact.html` en de footer van alle pagina's).
3. **Formulier**: het contactformulier valideert in de browser en opent daarna het e-mailprogramma
   van de bezoeker met de ingevulde gegevens (`data-mailto`). Voor een server-side oplossing kan
   `data-mailto` vervangen worden door een POST-endpoint (bijvoorbeeld een formservice of eigen
   backend); de JS in `assets/js/main.js` is daarop voorbereid.
4. **Vacatureteksten**: de inhoud van `vacatures.html` (Lead Engineer, Detailengineer / Tekenaar) is
   opgesteld op basis van de functietitels uit de aangeleverde documenten. De originele
   Word-bestanden bleken beschadigd (de binaire zip-inhoud was grotendeels vervangen door
   vervangings­tekens), waardoor de tekst niet uitgelezen kon worden. Controleer en vul de
   functie-eisen, arbeidsvoorwaarden en standplaatsen aan.
5. **Domein**: canonical-URL's en `sitemap.xml` gaan uit van `https://www.gridsolutions.nl/`.
   Aanpassen bij een ander domein.
6. **Favicon/OG-afbeelding**: `og:image` verwijst naar `assets/logo.svg`; voor social previews is een
   PNG van circa 1200×630 aan te raden.
