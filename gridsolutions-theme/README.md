# Grid Solutions WordPress Thema

Dit WordPress thema zet de complete Grid Solutions website 1-op-1 over naar WordPress met behoud van de vormgeving, styling, animaties en responsive werking.

## 1. Installatie in WordPress
1. Log in op je WordPress beheeromgeving (jouwdomein.nl/wp-admin).
2. Ga in het linkermenu naar **Weergave (Appearance)** > **Thema's (Themes)**.
3. Klik bovenaan op **Nieuwe toevoegen (Add New)** en vervolgens op **Thema uploaden (Upload Theme)**.
4. Kies het bestand gridsolutions-theme.zip en klik op **Nu installeren**.
5. Klik direct na de installatie op **Activeren**.

## 2. Pagina's aanmaken en koppelen
Maak in WordPress onder **Pagina's** > **Nieuwe pagina** de volgende pagina's aan:
- **Home** (slug: home)
- **Diensten** (slug: diensten)
- **Over ons** (slug: over-ons)
- **Vacatures** (slug: acatures)
- **Contact** (slug: contact)

### Homepage instellen:
1. Ga naar **Instellingen** > **Lezen**.
2. Selecteer bij *Je homepage toont* de optie **Een statische pagina**.
3. Kies bij *Homepage* je aangemaakte pagina **Home**.
4. Klik op **Wijzigingen opslaan**.

## 3. Tekst bewerken in WordPress
- **Pagina-editor**: Je kunt in elke pagina in WordPress gewoon eigen tekst, mededelingen of introducties typen. Deze worden direct netjes op de pagina getoond.
- **Menu aanpassen**: Via **Weergave** > **Menu's** kun je het menu naar wens beheren en koppelen aan de locatie *Hoofdmenu*.
- **Thema-bestanden bewerken**: Alle teksten van de blokken staan ook in de PHP-templates (ront-page.php, page-diensten.php, etc.).

## 4. Updates via GitHub
Dit thema is gekoppeld aan de GitHub structuur. Je kunt eventueel via GitHub Actions of een plugin zoals *GitHub Theme Updater* of *WP Pusher* automatische updates pushen vanuit je GitHub repository!
