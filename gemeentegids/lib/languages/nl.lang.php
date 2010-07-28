<?php // jEdit :folding=indent: :collapseFolds=1: :noTabs=true:
$LANG_TRANSLATION = array
(
//////////////////////////////////////////
// THE ADRESS BOOK RELOADED TRANSLATION
//////////////////////////////////////////

// ERRORS
'Not saved. An input value is missing:'=>'Niet bewaard. Een veld is niet ingevuld:',
'Administrative Lock Active'=>'Administratieve blokkering',
'This application is currently locked by an administrator because of database maintainance. You may not edit or delete any entries. Please retry later.'=>'Deze applicatie is momenteel geblokkeerd wegens werkzaamheden aan de database. Probeer het a.u.b. later nog eens.',
'Image is too wide or high. Please reduce its dimensions and try again.'=>'Afbeelding is te breed of hoog. Probeer de afmetingen te reduceren.', 

// login.php
'Login Screen'=>'Aanmeldscherm',
'Password'=>'Wachtwoord',
'Please log in to access the Address Book Reloaded'=>'Meld u a.u.b. aan om het programma te gebruiken',
'login'=>'Aanmelden',
'lost password'=>'wachtwoord vergeten',
'reset password'=>'Nieuw wachtwoord aanmaken',
'register'=>'Registreer als nieuwe gebruiker',
'log out'=>'Afmelden',
'logout'=>'Afmelden',
'Please enter your email address, and we will send you a new password.'=>'Voer uw emailadres in en wij sturen u een nieuw wachtwoord',
'Please enter an email address'=>'Voer uw emailadres in',
'Please enter a password'=>'Voer uw wachtwoord in',
'Incorrect password. Login denied.'=>'Verkeerd wachtwoord. Aanmelding geweigerd.',
'Too many failed login attempts. Login denied. Please '=>'Te veel mislukte pogingen voor aanmelden. Aanmelding geweigerd.',
'request a new password'=>'vraag een nieuw wachtwoord aan.',
'Cookies must be enabled to login.'=>'Om in te loggen moeten Cookies geaccepteerd wordein in uw browser.',
'Too many incorrect logins. Access denied. Delete your cookies (restart your browser or use a different computer).'=>'Te veel mislukte pogingen voor aanmelden. Aanmelding geweigerd. Verwijderd u a.u.b. uw cookies (herstart uw browser of gebruik een andere computer).',

// list.php => es wird die Übersetzung ignoriert, wenn ein Kontakt aufgeklappt wird
'List entries'=>'Digitale gemeentegids CGK-Utrecht West',
'You are currently logged in as:'=>'U bent momenteel aangemeld als:',
'You have administrator access.'=>'U heeft administratieve rechten.',
'Upcoming dates (Next 21 days)'=>'Aankomende gebeurtenissen (komende 21 dagen)',
'Nothing upcoming'=>'Geen aankomende gebeurtenissen',
'search'=>'Zoek',
'add new entry'=>'Nieuw item',
'personal settings'=>'Persoonlijke instellingen',
'admin panel'=>'Administratie',
'go to'=>'Ga naar',
'E-Mail addresses'=>'E-Mail adressen',
'Websites'=>'Websites',
'Messaging'=>'Chat',
'Addresses'=>'Adressen',
'Phonenumbers'=>'Telefoonnummers',
'Occupation'=>'Beroep',
'Function'=>'Functie',
'Product'=>'Product',
'Project'=>'Project',
'select group'=>'selecteer groep',
'(all entries)'=>'(alle items)',
'(hidden entries)'=>'(verborgen items)',
'(ungrouped entries)'=>'(ongegroepeerde items)',
'[all]'=>'[allen]',
'expand'=>'uitklappen',
'collapse'=>'inklappen',
'All Entries'=>'Alle items',
'admin'=>'Admin',
'manager'=>'Manager',
'user'=>'Gebruiker',
'guest'=>'Gast',
'This entry was last updated on'=>'Dit item was laatst gewijzigd op',
'return'=>'Terug',
'edit'=>'Bewerken',
'print'=>'Afdrukken',
'incorrect'=>'Fout',
'This is you'=>'Dit bent u',
'show/change my settings'=>'Toon/verander mijn instellingen',
'show/change settings'=>'Toon/verander instellingen',
'User type'=>'Gebruikerstype',
'Other Phone Numbers'=>'Andere telefoonnummers',
'Webs, News and Media'=>'Websites, nieuws en media',
'website'=>'Website',
'This is a user'=>'Dit is een gebruiker',

// searchlist.php
'Search List'=>'Zoek in lijst',
'Search'=>'Zoek',
'mail to selected'=>'E-mail verturen',
'No Entries.'=>'Geen items.',
'Go'=>'Ga', //ist noch ein <input type="submit" => Ändern in <button>Go</button>

// adminPanel.php 
'Admin Panel'=>'Administratiepaneel',
'Administration Options'=>'Administratie opties',
'User list'=>'Gebruikerslijst',
' Send email to: '=>' Stuur e-mail naar: ',
'administrators'=>'administratoren', 
'managers'=>'managers', 
'users'=>'gebruikers', 
'users and managers'=>'gebruikers en managers', 
'all'=>'alle', // wird nicht Übersetzt
'Help'=>'Help',
'deactivated'=>'gedeactiveerd',
'activate'=>'activeren',
'activated'=>'geactiveerd',
'not installed'=>'niet geinstalleerd',
'install'=>'installeren',
'uninstall'=>'deinstalleren',
//'Export'=>'Exportieren', Plugin Name 
//'Import'=>'Importieren', Plugin Name 
//'Mailto'=>'E-Mail an', Plugin Name 
'help'=>'help',
'Backup Database'=>'Backup van database maken',
'This creates a backup of the whole database (not only the part TAB is using) of TAB. This needs safe mode to be turned off or a link to the mysqldump binary placed in the safe_mode_exec_dir (currently not set on this server).'=>'Hiermee maakt u een backup van de complete database waarvan TAB gebruik van maakt. Hiervoor moet safe mode van PHP uitgeschakeld worden, of er moet een link naar de mysqldump applicatie geplaatst worden in de safe_mode_exec_dir (momenteel niet ingesteld op deze server).',
'Change Global Options'=>'Globale instellingen wijzigen',
'User interface: CSS style'=>'Gebruikersinterface: CSS stijl',
'Login: require login to access contacts'=>'Aanmelding: aanmelden vereist om contacten te kunnen inzien',
'Login: login message'=>'Aanmelding: Aanmeldingsbericht',
'Login: allow self registration'=>'Aanmelding: Selfregistratie toestaan',
'allow for everyone'=>'voor iedereen toestaan',
'only allow for contacts'=>'alleen voor contacten toestaan',
'only allow for contacts, no confirmation'=>'alleen voor contacten toestaan, zonder bevestiging',
'Main list: welcome message'=>'Hoofdlijst: Welkomstbericht',
'Main list: maximum number of autocomplete search results'=>'Hoofdlijst: maximaal aantal autocomplete zoekresultaten',
'Main list: display recently changed contacts'=>'Hoofdlijst: toon recent gewijzigde contacten',
'Main list: maximum number for recently changed contacts and dates'=>'Hoofdlijst: Maximum aantal voor recent gewijzigde contacten en datums',
'Main list: display dates/recently changed contacts n days forward/backward'=>'Hoofdlijst: toon datums en recent gewijzigde contacten n dagen vantevoren/achteraf',
'Main list: default group'=>'Hoofdlijst: standaard groep',
'Contact: always display picture'=>'Contact: Afbeelding altijd tonen',
'Contact: picture width'=>'Contact: Breedte afbeelding',
'Contact: picture height'=>'Contact: Hoogte afbeelding',
'Edit: trash mode (only admin deletes contacts permanently)'=>'Berwerken: Prullenbak modus (alleen administratoren kunnen verwijderen)',
'Edit: allow picture upload'=>'Bewerken: upload van afbeeldingen toestaan',
'Edit: picture clip mode'=>'Bewerken: Clip modus van afbeeldingen',
'Resize'=>'Grootte aanpassen',
'Resize and Crop'=>'Grootte aanpassen en clippen',
'Resize and Fit'=>'Grootte gunstig aanpassen',
'Edit: default country'=>'Bewerken: standaard land',
'Login: BCC email to all admins upon self registration (admin can confirm)'=>'Aanmelding: BCC E-mail naar alle administratoren na selfregistratie (administrator kan bevestigen)',
'ADMIN: email subject'=>'Admin: E-mail onderwerp',
'ADMIN: email signature'=>'Admin: E-mail ondertekening',
'ADMIN: lock modifications (edit and delete)'=>'Admin: Applicatie blokkeren (bewerken en verwijderen)',
'Users can send email with a web interface from the server (feature will be dropped if not in demand - post to discussion forums if you need this)'=>'Gebruikers mogen e-mail versturen via de web interface (dit feature kan komen te vervallen als er geen vraag naar is - stuur een bericht op het discussie forum als u het wenst)',
'Change Group Names'=>'Groepnaam wijzigen',
'Change the group names and press save on the bottom. A group starting with #h# is hidden from the main list selector, but the individual contacts of a hidden group are listed in the list and can be reached by direct links (unless the contacts themselves are hidden).'=>'Ãndern Sie den Gruppennamen und drÃ¼cken Sie speichern am Ende der Seite. Eine Gruppe, die mit #h# beginnt wird in der Hauptliste versteckt, aber die einzelnen Kontakte dieser Gruppe werden in der Hauptliste angezeigt und kÃ¶nnen Ã¼ber Direktlinks erreicht werden (solange die Kontakte selber versteckt sind).',
'Group Name'=>'Groepnaam',
'Acronym'=>'Acroniem',
'Logo URL (future use)'=>'URL voor het logo (toekomstig gebruik)',

// options.php
'Options'=>'Instellingen',
'Edit your options'=>'Instellingen aanpassen',
'Change password'=>'Wachtwoord wijzigen',
'Old password'=>'Oud wachtwoord',
'New password'=>'Nieuw wachtwoord',
'New passwords do not match.'=>'Nieuwe wachtwoorden komen niet overeen.',
'Password successfully changed.'=>'Wachtwoord succesvol aangepast.',
'Incorrect old password.'=>'Oud wachtwoord incorrect.',
'Repeat'=>'Opnieuw',
'change password'=>'wachtwoord wijzigen',
'Change e-mail address'=>'E-mailadres wijzigen',
'New e-mail address'=>'Nieuw e-mailadres',
'change email'=>'e-mail wijzigen',
'Change your options'=>'Instellingen wijzigen',
'Main list: limit entries per page'=>'Hoofdlijst: beperkt aantal items per pagina',
'Main list: display dates'=>'Hoofdlijst: Gebeurtenissen tonen',
'default'=>'standaard',
'yes'=>'ja',
'no'=>'nee',
'Main list: display dates and recently changed contacts n days back'=>'Hoofdlijst: toon datums en recent gewijzigde contacten n dagen achteraf',
'URI: Replace tel: (e.g. skype:$?call)'=>'URI: Vervang tel: (bijvoorbeeld skype:$?call)',
'URI: Replace fax: (e.g. sip:$@sip.com:5060)'=>'URI: Vervang fax: (bijvoorbeeld sip:$@sip.com:5060)',
'User interface language'=>'Taal voor gebruikersinterface',
'autodetect'=>'Automatisch detecteren',
'english'=>'Engels',

'The contact of this user does not have this e-mail.'=>'De contact van deze gebruikers heeft niet dit e-mailadres',

// contact.php
'[create user]'=>'[Gebruiker aanmaken]',
'[change view]'=>'[View aanpassen]',
'[adminsave]'=>'[Admin opslaan]',
'cancel'=>'Annuleren',
'trash'=>'Prullenbak',
'Names'=>'Namen',
'A Last Name/Company Name is required for an entry to exist. If you need an additional company name for a contact use the groups on the bottom of the page. A contact can be assigned to multiple groups.'=>'Een achternaam of bedrijfsnaam is nodig. Als i meerdere bedrijfsnamen nodig hebt, gebruik dan de groepen onderaan de pagina. Een contact kan meerdere groepen toegekend krijgen',
'Last name or company'=>'Achternaam',
'First name'=>'Voorletters',
'Other name(s)'=>'Tussenvoegsel',
'Prefixes'=>'Titel',
'Suffixes'=>'Achtervoegsel',
'Other (nickname, company)'=>'Roepnaam',
'Sex'=>'Geslacht',
'N/A'=>'N.v.t.',
'female'=>'Vrouw',
'male'=>'Man',
'All fields are optional. An address will be saved if either of the following are provided: type, address lines, city, state, zip code, or a phone number. If Primary Address is selected, the address will be displayed in the contact list. To obtain more than 2 additional blank address sections, save this entry and edit it again.'=>'Alle velden zijn optioneel. Een adres kan opgeslagen worden als minstens een van de volgende velden ingevuld zijn: type, adres regels, plaats, provincie, postcode of een telefoonnummer. Als Primair adres geselecteerd is dan word dat adres in de contactlijst opgenomen. Voor meer dan 2 extra adressecties, sla dit item op en open het nogmaals.',
'Address type'=>'Adrestype',
'Set as primary address'=>'Primair adres',
'Delete this address'=>'Verwijder dit adres',
'Address (Line 1)'=>'Wooncomplex',
'Address (Line 2)'=>'Adres',
'City'=>'Woonplaats',
'Zip-code'=>'Postcode',
'Phone 1'=>'Telefoon 1',
'Phone 2'=>'Telefoon 2',
'Country'=>'Land',

'url'=>'URL',
'add address'=>'Adres toevoegen',
'Communications'=>'Communicatiemiddelen',
'Mandatory Information'=>'Verplichte velden',
'Each entry is of the form: group, label, value, and view permissions. The group selects where information is placed on the output. For example all emails are placed together. Select the label to qualify an entry. For example for phonenumbers you could use fax or cell. Viewing permissions can be public (everyone can see the item, users and managers can modify it), private (only the user and admin can see and modify the item), admin (user can view but only an admin can modify an item).'=>'Elk item heeft als schema: groep, beschrijving, waarde en toegangsrechten. De groep bepaalt waar de informatie word getoond. Bijvoorbeeld, alle e-mails worden bij elkaar geplaatst. De beschrijving is om de item te kwalificeren. Bijvoorbeeld voor telefoonnummers kunt u mobiel of fax gebruiken. Toegangsrechten kunnen zijn publiek (iedereen kan het zien, gebruikers en managers kunnen wijzigen), prive (alleen de gebruiker zelf en de managers kunnen het zien) of admin (een gebruiker kan het inzien, maar alleen een administrator kan het wijzigen).',
'email'=>'e-mail',
'phone'=>'telefoon',
'chat'=>'chat',
'public'=>'publiek',
'private'=>'prive',
'other'=>'anders',
'Dates'=>'Gebeurtenissen',
'Each entry is of the form: repeat, label, start date, end date, and view permissions. REPEAT selects how a date entry repeats. Weekly, mothly and yearly only is meaningful with one day events. Autoremove means the event will be automatically removed from the database after the end date. Then enter an arbitrary string as LABEL. START DATE equal to ? means already ongoing. An END DATE equal to ? is ongoing forever after the start date, a ONE DAY EVENT has a blank end date. Dates are entered in the format YYYY-MM-DD: 2007-04-31. Viewing permissions can be public (everyone can see the item, users and managers can modify it), private (only the user and admin can see and modify the item), admin (user can view but only an admin can modify an item).'=>'Elk item heeft als schema: herhaling, beschrijving, startdatum, einddatum, en toegangsrechten. De herhaling bepaald hoe vaak een gebeurtenis herhaald wordt. Wekelijks, maandelijks, jaarlijks,zijn alleen zinvol bij gebeurtenissen van 1 dag. Autoverwijder betekent dat een gebeurtenis automatisch uit de database verwijderd word na de einddatum. Geef een geschikte beschrijving voor de gebeurtenis. Een startdatum met ? betekent dat de gebeurtenis al gaande is. Een einddatum van " betekent dat het oneindig is na de startdatum. een gebeurtenis 1 dag heeft een blaco start- en einddatum. Datums dienen ingevoerd te worden als JJJJ-MM-DD (bv 2007-04-30). Toegangsrechten kunnen zijn publiek (iedereen kan het zien, gebruikers en managers kunnen wijzigen), prive (alleen de gebruiker zelf en de managers kunnen het zien) of admin (een gebruiker kan het inzien, maar alleen een administrator kan het wijzigen).',
'yearly'=>'jaarlijks',
'monthly'=>'maandelijks',
'weekly'=>'wekelijks',
'once'=>'eennmalig',
'autoremove'=>'Autoverwijder',
'Mugshot'=>'Portretfoto',
'If an URL to the mugshot is set this overrides any uploaded picture! If you upload a picture to the DB make sure that the "URL to mugshot" field is empty and has no space in it. If the admin does not allow uploads the upload button will not show and you can only set an URL. In case of URLs you can omit the protocol and server name if the image is stored on the same server as this application runs. Then you could use /gallery/people/small/me.jpg to locate the image. PHP restrictions may prevent uploads.'=>'Als een URL naar de protretfoto gegeven is heeft dit voorrang boven een ge-uploade foto. Als u een foto wilt uploaden daar de database, wees er dan zeker van dat het "URL voor portretfoto" dan leeg is (en ook geen spaties bevat). Als de administrator het uploaden van foto\'s niet toestaat, dan zal de Upload-knop niet zichbaar zijn. Het protocol en de servernaam mogen achterwege blijven als deze op dezelfde server staan als deze applicatie. In dit geval gebruikt u bijvoorbeeld /gallery/people/small/foto.jpg. PHP restricites kunnen van topassing zijn voor het uploaden.',
'URL to mugshot'=>'URL voor portretfoto',
'Upload mugshot'=>'Portretfoto uploaden',
'Notes'=>'Aantekeningen',
'Text in the Notes box will be displayed exactly as you type it. The area will grow after saving whenever you add more lines of text.'=>'Tekst in het Aantekeningen-veld zal getoond worden zoals u het ingetypt heeft. De beschikbare ruimte zal groeien na het opslaan als u meerdere regels heeft ingetypt.',
'Groups'=>'Groepen',
'Add new group'=>'Nieuwe groep toevoegen',
'Hide this entry'=>'Dit item verbergen',
'cancel'=>'Annuleren',
'trash'=>'Prullenbak',
'adminsave'=>'admin opslaan',

// Error Page
'If you still need help, or you believe this to be a bug, copy the calling URL from the browser '=>'Als u nog hulp nodig hebt, of u denkt dat dit een fout is, kopieer dan de URL van uw browser',
' and then please notify '=>' en meld dit dan aan ',
'NOW'=>'NU',
'If necessary, please press the BACK button on your browser to return to the previous screen and correct any possible mistakes. You can also try the following actions that might solve your problem:'=>'Indien van toepassing, druk dan op de Vorige-knop van uw browser om terug te gaan en verbeter eventuele fouten. U kunt ook het volgende proberen om de fout op te lossen:',
'An error with your login occured:'=>'Er is een fout opgetreden bij uw aanmelding:',
'You are currently not logged in. Please login with appropriate privileges to perform this action.'=>'U bent momenteel niet aangemeld. Meld u zich aan om deze aktie uit te voeren.',
'You are not allowed to perform this action.'=>'U bent niet geauthoriseerd om deze aktie uit te voeren.',
'Please log in: '=>'Aanmelden: ',
'Email sending failed: '=>'E-Mail versturen mislukt: ',
'Error'=>'Fout',
'The file type is not valid!'=>'Dit bestandstype is niet toegestaan!',
'Please only select the following:'=>'Kiest u alstublieft uit de volgende:',
'The following error occurred:'=>'Deze fout is opgetreden:',
'default page'=>'hoofd pagina',
'destroy session (force logout)'=>'Sessie afsluiten (forceert een afmelding)',
'advanced'=>'meer instellingen',
'[upgrade database]'=>'[datenbase updaten]',
'[install database]'=>'[datenbase installeren]',
'[php info]'=>'[php info]',

// General/Multiple Pages
'added'=>'Toegevoegd',
'changed'=>'Gewijzigd',
'deleted'=>'Verwijderd',
'delete'=>'Verwijderen',
'save'=>'Opslaan',

'Name'=>'Naam',
'Address'=>'Adres',
'Zip code'=>'Postcode',
'Location (city)'=>'Plaats',
'State'=>'Provincie',
'Coutry'=>'Land',
'(blank)'=>'(leeg)',
'Phone'=>'Telefoon',
'Email'=>'E-mail',
'login page'=>'Aanmeldpagina',

// General Footer Information
'Page creation time:'=>'Pagina aangenmaakt in ',
'seconds.'=>'seconden.',
'This application may use '=>'Deze toepassing kan eventueel gebruik maken van ',

// register.php?mode=lostpassword
'Go to the '=>'Ga naar ',
' to use it.'=>' om het te gebruiken.',

// Help Text
'Page-ContextHelp-name' => 'Een achternaam of bedrijfsnaam is nodig. Als i meerdere bedrijfsnamen nodig hebt, gebruik dan de groepen onderaan de pagina. Een contact kan meerdere groepen toegekend krijgen',
'Page-ContextHelp-address' => 'Alle velden zijn optioneel. Een adres kan opgeslagen worden als minstens een van de volgende velden ingevuld zijn: type, adres regels, plaats, provincie, postcode of een telefoonnummer. Als Primair adres geselecteerd is dan word dat adres in de contactlijst opgenomen. Voor meer dan 2 extra adressecties, sla dit item op en open het nogmaals.',
'Page-ContextHelp-date' => 'Elk item heeft als schema: groep, beschrijving, waarde en toegangsrechten. De groep bepaald waar de informatie word getoond. Bijvoorbeeld, alle e-mails worden bij elkaar geplaatst. De beschrijving is om de item te kwalificeren. Bijvoorbeeld voor telefoonnummers kunt u mobiel of fax gebruiken. Toegangsrechten kunnen zijn publiek (iedereen kan het zien, gebruikers en managers kunnen wijzigen), prive (alleen de gebruiker zelf en de managers kunnen het zien) of admin (een gebruiker kan het inzien, maar alleen een administrator kan het wijzigen).',
'Page-ContextHelp-mugshot' => 'Als een URL naar de protretfoto gegeven is heeft dit voorrang boven een ge-uploade foto. Als u een foto wilt uploaden daar de database, wees er dan zeker van dat het "URL voor portretfoto" dan leeg is (en ook geen spaties bevat). Als de administrator het uploaden van foto\'s niet toestaat, dan zal de Upload-knop niet zichbaar zijn. Het protocol en de servernaam mogen achterwege blijven als deze op dezelfde server staan als deze applicatie. In dit geval gebruikt u bijvoorbeeld /gallery/people/small/foto.jpg. PHP restricites kunnen van topassing zijn voor het uploaden.',
'Page-ContextHelp-property' => 'Elk item heeft als schema: groep, beschrijving, waarde en toegangsrechten. De groep bepaald waar de informatie word getoond. Bijvoorbeeld, alle e-mails worden bij elkaar geplaatst. De beschrijving is om de item te kwalificeren. Bijvoorbeeld voor telefoonnummers kunt u mobiel of fax gebruiken. Toegangsrechten kunnen zijn publiek (iedereen kan het zien, gebruikers en managers kunnen wijzigen), prive (alleen de gebruiker zelf en de managers kunnen het zien) of admin (een gebruiker kan het inzien, maar alleen een administrator kan het wijzigen).',
'Page-ContextHelp-notes' => 'Tekst in het Aantekeningen-veld zal getoond worden zoals u het ingetypt heeft. De beschikbare ruimte zal groeien na het opslaan als u meerdere regels heeft ingetypt.',
'Page-ContextHelp-mandatory' => 'Deze velden zijn verplicht. U kunt niet opslaan zonder hier iets op te geven.',
'Page-ContextHelp-admin-groups' => 'Verander de namen van de groepen en druk op Opslaan. Een groep met #h# word niet getoond op het selectiedeel van de hoofdlijst. echter, de individuele leden van een verborgen groep worden wel getoond in de lijst en kunnen direct benaderd worden (tenzij zij zef verborgen zijn).',
''=>''
);

