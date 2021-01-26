<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Age_category;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $age_categorie = Age_category::first();
        $product = Product::create([
            'name' => 'Puerto Rico',
            'excerpt' => 'Wie wordt de rijkste plantage-eigenaar?',
            'body' => 'In 1493 ontdekt Columbus Puerto Rico, de parel van het Caribische gebied. En al een goede halve eeuw later beleeft het eiland haar eerste grote bloeiperiode. De spelers kruipen tijdens het spel steeds weer in een andere rol. Als kolonist leggen ze vruchtbare plantages aan. Als opzichter produceren ze waardevolle goederen, die ze dan, in de rol van handelaar, met de hoogst mogelijke winst verkopen. Dat verdiende geld gebruiken ze dan weer om als bouwmeester indrukwekkende stadsgebouwen op te richten.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/puerto_rico.jpg',
            'age_category_id' => $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'El Grande',
            'excerpt' => 'De spelers proberen zoveel mogelijk invloed te krijgen in Spanje. Daartoe sturen ze Caballero’s uit. Die proberen in alle regio’s meerderheden te halen. ',
            'body' => 'De spelers zijn edelen onder de Spaanse koning en voeren een onderlinge machtsstrijd om de invloedrijkste hoveling te worden. Zij plaatsen hun caballero’s in de Spaanse provincies en aan het hof van de koning. Wie bij de drie tellingen in de provincies de meerderheid heeft, scoort hoger! De koning speelt een passieve rol en wordt door de spelers gemanipuleerd. Iedere beurt bieden de spelers op vijf kaarten, die elk een andere actie mogelijk maken. Maar een sterke actie betekent ook een beperking: je mag dan minder caballero’s op het bord zetten. Dat betekent minder macht. Het houten kasteel van de Koning geeft nog een verrassende draai aan dit werkelijk briljante spel, dat in geen collectie mag ontbreken.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/el_grande.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Orléans',
            'excerpt' => 'Het spel speelt zicht af in de Frans stad Orléans tijdens de middeleeuwen. Het is de bedoeling om zo veel en vooral zo goed mogelijk de volgelingen in te zetten, er zijn monniken, ridders, boeren, … De speler die dit het beste doet is de winnaar.',
            'body' => 'De Middeleeuwen: in Orléans en omgeving stelt iedere speler zijn eigen gevolg samen uit boeren, handelaren, ridders, monniken… Je hebt je volgelingen en hun kwaliteiten hard nodig om je macht uit te breiden, ofwel door te handelen, als vakman of in dienst van de wetenschap. Ridders zorgen er voor dat je meer acties kunt uitvoeren en ze zijn ook nodig om handelsreizen te begeleiden. In het dorp kun je vaklieden vinden die helpen bij de bouw van handelshuizen en die gereedschap kunnen maken. Geleerden zijn belangrijk omdat zij wetenschappelijke vooruitgang boeken. Tenslotte kan het geen kwaad om actief te zijn in het klooster, want met de hulp van monniken ben je minder aan het lot overgeleverd. Je wilt altijd meer acties doen dan je kunt en er zijn vele wegen die naar je doel leiden. De kunst is om uit de verschillende spelelementen een combinatie te kiezen die het beste bij je strategie past.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/orleans.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Caylus',
            'excerpt' => 'De spelers zijn bouwmeesters die bouwen aan het kasteel en de nabijgelegen stad Caylus om zo de meeste prestigepunten te verkrijgen.',
            'body' => '1289. Om de grenzen van het Franse Koningrijk te versterken besluit Koning Philip de Schone om een nieuw kasteel te bouwen. Op dat moment is Caylus een klein stadje, maar heel snel verzamelen vele arbeiders en ambachtslieden zich aan de rand van het stadje en op de wegen er naartoe. Allemaal aangetrokken door de goede vooruitzichten. Rondom het bouwterrein verrijst langzaam een stad… De spelers kruipen in de huid van bouwmeesters. Door het kasteel van de koning te bouwen en de stad te ontwikkelen verdienen ze “aanzien” punten en op die manier de gunst van de koning. Als het kasteel gebouwd is wint de speler die het meeste aantal “aanzien” punten heeft verdiend.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/caylus.gif',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Concordia',
            'excerpt' => 'a peaceful strategy game of economic development in Roman times',
            'body' => 'Logistiek in de Romeinse tijd.

            Leid je familiedynastie en sticht handelsposten in verre steden om aan gewilde handelswaar te komen. Maak daarbij gebruik van machtige politieke figuren om je doelen te bereiken.
            
            Je hebt een aantal personages tot je beschikking, zoals de Prefect, de Architect of de Tribuun, die allen hun eigen functie hebben. Als je aan de beurt bent, speel je een kaart en voert de actie erop uit. Dat kan het kopen van nieuwe kaarten zijn, het verplaatsen van je land- en/of zeekolonisten, het bouwen van steden of het oogsten van provincies. Met de Tribuun kun je je gespeelde kaarten weer terugkrijgen. Maar, hoe later je dat doet, des te meer geld krijg je daarvoor. Kolonisten en goederen sla je in je pakhuis op, maar dat is niet oneindig groot. Ga handig om met je beschikbare ruimte en je schaarse middelen. Aan het einde van het spel krijg je punten voor de goden op je kaarten. Die vragen allemaal wat anders: geld, bepaalde steden, aanwezigheid in provincies, enzovoort. Wie stelt de goden het meest tevreden?',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/concordia.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Pandemic Legacy - Seizoen 1',
            'excerpt' => 'Pandemic Legacy loodst de spelers doorheen 12 maanden virus bestrijden.',
            'body' => 'Pandemic Legacy is het geheel nieuwe en langverwachte spel in de populaire Pandemic reeks. Het stand-alone spel is bedacht door Matt Leacock (Pandemic) en Rob Daviau (Risk Legacy).

            In Pandemic Legacy neem je elementen mee van het ene spel naar het volgende. Beslissingen die de spelers in spel 1 maken, hebben daardoor invloed op spel 2, 3, en elk spel daarna dat met dit exemplaar van het spel gespeeld wordt. Iedere groep maakt andere beslissingen en beleeft daardoor het spel op een andere manier. Zo ontstaat voor elke groep spelers een uniek spel.
            
            Hoewel de basisprincipes van het spel overeenkomsten vertoont met die van Pandemic, zijn er vanaf het begin duidelijke verschillen:
            
            Paniekniveau
            Iedere stad heeft een paniekniveauveld waarop je het paniekniveau kunt markeren. Hoe meer uitbraken er in een stad plaatsvinden, hoe moeilijker het wordt om de stad binnen te komen.
            
            Legacy-stapel
            Op sommige kaarten in de Legacy-stapel staat een STOP-symbool afgebeeld om te voorkomen dat de voortgang van het spel verraden wordt. De bovenste kaart geeft aan wanneer de spelers nieuwe kaarten mogen trekken. De spelers blijven vervolgens kaarten trekken tot er een nieuw STOP-symbool verschijnt.
            
            Karakterkaarten
            Hoewel Legacy bekende karakterkaarten bevat, hebben ze meer eigenschappen dan in de oorspronkelijke Pandemic. Zo kun je je karakter een naam geven, kunnen ze relaties met elkaar hebben, een upgrade krijgen en zelfs gewond raken.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/pandemic_legacy-seizoen_1.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'De Friesche Velden',
            'excerpt' => 'Fields of Arle wordt vaak de 2-speler variant van Caverna genoemd',
            'body' => 'Ontdek het landelijke Arle! Ploeg het land, verzorg je dieren en breid het dorp uit met belangrijke gebouwen. Elke beurt zetten de spelers hun arbeiders in om de werkzaamheden gedaan te krijgen die elk seizoen nodig zijn. Via een gedetailleerd fabricage proces maak je de goederen die je nodig hebt om jouw landgoed tot bloei te brengen, maar dan heb je ook voertuigen nodig voor de handel met naburige dorpen. Ben jij geschikt om het harde werk te verrichten en met alle factoren rekening te houden in dit bijna autobiografische spel van topontwerper Uwe Rosenberg?',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/de_friesche_velden.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Everdell',
            'excerpt' => 'Everdell is een dynamisch bouw- en worker placementspel; leuk voor families en veelspelers !',
            'body' => 'In de lieflijke vallei Everdell vind je een beschaving van boswezens. Deze beschaving groeit en bloeit. Zal de zon het helderste schijnen in jouw stad voordat de winter komt?

            Everdell is een dynamisch bouw- en worker placementspel; leuk voor families en veelspelers !',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/everdell.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Sint Petersburg - Tweede Editie',
            'excerpt' => 'In deze herziene uitgave zijn een aantal kleine wijzigingen doorgevoerd in het basisspel. Daarnaast zijn de eerder uitgebrachte uitbreidingen In bester Gesellschaft / Das Bankett toegevoegd.',
            'body' => 'In 1703 stichtte tsaar Peter de Grote in Rusland de stad Sint Petersburg. Het Winterpaleis, de Hermitage, de Izaäkkathedraal en vele andere gebouwen herinneren nu nog aan dat tijdperk. Onder het bestuur van de tsaar werd het Russische rijk hervormt van een middeleeuwse naar een moderne samenleving. Om in het spel Sint Petersburg te slagen, moet je om te beginnen arbeiders in dienst nemen. Zij zorgen voor inkomsten, waarmee je gebouwen kunt oprichten. Ook de ontwikkelingen op de markt moeten niet uit het oog worden verloren. Zorg ook voor een goede relatie met de adel, want hun steun is noodzakelijk voor de overwinning. Soms is het zelfs onvermijdelijk om ambtenaren te ontslaan of gebouwen af te breken. Koop elke ronde kaarten, incasseer inkomsten en scoor punten en draag je steentje bij aan de ontwikkeling van de stad. Sint Petersburg is een tactisch spel voor Russische bouwmeesters.

            In deze herziene uitgave zijn een aantal kleine wijzigingen doorgevoerd in het basisspel. Daarnaast zijn de eerder uitgebrachte uitbreidingen In bester Gesellschaft / Das Bankett toegevoegd.
            
            Grootste wijziging is het toevoegen van een vijfde fase - "Markt". In deze fase zijn diverse producten te verkrijgen, die je buiten geld ook nog eens punten op kunnen leveren op de markt. Iedere ronde zijn er meer punten te verdienen, maar sommige kaarten zullen je iedere ronde ook meer geld gaan kosten! In hoeverre moet je je toch al schaarse geld investeren in deze Markt?
            
            Sint Petersburg - Tweede Editie kent daarnaast nog een aantal volledig nieuwe, kleine modules die naar eigen inzicht toegevoegd kunnen worden. Zo kun je de originele versie spelen of kiezen om een of een paar modules toe te voegen en je eigen, favoriete variant spelen.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/sint_petersburg-tweede_editie.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Vorsten van Florence',
            'excerpt' => 'Iedere speler is een rijke vorst, die probeert om kunstenaars en wetenschappers naar zijn hof te lokken. Het is de bedoeling dat deze personen imposante werken volbrengen, waardoor de spelers prestigepunten (lees: winstpunten) verdienen.',
            'body' => 'Italie aan het begin van de 16e eeuw. Beleef de bloeitijd van de Renaissance. Kruip in de rol van een Vorst van Florence: wees het hoofd van een bekende adelijke familie, zoals de Borgia of de Medici. Bouw prachtige gebouwen, leg indrukwekkende landschappen aan en nodig beroemde artiesten en kunstenaars uit om in uw hof te wonen en te werken. De spelers ondersteunen de bouwers, artiesten en kunstenaars. De voltooide werken leveren prestige en roem op !',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/vorsten_van_florence.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Die Burgen von Burgund',
            'excerpt' => 'Als vorst ga je jouw vorstendom in het Loiredal zo goed mogelijk inrichten, met steden, veestapels en natuurlijk burchten.',
            'body' => 'De vallei van de Loire in de vijftiende eeuw. Als invloedrijke vorsten zetten de spelers alles op alles om hun landerijen door verstandig handelsverkeer te laten openbloeien. Twee dobbelstenen bepalen de actiemogelijkheden, maar de beslissingen worden uiteindelijk door de spelers zelf genomen. En of het nu de veehouderij of de goederenhandel, of de stedenbouw of de wetenschappelijke vooruitgang betreft, vele verschillende wegen leiden naar welstand en aanzien van de spelers! De talrijke mogelijkheden om in dit opbouwspel zegepunten te verwerven, eisen ronde na ronde een weldoordachte aanpak en een vooruitziende blik. Dankzij de verschillende vorstendommen blijft de uitdaging voor de spelers constant aanwezig en zal geen enkel partijtje op dezelfde manier verlopen. Winnaar is de speler die aan het einde de meeste zegepunten heeft.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/die_burgen_von_burgund.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Imperial 2030',
            'excerpt' => 'De spelers zijn internationale investeerders die krediet verlenen aan de 6 grootmachten. De wereldmachten strijden om macht en invloed maar in werkelijkheid zijn ze maar pionnen in een veradelijk spel. Hun lot wordt bepaald door machtige investeerders.',
            'body' => 'De wereld in 2030. Machtige internationale investeerders lenen geld aan de zes grootmachten van de wereld: Rusland, China, India, Brazilië, de VS en Europa. De nieuwe wereldmachten China, India en Brazilië strijden mee in de wereldwijde race om macht en invloed. Maar niets is wat het lijkt. In werkelijkheid zijn deze naties slechts pionnen in een verraderlijk spel. De spelers zijn genadeloze investeerders, die zoveel mogelijk willen verdienen en daarom onzichtbare controle uitoefenen op de wereldmachten. Maar een investeerder kan zijn greep op een wereldmacht verliezen, waardoor telkens nieuwe afspraken kunnen ontstaan.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/imperial_2030.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Dominion: Welvaart',
            'excerpt' => 'Deze uitbreiding op Dominion bevat 25 nieuwe koninkrijkkaarten en 2 nieuwe standaard kaarten, waarmee de spelers verder kunnen bouwen dan Goud en Provincies.',
            'body' => 'Deze uitbreiding op Dominion bevat 25 nieuwe koninkrijkkaarten en 2 nieuwe standaard kaarten, waarmee de spelers verder kunnen bouwen dan Goud en Provincies. Het centrale thema is rijkdom; er zijn geldkaarten met actiemogelijkheden, kaarten die interactie met geldkaarten hebben en dure, krachtige kaarten.

            Dominion Welvaart is uitsluitend in combinatie met Dominion of Dominion Intrige te spelen. Je hebt namelijk de overwinnings- en geldkaarten uit een zelfstandige variant van Dominion nodig.
            
            Dominion Welvaart maakt het mogelijk om meer met je geldkaarten te doen. Daarom speel je die nu in een volgorde naar keuze, waarbij je eventuele acties uitvoert voordat je de volgende kaart speelt. Omdat er veel meer geld in het spel komt dan gebruikelijk, kun je standaard kaarten als Platina (die 5 munten waard is) en Kolonie (die 10 overwinningspunten waard is) kopen. Verder zijn er kaarten die extra overwinningspunten in de vorm van fiches opleveren. Met deze uitbreiding worden de keuzemogelijkheden nog groter dan ze al waren.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/dominion_welvaart.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'In de voetsporen van Marco Polo',
            'excerpt' => 'e bent één van de karakters die Marco Polo op zijn reis tegenkwam. Elk karakter heeft unieke eigenschappen, die hem in het spel bepaalde voordelen opleveren. Elke ronde begint met het werpen van 5 dobbelstenen.',
            'body' => 'Je bent één van de karakters die Marco Polo op zijn reis tegenkwam. Elk karakter heeft unieke eigenschappen, die hem in het spel bepaalde voordelen opleveren. Elke ronde begint met het werpen van 5 dobbelstenen. Deze bepalen voor een deel welke mogelijkheden je hebt. Hoe hoger de dobbelstenen, des te waardevoller zijn je acties, maar je moet er ook meer voor betalen als je een actie kiest die al bezet is.

            Je verdient vooral punten voor het vervullen van handelscontracten, het stichten van bepaalde handelsposten en het bereiken van Peking. Daar heb je goederen en kamelen voor nodig. Deze kun je op bepaalde actievelden krijgen. Elk actieveld vraagt 1, 2 of 3 dobbelstenen, waarvan de laagste waarde bepaalt hoe vaak je de actie mag uitvoeren of hoeveel de actie opbrengt. Om een bezet actieveld te mogen gebruiken, moet je de waarde van je dobbelsteen in geld betalen.
            
            Marco Polo heeft zoveel keuzemogelijkheden, dat het spel altijd anders is. Een aanrader voor de echte liefhebbers!',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/in_de_voetsporen_van_marco_polo.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Scythe',
            'excerpt' => 'Scythe is een conquest-game van Stonemaier games, een echte euro-game ontwikkelaar. De designer stelt dat het een mix is van Kemet en Terra Mystica. Is ‘t wat?',
            'body' => 'In Scythe speelt elke speler een karakter die probeert zijn factie de rijkste en machtigste van Oost-Europa te maken. Spelers verkennen en veroveren gebieden, werven rekruten, produceren goederen en werkers, bouwen gebouwen, en plaatsen monsterlijke robots. Spelers beginnen in Scythe typisch met het opbouwen van hun infrastructuur, dan het verkennen van de wereld, en vervolgens het aangaan van gevechten met elkaar.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/scythe.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Great Western Trail',
            'excerpt' => 'Great Western Trail is spannend en biedt vele tactische mogelijkheden. De eigen gebouwen zijn tweezijdig: een makkelijke en een moeilijke kant. Hoewel het complex lijkt, speelt het spel makkelijk weg en blijft keer op keer boeien.',
            'body' => 'De spelers drijven hun kudde van Texas naar Kansas City, waar het vee dan per trein aan verre steden wordt geleverd. Elke stad mag maar een keer beleverd worden, waardoor je goed moet plannen en je je ‘railhead’ op tijd naar voren moet verplaatsen om extra kosten te vermijden. Ook de waarde van je hand met koeienkaarten moet de waarde van de stad, die je belevert, evenaren, anders gaan je koeien naar mindere bestemmingen wat strafpunten met zich meebrengt. Je verhoogt de waarde van je hand door nieuwe, dure koeien aan je kudde toe te voegen en goedkopere tijdig af te leggen.

            Tijdens de reis van Texas naar Kansas City kun je algemene gebouwen aandoen om daar acties uit te voeren, zoals het verkopen van koeien (naar je aflegstapel), het werven van cowboys, arbeiders en ingenieurs, het bouwen van eigen gebouwen op locaties langs de ‘Trail” (die je vervolgens kunt bezoeken om voordelige acties te doen), het kopen van nieuwe, dure koeien die veel opleveren en je reikwijdte op het spoor vergroten. Als je een stad of station belevert, leg je een fiche van je tableau op die locatie. Daardoor ontsluit je een ‘actieverbeteraar’ waardoor je bijvoorbeeld meer kaarten op handen mag houden of verder mag reizen tijdens je tocht naar het leverpunt Kansas City, waar de kuddes per trein naar hun uiteindelijke bestemming vertrekken. Tijdens het spel maken de spelers 5 tot 7 trips naar Kansas, waardoor ze hun gebouwen meerdere malen kunnen bezoeken om aldaar van het voordeel gebruik te maken.
            
            Great Western Trail is spannend en biedt vele tactische mogelijkheden. De eigen gebouwen zijn tweezijdig: een makkelijke en een moeilijke kant. Hoewel het complex lijkt, speelt het spel makkelijk weg en blijft keer op keer boeien.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/great_western_trail.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Cyclades',
            'excerpt' => 'Het is onrustig in Griekenland! Met hun weinige overgebleven geld richten vijf Griekse stadsstaten zich tot de diverse goden om hulp en proberen elkaar af te troeven om zodoende de gunsten van de goden in hun voordeel te kunnen benutten.',
            'body' => 'De spelers zijn krijgsheren van de 5 grote Griekse steden (Athene, Sparta, Kortinthe, Thebes en Argos) in de Cycladen eilandengroep en proberen zo snel mogelijk 2 metropolissen te bouwen. Dit doen ze door elke ronde te bieden op de gunst van de goden en het oproepen van een scala aan mythologische wezen.

            Afhankelijk van de god wiens gunst ze verkrijgen kunnen ze andere acties uitvoeren: Ares laat je legers kopen en verplaatsen, Poseidon laat je vloten kopen en verplaatsen, Zeus laat je priesters opleiden en Athena laat je filosofen verzamelen. Elke god geeft je ook de kans om tegen betaling een bepaald type gebouw met speciale eigenschappen neer te zetten op jouw eilanden, 4 verschillende gebouwen veranderen in een metropolis. Athena voorziet je maatschappij van filosofen en 4 daarvan leveren je ook een metropolis op. Daarnaast kan je ook eilanden van een ander veroveren in de hoop hun metropolis over te kunnen nemen.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/cyclades.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Champions of Midgard',
            'excerpt' => 'In Champions of Midgard ben je een Vikingleider die streeft naar glorie voor zijn clan. Versla de trollen om de stedelingen aan jouw kant te houden. Versla Draugr om goud te verdienen om je reizen te financieren.',
            'body' => 'In Champions of Midgard ben je een Vikingleider die streeft naar glorie voor zijn clan. Versla de trollen om de stedelingen aan jouw kant te houden. Versla Draugr om goud te verdienen om je reizen te financieren. Dood monsters in hun holen om glorie en de gunst van de goden te krijgen. Versla deze epische wezens en bewijs dat je het waard bent om de nieuwe graaf van Trondheim te worden en herinnerd te worden als de Kampioen van Midgard!

            In dit workerplacement spel probeer je monster te verslaan door het rollen van 3 types dobbelstenen (je vikingkrijgers) en zo Glorie, geld of andere zaken te vergaren.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/champions_of_midgard.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Jambo: 2e uitbreiding',
            'excerpt' => 'Deze tweede uitbreiding bestaat uit 3 verschillende uitbreidingen: "Nieuwe goederen en ontmoetingen", "De vierde hut", "De tapijten"',
            'body' => 'Deze tweede uitbreiding bestaat uit 3 verschillende uitbreidingen:
            "Nieuwe goederen en ontmoetingen"
            "De vierde hut"
            "De tapijten"
            
            "Nieuwe ontmoetingen" bestaat uit 4 nieuwe voorwerpen, 10 nieuwe personen, 9 nieuwe dieren en 32 nieuwe goederenkaarten.
            "De drie hutten" bestaat uit 2 hutkaarten (2x wachtpost).
            "Het relict" bestaat uit 3 tapijtkaarten.
            
            Deze 3 spelmodules kunnen naar believen met het basisspel, met elkaar en met de 1e uitbreiding gecombineerd worden.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/jambo_2e_uitbreiding.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Keyflower',
            'excerpt' => 'Veel achtergrondverhaal wordt er niet gegeven: we bouwen onze eigen dorpen op, verwelkomen nieuwe werkers die zich per boot bij ons voegen en werpen ons aldus in de voortdurende strijd om de meeste overwinningspunten.?',
            'body' => 'Keyflower is het zevende spel in Richard’s befaamde Key-serie. Iedere speler begint met een starttegel en een groepje arbeiders (in de kleuren rood, geel en blauw). Door het combineren van arbeiders met dezelfde kleuren breiden de spelers hun dorpjes uit en verzamelen ze grondstoffen, mankracht en winstpunten. Het spel duurt vier seizoenen. In het voorjaar, de zomer en de herfst arriveren nieuwe arbeiders en worden dorpstegels geveild. In de winter volgt een veiling van speciale tegels die veel winstpunten opleveren met de juiste combinatie van grondstoffen, tegels en arbeiders. Keyflower biedt een intrigerende mix van worker placement, logistiek, bieden en ontwikkelen.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/keyflower.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Trajan',
            'excerpt' => '110 na Christus - het Romeinse Rijk, geregeerd door keizer “optimus princeps” Trajanus (Latijn: Trajan), bevindt zich op het hoogtepunt van haar macht. Alle grenzen zijn onder controle en men kan zich weer richten op interne zaken - ROME.',
            'body' => '110 na Christus - het Romeinse Rijk, geregeerd door keizer “optimus princeps” Trajanus (Latijn: Trajan), bevindt zich op het hoogtepunt van haar macht. Alle grenzen zijn onder controle en men kan zich weer richten op interne zaken - ROME. Grijp de kans en vergroot jouw macht! Met de juiste tactiek kun je je medespelers buitenspel zetten en aan het einde van het spel de overwinning vieren.

            Spelers proberen overwinningspunten te behalen door slim gebruik te maken van de tactische mogelijkheden van zes verschillende acties. De sleutel tot succes ligt hierbij in de verdeling van de actiestenen over de actiecirkel. Hier wordt bepaald wanneer men welke actie beschikbaar heeft. Aan de ene kant is het belangrijk te profiteren van plotselinge kansen om waardevolle tegels te bemachtigen, aan de andere kant kan men niet nalaten zijn medespelers een hak te zetten. Verder kunnen acties meerdere beurten vooruit gepland worden. Los van de uitkomst van je eerste spel, zul je met elk volgende spel meer ervaring opdoen en de finesses leren kennen.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/trajan.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Caverna',
            'excerpt' => 'Deze opzichzelfstaande editie van Agricola speelt zich in de prehistorie af. Je hakt grotten uit en meubileert ze, terwijl je buiten bomen omhakt en dieren houdt.',
            'body' => 'Deze opzichzelfstaande editie van Agricola speelt zich in de prehistorie af. Je hakt grotten uit en meubileert ze, terwijl je buiten bomen omhakt en dieren houdt. Ondertussen verzamel je allerlei grondstoffen en edelstenen om je acties te kunnen bekostigen.

            Kies elke beurt een actie met jouw holbewoners en ontwikkel je grotten tot luxe woonruimte en maak je tuin zelfvoorzienend. Verzamel robijnen om speciale acties te kunnen uitvoeren en houd ezels in de grotten Honden houden je kudde schapen onder controle. Heb jij aan het einde van het spel de meest waardevolle grot?!',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/caverna.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Mombasa',
            'excerpt' => 'In Mombasa verwerven de spelers aandelen van de gecharterde maatschappijen gegrondvest in Mombasa, Cape Town, Saint-Louis en Cairo. Ze verspreiden hun handelsposten doorheen het ganse Afrikaanse continent met als enig doel het meeste geld te verdienen.',
            'body' => 'In Mombasa verwerven de spelers aandelen van de gecharterde maatschappijen gegrondvest in Mombasa, Cape Town, Saint-Louis en Cairo. Ze verspreiden hun handelsposten doorheen het ganse Afrikaanse continent met als enig doel het meeste geld te verdienen.

            Gecharterde maatschappijen waren verenigingen die opgericht werden om te exploreren, handelen en koloniseren. Hierdoor zijn ze gekoppeld aan een zeer donker hoofdstuk in de menselijke geschiedenis: globaal kolonialisme. Deze periode duurde ongeveer van de 19de eeuw tot midden de 20ste eeuw en wordt geassocieerd met uitbuiting en slavernij.
            
            Alhoewel Mombasa nogal losjes in dit tijdsbestek is gekaderd, is het geen historische simulatie. Het is een strategisch spel met een economische focus dat ruwweg naar historische categorieën verwijst en plaatst deze in een fictieve setting. De uitbuiting van het Afrikaanse continent en zijn mensen wordt niet expliciet weergegeven in het spelverloop.
            
            Als investeerder probeer jij het meeste geld te verdienen door goederen in gecharterde maatschappijen te investeren en de handelsposten op hun basissen doorheen het Afrikaanse continent te verspreiden. Door goederen te investeren verhoog je het aantal aandelen die je in deze maatschappijen bezit. Door hun handelsposten te verspreiden verhoog je de waarde van elk aandeel. Daar bovenop kan je jouw opbrengsten en vooruitzichten verbeteren door een diamant voorraad uit te bouwen en een slimme boekhouding.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/mombasa.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Orléans: Voorspoed & Belegering',
            'excerpt' => 'Eerste grote uitbreiding voor Orléans. Bevat onder andere een coöperatieve variant, een duel-variant voor 2 en een drietal solo scenarios.',
            'body' => 'Eerste grote uitbreiding voor Orléans. Bevat onder andere een coöperatieve variant, een duel-variant voor 2 en een drietal solo scenarios.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/orleans_voorspoed_belegering.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Maracaibo',
            'excerpt' => 'Maracaibo speel zich af in het Caribisch gebied. U bent avontuurlijk en de zee is uw natuurlijke habitat. Bootje varen is fijn tijdverdrijf, toch is het leuk meegenomen als u intussen wat aan netwerking kunt doen.',
            'body' => 'In Maracaibo ben je als speler een zeevaarder en avonturier in het Caribisch gebied van de 17e eeuw: een kleurrijke wereld vol avonturen en mogelijkheden. Je doel is om je reputatie bij de 3 grootmachten te vergroten, sterke allianties aan te gaan, en rijkdom en roem te verwerven. Er zijn verschillende manieren om je roem te vergaren: het upgraden van je schip, het werken als kaper, het opbouwen van een netwerk van assistenten, expedities, en meer.
            De speler die op het einde van het spel de meeste roem haalt, wint.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/maracaibo.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Agricola',
            'excerpt' => 'Agricola, een spel dat zich afspeelt op het platteland in de 17e eeuw na Christus. Met je boerenfamilie probeer je door hard te werken op het land en aan je huis om er op vooruit te gaan.',
            'body' => 'Iedere speler heeft aan het begin van het spel niet meer dan een houten huis met 2 kamers, waarin twee gezinsleden wonen. De spelers beschikken over een scala aan mogelijkheden om door middel van huisuitbreiding, akkerbouw en veeteelt een comfortabel leven op te bouwen. Ze verzamelen grondstoffen zoals hout en leem, breiden hun gezin met meer mensen uit en zorgen voor voldoende voedsel voor iedereen. Ze ploegen akkers en beplanten deze met graan en groente. Ook houden ze schapen, varkens en runderen.

            De speler die aan het einde van het spel de meeste punten met zijn erf scoort en deze dus het beste heeft ontwikkeld, is de winnaar.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/agricola.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Carcassonne',
            'excerpt' => 'Carcassonne is een strategisch legspel waarbij de spelers (twee tot vijf) een gebied tegeltje voor tegeltje opbouwen tot het gevuld is met wegen, weilanden, kloosters en steden.',
            'body' => 'Het Franse Carcassonne is de best behouden middeleeuwse vestingstad. De spelers zijn landheren en zetten hun horigen in om zoveel mogelijk invloed in het gebied te krijgen. Iedere beurt trek je een landtegel die je vervolgens aanlegt aan het steeds groter wordende speelveld. Op de zojuist gelegde tegel mag je vervolgens een horige als struikrover, ridder, monnik of boer plaatsen. Met die horigen, waarvan je er natuurlijk een beperkt aantal hebt, scoor je punten als hun weg, stad of klooster wordt afgebouwd. Ze komen dan terug in de voorraad en zijn direct opnieuw inzetbaar. Lastig wordt het als andere spelers er door het slim plaatsen van landtegels voor zorgen dat je horigen geen mogelijkheden meer hebben om ooit nog in je voorraad terug te keren. Je zult dus goed moeten nadenken, hoe, wanneer en waar je de horigen inzet!',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/carcassonne.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'Dominion',
            'excerpt' => 'Iedere speler heeft een hoeveelheid kaarten die zijn koninkrijk voorstelt. Door nieuwe kaarten aan te kopen kan hij zijn koninkrijk uitbreiden met grond (punten), koninkrijkkaarten (acties) en rijkdommen (geld).',
            'body' => 'Je bent tot koning gekroond van een prachtig klein land met glooiende heuvels, kronkelende rivieren en vruchtbare landerijen. Het leven zou zo mooi kunnen zijn, maar helaas zijn er geschillen met omliggende staten. Verschillende vorsten proberen ten koste van elkaar hun koninkrijk uit te breiden!

            In dit spel stel je een stapel kaarten samen die je koninkrijk voorstelt. In deze stapel bevindt zich je geld, de te behalen overwinningspunten en de acties die je kunt uitvoeren. Iedere speler begint met een paar koperstukken en drie landgoederen. Dat zal in de loop van het spel veranderen. Uitgestrekte, door onderdanen bevolkte provincies, prachtige gebouwen en koffers vol goud zullen je deel zijn als je dit spel slim speelt. Het uiteindelijke doel is om het grootste koninkrijk te veroveren. Dat wordt aan het einde van het spel in overwinningspunten gemeten.',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/dominion.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
        $product = Product::create([
            'name' => 'De Kolonisten van Catan',
            'excerpt' => 'Het eiland Catan wordt ontdekt. Er zijn genoeg grondstoffen op het eiland om er een mooie kolonie te stichten. Zorg dus dat je op gunstige plaatsen je kolonie bouwt. Kijk uit voor de roversbende!',
            'body' => 'De spelers koloniseren het eiland Catan. Hun dorpen en steden oogsten van aangrenzende landschappen grondstoffen als graan, hout en wol. Deze grondstoffen ruil je met elkaar om de juiste combinatie samen te stellen om nog een dorp, straat of stad te bouwen. Je kunt in ontwikkelingskaarten investeren die een interessante draai aan het spel geven. De speler die als eerste tien overwinningspunten heeft, wint. Het klinkt simpel, maar... pas op voor de struikrover!

            Het meest gespeelde familiespel van Nederland en omstreken! Winnaar van de "Speelgoed van het Jaar"-prijs in 1999!',
            'price' => 30,
            'stock' => 25,
            'image' => '/images/product/de_kolonisten_van_catan.jpg',
            'age_category_id'=> $age_categorie->id,
            'min_players' => 2,
            'max_players' => 5,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