// run checkcountries.php in this directory to verify that all are aligned to the master language list
// order the sourrounding/affected countries of the language area to the top, otherwise alphabetic order
global $country;
$country = array(
'--'=>"",
'af'=>"Afghanistan",
'ax'=>"Ålandseilanden",
'al'=>"Albanië",
'dz'=>"Algerije",
'as'=>"Amerikaans-Samoa",
'vi'=>"Amerikaanse Maagdeneilanden",
'ad'=>"Andorra",
'ao'=>"Angola",
'ai'=>"Anguilla",
'aq'=>"Antarctica",
'ag'=>"Antigua en Barbuda",
'ar'=>"Argentinië",
'am'=>"Armenië",
'aw'=>"Aruba",
'au'=>"Australië",
'az'=>"Azerbeidzjan",
'bs'=>"Bahama's",
'bh'=>"Bahrein",
'bd'=>"Bangladesh",
'bb'=>"Barbados",
'be'=>"België",
'bz'=>"Belize",
'bj'=>"Benin",
'bm'=>"Bermuda",
'bt'=>"Bhutan",
'bo'=>"Bolivia",
'ba'=>"Bosnië en Herzegovina",
'bw'=>"Botswana",
'bv'=>"Bouvet",
'br'=>"Brazilië",
'io'=>"Brits Territorium in de Indische Oceaan",
'vg'=>"Britse Maagdeneilanden",
'bn'=>"Brunei",
'bg'=>"Bulgarije",
'bf'=>"Burkina Faso",
'bi'=>"Burundi",
'kh'=>"Cambodja",
'ca'=>"Canada",
'cf'=>"Centraal-Afrikaanse Republiek",
'cl'=>"Chili",
'cn'=>"China",
'cx'=>"Christmaseiland",
'cc'=>"Cocoseilanden",
'co'=>"Colombia",
'km'=>"Comoren",
'cg'=>"Congo-Brazzaville",
// 'cd'=>"Congo-Kinshasa",
'ck'=>"Cookeilanden",
'cr'=>"Costa Rica",
'cu'=>"Cuba",
'cy'=>"Cyprus",
'dk'=>"Denemarken",
'dj'=>"Djibouti",
'dm'=>"Dominica",
'do'=>"Dominicaanse Republiek",
'de'=>"Duitsland",
'ec'=>"Ecuador",
'eg'=>"Egypte",
'sv'=>"El Salvador",
'gq'=>"Equatoriaal-Guinea",
'er'=>"Eritrea",
'ee'=>"Estland",
'et'=>"Ethiopië",
'fo'=>"Faeröer",
'fk'=>"Falklandeilanden",
'fj'=>"Fiji",
'ph'=>"Filipijnen",
'fi'=>"Finland",
'fr'=>"Frankrijk",
'gf'=>"Frans-Guyana",
'pf'=>"Frans-Polynesië",
'tf'=>"Franse Zuidelijke en Antarctische Gebieden",
'ga'=>"Gabon",
'gm'=>"Gambia",
'ge'=>"Georgië",
'gh'=>"Ghana",
'gi'=>"Gibraltar",
'gd'=>"Grenada",
'gr'=>"Griekenland",
'gl'=>"Groenland",
'gp'=>"Guadeloupe",
'gg'=>"Guernsey",
'gu'=>"Guam",
'gt'=>"Guatemala",
'gn'=>"Guinee",
'gw'=>"Guinee-Bissau",
'gy'=>"Guyana",
'ht'=>"Haïti",
'hm'=>"Heard en McDonaldeilanden",
'hn'=>"Honduras",
'hu'=>"Hongarije",
'hk'=>"Hongkong",
'ie'=>"Ierland",
'is'=>"IJsland",
'in'=>"India",
'id'=>"Indonesië",
'iq'=>"Irak",
'ir'=>"Iran",
'im'=>"Isle of Man",
'il'=>"Israël",
'it'=>"Italië",
'ci'=>"Ivoorkust",
'jm'=>"Jamaica",
'jp'=>"Japan",
'ye'=>"Jemen",
'je'=>"Jersey",
'jo'=>"Jordanië",
'ky'=>"Kaaimaneilanden",
'cv'=>"Kaapverdië",
'cm'=>"Kameroen",
'kz'=>"Kazachstan",
'ke'=>"Kenia",
'kg'=>"Kirgizië",
'ki'=>"Kiribati",
'kw'=>"Koeweit",
'hr'=>"Kroatië",
'la'=>"Laos",
'ls'=>"Lesotho",
'lv'=>"Letland",
'lb'=>"Libanon",
'lr'=>"Liberia",
'ly'=>"Libië",
'li'=>"Liechtenstein",
'lt'=>"Litouwen",
'lu'=>"Luxemburg",
'mo'=>"Macau",
'mk'=>"Macedonië",
'mg'=>"Madagaskar",
'mw'=>"Malawi",
'mv'=>"Maldiven",
'my'=>"Maleisië",
'ml'=>"Mali",
'mt'=>"Malta",
'ma'=>"Marokko",
'mh'=>"Marshalleilanden",
'mq'=>"Martinique",
'mr'=>"Mauritanië",
'mu'=>"Mauritius",
'yt'=>"Mayotte",
'mx'=>"Mexico",
'fm'=>"Micronesia",
'md'=>"Moldavië",
'mc'=>"Monaco",
'mn'=>"Mongolië",
'me'=>"Montenegro",
'ms'=>"Montserrat",
'mz'=>"Mozambique",
'mm'=>"Myanmar",
'na'=>"Namibië",
'nr'=>"Nauru",
'nl'=>"Nederland",
'an'=>"Nederlandse Antillen",
'np'=>"Nepal",
'ni'=>"Nicaragua",
'nc'=>"Nieuw-Caledonië",
'nz'=>"Nieuw-Zeeland",
'ne'=>"Niger",
'ng'=>"Nigeria",
'nu'=>"Niue",
'mp'=>"Noordelijke Marianen",
'kp'=>"Noord-Korea",
'no'=>"Noorwegen",
'nf'=>"Norfolk",
'ug'=>"Oeganda",
'ua'=>"Oekraïne",
'uz'=>"Oezbekistan",
'om'=>"Oman",
'at'=>"Oostenrijk",
'tl'=>"Oost-Timor",
'pk'=>"Pakistan",
'pw'=>"Palau",
// 'ps'=>"Palestijnse Autoriteit",
'pa'=>"Panama",
'pg'=>"Papoea-Nieuw-Guinea",
'py'=>"Paraguay",
'pe'=>"Peru",
'pn'=>"Pitcairneilanden",
'pl'=>"Polen",
'pt'=>"Portugal",
'pr'=>"Puerto Rico",
'qa'=>"Qatar",
're'=>"Réunion",
'ro'=>"Roemenië",
'ru'=>"Rusland",
'rw'=>"Rwanda",
'bl'=>"Saint-Barthélemy",
'kn'=>"Saint Kitts en Nevis",
'lc'=>"Saint Lucia",
'pm'=>"Saint-Pierre en Miquelon",
'vc'=>"Saint Vincent en de Grenadines",
'sb'=>"Salomonseilanden",
'ws'=>"Samoa",
'sm'=>"San Marino",
'st'=>"Sao Tomé en Principe",
'sa'=>"Saoedi-Arabië",
'sn'=>"Senegal",
'rs'=>"Servië",
'sc'=>"Seychellen",
'sl'=>"Sierra Leone",
'sg'=>"Singapore",
'sh'=>"Sint-Helena",
'mf'=>"Sint-Maarten",
'si'=>"Slovenië",
'sk'=>"Slowakije",
'so'=>"Somalië",
'es'=>"Spanje",
'lk'=>"Sri Lanka",
'sd'=>"Soedan",
'sr'=>"Suriname",
'sj'=>"Spitsbergen en Jan Mayen",
'sz'=>"Swaziland",
'sy'=>"Syrië",
'tj'=>"Tadzjikistan",
'tw'=>"Taiwan",
'tz'=>"Tanzania",
'th'=>"Thailand",
'tg'=>"Togo",
'tk'=>"Tokelau-eilanden",
'to'=>"Tonga",
'tt'=>"Trinidad en Tobago",
'td'=>"Tsjaad",
'cz'=>"Tsjechië",
'tn'=>"Tunesië",
'tr'=>"Turkije",
'tm'=>"Turkmenistan",
'tc'=>"Turks- en Caicoseilanden",
'tv'=>"Tuvalu",
'um'=>"Kleine Pacifische eilanden van de Verenigde Staten",
'uy'=>"Uruguay",
'vu'=>"Vanuatu",
'va'=>"Vaticaanstad",
've'=>"Venezuela",
'ae'=>"Verenigde Arabische Emiraten",
'gb'=>"Verenigd Koninkrijk",
'us'=>"Verenigde Staten",
'vn'=>"Vietnam",
'wf'=>"Wallis en Futuna",
'eh'=>"Westelijke Sahara",
'by'=>"Wit-Rusland",
'zm'=>"Zambia",
'zw'=>"Zimbabwe",
'za'=>"Zuid-Afrika",
'gs'=>"Zuid-Georgië en de Zuidelijke Sandwicheilanden",
'kr'=>"Zuid-Korea",
'se'=>"Zweden",
'ch'=>"Zwitserland"
);

?>
