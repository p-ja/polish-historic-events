<?php

/**
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <https://www.gnu.org/licenses/>.
 */
declare(strict_types=1);

namespace p_ja\WebtreesModules\History\polish_historic_events;

use Fisharebest\Localization\Translation;
use Fisharebest\Webtrees\I18N;
use Fisharebest\Webtrees\Module\AbstractModule;
use Fisharebest\Webtrees\Module\ModuleCustomInterface;
use Fisharebest\Webtrees\Module\ModuleCustomTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsTrait;
use Fisharebest\Webtrees\Module\ModuleHistoricEventsInterface;
use Illuminate\Support\Collection;

/**
 *
 */
return new class extends AbstractModule implements ModuleCustomInterface, ModuleHistoricEventsInterface {
    use ModuleCustomTrait;
    use ModuleHistoricEventsTrait;

    public const CUSTOM_TITLE = 'Historia Polski 🇵🇱';
    public const CUSTOM_AUTHOR = 'p-ja';
    public const CUSTOM_WEBSITE = 'https://github.com/p-ja/polish-historic-events';
    public const CUSTOM_VERSION = '0.0.1';
    public const CUSTOM_LAST = 'https://raw.githubusercontent.com/p-ja/polish-historic-events/main/latest-version.txt';

    public function __construct()
    {
    }

    public function boot(): void
    {
    }

    /**
     * How should this module be identified in the control panel, etc.?
     *
     * @return string
     */
    public function title(): string
    {
        return self::CUSTOM_TITLE;
    }

    public function description(): string
    {
        return "Historia Polski";
    }

    public function customModuleAuthorName(): string
    {
        return self::CUSTOM_AUTHOR;
    }

    public function customModuleVersion(): string
    {
        return self::CUSTOM_VERSION;
    }

    public function customModuleLatestVersionUrl(): string
    {
        return self::CUSTOM_LAST;
    }

    public function customModuleSupportUrl(): string
    {
        return self::CUSTOM_WEBSITE;
    }

    public function isEnabledByDefault(): bool
    {
        return false;
    }

    public function resourcesFolder(): string
    {
        return __DIR__ . '/resources/';
    }

    /**
     * Based on: https://pl.wikipedia.org/wiki/Kalendarium_historii_Polski
     */
    public function historicEventsAll(): Collection
    {
        return new Collection([
            "1 EVEN Chrzest Polski\n2 TYPE Historia Polski\n2 DATE  966\n2 NOTE https://pl.wikipedia.org/wiki/Chrzest_Polski\n",
            "1 EVEN początek panowania Mieszka I\n2 TYPE Historia Polski\n2 DATE  ABT 960\n",
            "1 EVEN zmarł Mieszko I\n2 TYPE Historia Polski\n2 DATE  25 MAY 992\n",
            "1 EVEN początek panowania Bolesława Chrobrego\n2 TYPE Historia Polski\n2 DATE  992\n",
            "1 EVEN zmarł Bolesław Chrobry\n2 TYPE Historia Polski\n2 DATE  17 JUN 1025\n",
            "1 EVEN zmarł Mieszko II Lambert\n2 TYPE Historia Polski\n2 DATE  1034\n",
            "1 EVEN początek panowania Kazimierza Odnowiciela\n2 TYPE Historia Polski\n2 DATE  1034\n",
            "1 EVEN nową stolicą Polski został Kraków\n2 TYPE Historia Polski\n2 DATE  1039\n",
            "1 EVEN zmarł Kazimierz Odnowiciel\n2 TYPE Historia Polski\n2 DATE  1058\n",
            "1 EVEN początek panowania Bolesława II Szczodrego\n2 TYPE Historia Polski\n2 DATE  1058\n",
            "1 EVEN w wyniku buntu Bolesław II uciekł z kraju\n2 TYPE Historia Polski\n2 DATE  1079\n",
            "1 EVEN początek panowania Władysława I Hermana\n2 TYPE Historia Polski\n2 DATE  1079\n",
            "1 EVEN zmarł Władysław I\n2 TYPE Historia Polski\n2 DATE  1102\n",
            "1 EVEN początek panowania Bolesława III Krzywoustego\n2 TYPE Historia Polski\n2 DATE  1102\n",
            "1 EVEN zmarł Bolesław Krzywousty; początek rozbicia dzielnicowego\n2 TYPE Historia Polski\n2 DATE  28 OCT 1138\n",
            "1 EVEN zakon krzyżacki otrzymał od Konrada Mazowieckiego w dzierżawę ziemię chełmińską\n2 TYPE Historia Polski\n2 DATE  1228\n",
            "1 EVEN najazd Tatarów na Polskę\n2 TYPE Historia Polski\n2 DATE  1241\n",
            "1 EVEN drugi najazd Tatarów na Polskę\n2 TYPE Historia Polski\n2 DATE  FROM 1259 TO 1260\n",
            "1 EVEN Krzyżacy dokonali rzezi mieszkańców Gdańska\n2 TYPE Historia Polski\n2 DATE  1308\n",
            "1 EVEN w Krakowie koronowano Władysława Łokietka; ponowne zjednoczenie Polski i koniec rozbicia dzielnicowego\n2 TYPE Historia Polski\n2 DATE  20 JAN 1320\n",
            "1 EVEN Władysław Łokietek pokonał Krzyżaków w bitwie pod Płowcami\n2 TYPE Historia Polski\n2 DATE  27 SEP 1331\n",
            "1 EVEN zmarł Władysław Łokietek\n2 TYPE Historia Polski\n2 DATE  2 MAR 1333\n",
            "1 EVEN w katedrze wawelskiej koronowano Kazimierza Wielkiego\n2 TYPE Historia Polski\n2 DATE  25 APR 1333\n",
            "1 EVEN Kazimierz Wielki założył Akademię Krakowską\n2 TYPE Historia Polski\n2 DATE  12 MAY 1364\n",
            "1 EVEN zmarł Kazimierz Wielki\n2 TYPE Historia Polski\n2 DATE  5 NOV 1370\n",
            "1 EVEN koronowano Ludwika Węgierskiego\n2 TYPE Historia Polski\n2 DATE  17 NOV 1370\n",
            "1 EVEN zmarł Ludwik Węgierski\n2 TYPE Historia Polski\n2 DATE  1382\n",
            "1 EVEN koronowano Jadwigę Andegaweńską\n2 TYPE Historia Polski\n2 DATE  16 OCT 1384\n",
            "1 EVEN Polska z Litwą zawarły unię w Krewie\n2 TYPE Historia Polski\n2 DATE  14 AUG 1385\n",
            "1 EVEN koronowano Władysława Jagiełły\n2 TYPE Historia Polski\n2 DATE  15 FEB 1386\n",
            "1 EVEN zmarła Jadwiga Andegaweńska\n2 TYPE Historia Polski\n2 DATE  17 JUL 1399\n",
            "1 EVEN brat Władysława Jagiełły, Witold, został wielki księciem litewskim\n2 TYPE Historia Polski\n2 DATE  1401\n",
            "1 EVEN Krzyżacy wkroczyli na Kujawy i ziemię dobrzyńską; początek wielkiej wojny z zakonem krzyżackim\n2 TYPE Historia Polski\n2 DATE  12 AUG 1409\n",
            "1 EVEN bitwa pod Grunwaldem\n2 TYPE Historia Polski\n2 DATE  15 JUL 1410\n",
            "1 EVEN w Toruniu zawarto pokój, na mocy którego Krzyżacy oddali Polsce ziemię dobrzyńską oraz Litwie Żmudź\n2 TYPE Historia Polski\n2 DATE  1 FEB 1411\n",
            "1 EVEN zmarł wielki książę litewski Witold\n2 TYPE Historia Polski\n2 DATE  27 OCT 1430\n",
            "1 EVEN zmarł Władysław Jagiełło\n2 TYPE Historia Polski\n2 DATE  1 JUN 1434\n",
            "1 EVEN koronowano Władysława III Warneńczyka\n2 TYPE Historia Polski\n2 DATE  25 JUL 1434\n",
            "1 EVEN wojska węgierskie przegrały z Turkami pod Warną – podczas bitwy zginął Władysław III\n2 TYPE Historia Polski\n2 DATE  10 NOV 1434\n",
            "1 EVEN królem Polski i Litwy został Kazimierz Jagiellończyk – podczas koronacji zawarto unię personalną obu państw na zasadzie równorzędności\n2 TYPE Historia Polski\n2 DATE  25 JUN 1447\n",
            "1 EVEN początek wojny trzynastoletniej\n2 TYPE Historia Polski\n2 DATE  1454\n",
            "1 EVEN Kazimierz Jagiellończyk inkorporował Prusy do Królestwa Polskiego\n2 TYPE Historia Polski\n2 DATE  6 MAR 1454\n",
            "1 EVEN na mocy II pokoju toruńskiego zakończono wojnę trzynastoletnią\n2 TYPE Historia Polski\n2 DATE  19 OCT 1466\n",
            "1 EVEN urodził się Mikołaj Kopernik\n2 TYPE Historia Polski\n2 DATE  19 FEB 1473\n",
            "1 EVEN początek panowania Jana Olbrachta; zerwano unię personalną pomiędzy Polską a Litwą w wyniku obsadzenia syna Kazimierza Jagiellończyka, Aleksandra, na wielkiego księcia litewskiego\n2 TYPE Historia Polski\n2 DATE  1492\n",
            "1 EVEN zmarł Jan Olbracht\n2 TYPE Historia Polski\n2 DATE  17 JUN 1501\n",
            "1 EVEN Aleksander Jagiellończyk został koronowany\n2 TYPE Historia Polski\n2 DATE  12 DEC 1501\n",
            "1 EVEN zmarł Aleksander Jagiellończyk\n2 TYPE Historia Polski\n2 DATE  1506\n",
            "1 EVEN sejm zebrany w Piotrkowie wybrał Zygmunta Starego na króla polski i wielkiego księcia litewskiego\n2 TYPE Historia Polski\n2 DATE  8 DEC 1506\n",
            "1 EVEN koronowano Zygmunta Starego\n2 TYPE Historia Polski\n2 DATE  24 JAN 1507\n",
            "1 EVEN ślub Zygmunta Starego z Boną Sforzą\n2 TYPE Historia Polski\n2 DATE  18 APR 1518\n",
            "1 EVEN Albrecht Hohenzollern złożył w Krakowie hołd lenny Zygmuntowi Staremu\n2 TYPE Historia Polski\n2 DATE  10 APR 1525\n",
            "1 EVEN na mocy vivente rege koronowano Zygmunta Augusta\n2 TYPE Historia Polski\n2 DATE  18 DEC 1530\n",
            "1 EVEN Mikołaj Kopernik wydał traktat O obrotach ciał niebieskich, w którym udowodnił, że Ziemia kręci się wokół Słońca\n2 TYPE Historia Polski\n2 DATE  1543\n",
            "1 EVEN zmarł Zygmunt Stary\n2 TYPE Historia Polski\n2 DATE  1 APR 1548\n",
            "1 EVEN Barbara Radziwiłłówna została koronowana\n2 TYPE Historia Polski\n2 DATE  1550\n",
            "1 EVEN zmarła Barbara Radziwiłłówna\n2 TYPE Historia Polski\n2 DATE  8 MAY 1551\n",
            "1 EVEN mistrz zakonu inflanckiego Gothard Kettler sekularyzował Inflanty i przekazał je Polsce i Litwie\n2 TYPE Historia Polski\n2 DATE  1561\n",
            "1 EVEN Polska i Litwa zawarły unię lubelską, na mocy którego oba państwa połączyły się w jeden kraj\n2 TYPE Historia Polski\n2 DATE  1 JUL 1569\n",
            "1 EVEN zmarł Zygmunt August – koniec dynastii Jagiellonów\n2 TYPE Historia Polski\n2 DATE  7 JUL 1572\n",
            "1 EVEN koronowano Henryka Walezego\n2 TYPE Historia Polski\n2 DATE  21 FEB 1574\n",
            "1 EVEN Stefan Batory ożenił się z Anną Jagiellonką i został koronowany na króla Polski\n2 TYPE Historia Polski\n2 DATE  1 MAY 1576\n",
            "1 EVEN w Grodnie zmarł Stefan Batory\n2 TYPE Historia Polski\n2 DATE  12 DEC 1586\n",
            "1 EVEN koronowano Zygmunta Wazę\n2 TYPE Historia Polski\n2 DATE  27 DEC 1587\n",
            "1 EVEN Polska inkorporowała Estonię\n2 TYPE Historia Polski\n2 DATE  12 MAR 1600\n",
            "1 EVEN pod Kircholmem wojska hetmana polnego litewskiego Jana Chodkiewicza pokonały trzykrotnie silniejszą armię szwedzką\n2 TYPE Historia Polski\n2 DATE  27 SEP 1605\n",
            "1 EVEN Zygmunt III Waza przeniósł siedzibę królestwa z Krakowa do Warszawy\n2 TYPE Historia Polski\n2 DATE  28 MAY 1609\n",
            "1 EVEN Polska pokonała flotę szwedzką pod Oliw\n2 TYPE Historia Polski\n2 DATE  28 NOV 1627\n",
            "1 EVEN zmarł Zygmunt III Waza\n2 TYPE Historia Polski\n2 DATE  30 APR 1632\n",
            "1 EVEN Władysław IV został wybrany na króla Polski\n2 TYPE Historia Polski\n2 DATE  8 NOV 1632\n",
            "1 EVEN odsłonięto kolumnę Zygmunta III Wazy\n2 TYPE Historia Polski\n2 DATE  1644\n",
            "1 EVEN zmarł Władysław IV Waza\n2 TYPE Historia Polski\n2 DATE  20 MAY 1648\n",
            "1 EVEN wybuchło powstanie Chmielnickiego na Ukrainie\n2 TYPE Historia Polski\n2 DATE  1648\n",
            "1 EVEN elekcja Jana Kazimierza na króla polskiego\n2 TYPE Historia Polski\n2 DATE  20 NOV 1648\n",
            "1 EVEN król Karol X wypowiedział wojnę Rzeczypospolitej – początek potopu szwedzkiego\n2 TYPE Historia Polski\n2 DATE  19 JUL 1655\n",
            "1 EVEN wypędzono braci polskich\n2 TYPE Historia Polski\n2 DATE  1658\n",
            "1 EVEN abdykacja Jana Kazimierza\n2 TYPE Historia Polski\n2 DATE  1668\n",
            "1 EVEN koronowano Michała Korybuta Wiśniowieckiego\n2 TYPE Historia Polski\n2 DATE  29 NOV 1669\n",
            "1 EVEN Turcja wypowiedziała wojnę Rzeczypospolitej\n2 TYPE Historia Polski\n2 DATE  10 DEC 1671\n",
            "1 EVEN zmarł Michał Korybut Wiśniowiecki\n2 TYPE Historia Polski\n2 DATE  10 NOV 1673\n",
            "1 EVEN Jan Sobieski został królem Polski\n2 TYPE Historia Polski\n2 DATE  21 MAY 1674\n",
            "1 EVEN koronowano Jana III Sobieskiego\n2 TYPE Historia Polski\n2 DATE  2 FEB 1676\n",
            "1 EVEN Jan Heweliusz wydał traktat astronomiczny Machina coelestis\n2 TYPE Historia Polski\n2 DATE  1679\n",
            "1 EVEN bitwa pod Wiedniem: siły koalicji austriacko-niemiecko-polskiej pod dowództwem Jana III Sobieskiego pokonały wojska tureckie\n2 TYPE Historia Polski\n2 DATE  12 SEP 1683\n",
            "1 EVEN zmarł król Jan III Sobieski\n2 TYPE Historia Polski\n2 DATE  17 JUN 1696\n",
            "1 EVEN koronowano Augusta II Mocnego\n2 TYPE Historia Polski\n2 DATE  15 SEP 1697\n",
            "1 EVEN odbył się zjazd szlachty w Warszawie, podczas którego detronizowano Augusta II i wybrano Stanisława Leszczyńskiego na króla Polski\n2 TYPE Historia Polski\n2 DATE  12 JUL 1704\n",
            "1 EVEN w katedrze warszawskiej koronowano Stanisława Leszczyńskiego\n2 TYPE Historia Polski\n2 DATE  4 OCT 1705\n",
            "1 EVEN konfederacja sandomierska nie uznała władz Leszczyńskiego i oddała się pod protekcję cara Rosji\n2 TYPE Historia Polski\n2 DATE  JUN 1707\n",
            "1 EVEN August II wrócił do Rzeczypospolitej, Stanisław Leszczyński uciekł z Polski\n2 TYPE Historia Polski\n2 DATE  AUG 1709\n",
            "1 EVEN zmarł August II Mocny\n2 TYPE Historia Polski\n2 DATE  1 FEB 1733\n",
            "1 EVEN koronowano Augusta III\n2 TYPE Historia Polski\n2 DATE  17 JAN 1734\n",
            "1 EVEN abdykacja Stanisława Leszczyńskiego\n2 TYPE Historia Polski\n2 DATE  26 JAN 1736\n",
            "1 EVEN Andrzej Zamoyski zniósł poddaństwo chłopów w swoich dobrach\n2 TYPE Historia Polski\n2 DATE  1760\n",
            "1 EVEN zmarł August III Sas\n2 TYPE Historia Polski\n2 DATE  5 OCT 1763\n",
            "1 EVEN elekcja Stanisława Augusta Poniatowskiego\n2 TYPE Historia Polski\n2 DATE  6 SEP 1764\n",
            "1 EVEN I rozbiór Polski między Prusy, Rosję i Austrię\n2 TYPE Historia Polski\n2 DATE  5 AUG 1772\n",
            "1 EVEN odbył się pierwszy w historii spis powszechny\n2 TYPE Historia Polski\n2 DATE  FROM 1789 TO 1790\n",
            "1 EVEN uchwalono pierwszą polską konstytucję (Konstytucja 3 maja)\n2 TYPE Historia Polski\n2 DATE  3 MAY 1791\n",
            "1 EVEN II rozbiór Polski\n2 TYPE Historia Polski\n2 DATE  21 JAN 1793\n",
            "1 EVEN wybuchła insurekcja kościuszkowska\n2 TYPE Historia Polski\n2 DATE  24 MAR 1794\n2 NOTE https://pl.wikipedia.org/wiki/Insurekcja_ko%C5%9Bciuszkowska\n",
            "1 EVEN bitwa pod Racławicami wygrana przez wojska Kościuszki\n2 TYPE Historia Polski\n2 DATE  4 APR 1794\n",
            "1 EVEN oddziały rosyjskie dokonały rzezi Pragi\n2 TYPE Historia Polski\n2 DATE  4 SEP 1794\n",
            "1 EVEN Rosjanie aresztowali Tomasza Wawrzeckiego – koniec insurekcji kościuszkowskiej\n2 TYPE Historia Polski\n2 DATE  19 NOV 1794\n",
            "1 EVEN III rozbiór Polski\n2 TYPE Historia Polski\n2 DATE  24 OCT 1795\n",
            "1 EVEN Jan Henryk Dąbrowski utworzył Legiony Polskie\n2 TYPE Historia Polski\n2 DATE  9 JAN 1797\n",
            "1 EVEN w Petersburgu zmarł ostatni król Polski Stanisław August Poniatowski\n2 TYPE Historia Polski\n2 DATE  12 FEB 1789\n",
            "1 EVEN żołnierze Legionów Polskich zostali wysłani na francuską kolonię San Domingo (ob. Haiti), by tłumić tamtejsze bunty miejscowych\n2 TYPE Historia Polski\n2 DATE  18 MAY 1802\n",
            "1 EVEN pod wodzą Jana Henryka Dąbrowskiego i Józefa Wybickiego wybuchło powstanie wielkopolskie\n2 TYPE Historia Polski\n2 DATE  7 NOV 1806\n",
            "1 EVEN na mocy pokoju tylżyckiego ustanowiono powstanie Księstwa Warszawskiego\n2 TYPE Historia Polski\n2 DATE  FROM 7 JUL 1807 TO 9 JUL 1807\n",
            "1 EVEN na mocy pokoju francusko-austriackiego w Schönbrunn, Księstwo Warszawskie uzyskało Nową Galicję\n2 TYPE Historia Polski\n2 DATE  14 OCT 1809\n",
            "1 EVEN przeprowadzono uwłaszczenie chłopów w Prusach\n2 TYPE Historia Polski\n2 DATE  14 SEP 1811\n",
            "1 EVEN podczas Bitwy pod Lipskiem zginął książę Józef Poniatowski\n2 TYPE Historia Polski\n2 DATE  19 OCT 1813\n",
            "1 EVEN Rosja, Prusy i Austria zawarły traktat o podziale ziem polskich: utworzono Królestwo Polskie połączone unią personalną z Rosją, autonomiczne Wielkie Księstwo Poznańskie w granicach Prus oraz Rzeczpospolitą Krakowską władaną przez Austrię\n2 TYPE Historia Polski\n2 DATE  3 MAY 1815\n",
            "1 EVEN w Szwajcarii zmarł Tadeusz Kościuszko\n2 TYPE Historia Polski\n2 DATE  15 OCT 1817\n",
            "1 EVEN w zaborze pruskim przeprowadzono reformę uwłaszczeniową\n2 TYPE Historia Polski\n2 DATE  8 APR 1823\n",
            "1 EVEN zmarł car Aleksander I, tron rosyjski i polski objął jego brat Mikołaj I\n2 TYPE Historia Polski\n2 DATE  1 DEC 1825\n",
            "1 EVEN „noc listopadowa” – początek powstania listopadowego\n2 TYPE Historia Polski\n2 DATE  FROM 29 NOV 1830 TO 30 NOV 1830\n",
            "1 EVEN Rząd Narodowy ogłosił pobór pospolitego ruszenia\n2 TYPE Historia Polski\n2 DATE  21 JUN 1831\n2 NOTE https://pl.wikipedia.org/wiki/Powstanie_listopadowe\n",
            "1 EVEN twierdza Zamość kapitulowała: koniec powstania listopadowego\n2 TYPE Historia Polski\n2 DATE  21 OCT 1831\n",
            "1 EVEN Mikołaj I zniósł konstytucję, wcielił Królestwo do Cesarstwa Rosyjskiego raz zlikwidował polski sejm, armię oraz odrębny budżet\n2 TYPE Historia Polski\n2 DATE  26 FEB 1832\n",
            "1 EVEN językiem urzędowym na ziemiach polskich został język rosyjski\n2 TYPE Historia Polski\n2 DATE  1 JAN 1834\n",
            "1 EVEN na ziemiach polskich wprowadzono rosyjski system monetarny\n2 TYPE Historia Polski\n2 DATE  1841\n",
            "1 EVEN wybuchła rewolucja krakowska\n2 TYPE Historia Polski\n2 DATE  20 FEB 1846\n",
            "1 EVEN wybuchło powstanie wielkopolskie\n2 TYPE Historia Polski\n2 DATE  20 MAR 1848\n",
            "1 EVEN w Austrii przeprowadzono uwłaszczenie chłopów\n2 TYPE Historia Polski\n2 DATE  7 SEP 1848\n",
            "1 EVEN w Paryżu zmarł Fryderyk Chopin\n2 TYPE Historia Polski\n2 DATE  17 OCT 1849\n",
            "1 EVEN zniesiono granicę celną między Królestwem Polskim a Cesarstwem Rosyjskim\n2 TYPE Historia Polski\n2 DATE  25 OCT 1850\n",
            "1 EVEN zmarł car Mikołaj I, tron przejął jego syn Aleksander II\n2 TYPE Historia Polski\n2 DATE  2 MAY 1855\n",
            "1 EVEN zmarł Adam Mickiewicz\n2 TYPE Historia Polski\n2 DATE  26 NOV 1855\n",
            "1 EVEN zniesienie pańszczyzny\n2 TYPE Historia Polski\n2 DATE  FROM 1861 TO 1864\n",
            "1 EVEN władze carskie przeprowadziły pobór do wojska\n2 TYPE Historia Polski\n2 DATE  OCT 1862\n",
            "1 EVEN do wojska wcielono 1,5 tys. młodych ludzi – początek rosyjskiej branki\n2 TYPE Historia Polski\n2 DATE  FROM 14 JAN 1868 TO 15 JAN 1863\n",
            "1 EVEN wybuchło powstanie styczniowe – władze w kraju objął Tymczasowy Rząd Narodowy\n2 TYPE Historia Polski\n2 DATE  22 JAN 1863\n",
            "1 EVEN koniec powstania styczniowego\n2 TYPE Historia Polski\n2 DATE  1864\n",
            "1 EVEN wprowadzono język polski do galicyjskich urzędów\n2 TYPE Historia Polski\n2 DATE  4 JUN 1869\n",
            "1 EVEN Jan Matejko namalował Bitwę pod Grunwaldem\n2 TYPE Historia Polski\n2 DATE  1878\n",
            "1 EVEN „rugi pruskie”\n2 TYPE Historia Polski\n2 DATE  1885\n2 NOTE https://pl.wikipedia.org/wiki/Rugi_pruskie\n",
            "1 EVEN Jan Matejko stworzył „Poczet królów i książąt polskich”\n2 TYPE Historia Polski\n2 DATE  1890\n",
            "1 EVEN we Wrześni wybuchły strajki szkolne dzieci w obronie języka polskiego\n2 TYPE Historia Polski\n2 DATE  APR 1901\n",
            "1 EVEN Maria Skłodowska-Curie i Piotr Curie otrzymali Nagrodę Nobla z dziedziny fizyki za odkrycie polonu\n2 TYPE Historia Polski\n2 DATE  1903\n",
            "1 EVEN Henryk Sienkiewicz otrzymał Nagrodę Nobla za Quo vadis\n2 TYPE Historia Polski\n2 DATE  1905\n",
            "1 EVEN Maria Skłodowska-Curie otrzymała Nagrodę Nobla w dziedzinie chemii za pracę nad radem, polonem oraz promieniotwórczością\n2 TYPE Historia Polski\n2 DATE  1911\n",
            "1 EVEN początek I wojny światowej\n2 TYPE Historia Polski\n2 DATE  28 JUL 1914\n",
            "1 EVEN powstały Legiony Polskie\n2 TYPE Historia Polski\n2 DATE  AUG 1914\n",
            "1 EVEN Niemcy i ententa podpisały zawieszenie broni; Rada Regencyjna przekazała Józefowi Piłsudskiego dowództwo nad Polską Siłą Zbrojną – Polska odzyskała niepodległość\n2 TYPE Historia Polski\n2 DATE  11 NOV 1918\n",
            "1 EVEN wybuchło powstanie wielkopolskie\n2 TYPE Historia Polski\n2 DATE  27 DEC 1918\n",
            "1 EVEN podpisano traktat wersalski, dzięki któremu Polska otrzymała Wielkopolskę oraz Pomorze\n2 TYPE Historia Polski\n2 DATE  28 JUN 1919\n",
            "1 EVEN bitwa warszawska\n2 TYPE Historia Polski\n2 DATE  FROM 13 AUG 1920 TO 15 AUG 1920\n2 NOTE https://pl.wikipedia.org/wiki/Bitwa_Warszawska\n",
            "1 EVEN podzielono Śląsk pomiędzy Niemcy i Polskę\n2 TYPE Historia Polski\n2 DATE  12 OCT 1921\n",
            "1 EVEN fanatyczny nacjonalista zamordował Gabriela Narutowicza\n2 TYPE Historia Polski\n2 DATE  16 DEC 1922\n",
            "1 EVEN w wyniku hiperinflacji wybuchł kryzys gospodarczy\n2 TYPE Historia Polski\n2 DATE  1923\n",
            "1 EVEN Władysław Grabski przeprowadził reformy gospodarcze (m.in. wymianę marki polskiej na złotego)\n2 TYPE Historia Polski\n2 DATE  1924\n",
            "1 EVEN prezydentem Polski został Ignacy Mościcki\n2 TYPE Historia Polski\n2 DATE  1 JUN 1926\n",
            "1 EVEN zmarł Józef Piłsudski\n2 TYPE Historia Polski\n2 DATE  12 MAY 1935\n",
            "1 EVEN zmarł Roman Dmowski\n2 TYPE Historia Polski\n2 DATE  2 JAN 1939\n",
            "1 EVEN hitlerowskie Niemcy, w porozumieniu ze Związkiem Radzieckim, napadły na Polskę. Początek kampanii wrześniowej w Polsce. Początek II wojny światowej\n2 TYPE Historia Polski\n2 DATE  1 SEP 1939\n",
            "1 EVEN podpisanie przez III Rzeszę i ZSRR porozumienia dotyczącego podziału ziem polskich\n2 TYPE Historia Polski\n2 DATE  28 SEP 1939\n",
            "1 EVEN rozpoczęto deportację Polaków w głąb ZSRR\n2 TYPE Historia Polski\n2 DATE  10 FEB 1940\n",
            "1 EVEN śmierć gen. Władysława Sikorskiego w katastrofie lotniczej pod Gibraltarem\n2 TYPE Historia Polski\n2 DATE  4 JUL 1943\n",
            "1 EVEN wybuchło powstanie warszawskie\n2 TYPE Historia Polski\n2 DATE  1 AUG 1944\n",
            "1 EVEN koniec II wojny światowej w Europie\n2 TYPE Historia Polski\n2 DATE  8 MAY 1945\n",
            "1 EVEN odbyła się konferencja poczdamska. Na konferencji ustalono przebieg zachodniej granicy Polski na linii rzeki Odry i Nysy Łużyckiej. Ziemie na wschód od tych rzek, tzw. Ziemie Zachodnie, weszły w skład państwa polskiego\n2 TYPE Historia Polski\n2 DATE  FROM 17 JUL 1945 TO 2 AUG 1945\n",
            "1 EVEN umarł Józef Stalin\n2 TYPE Historia Polski\n2 DATE  5 MAR 1953\n",
            "1 EVEN w Moskwie zmarł Bolesław Bierut\n2 TYPE Historia Polski\n2 DATE  12 MAR 1956\n",
            "1 EVEN podczas VIII plenum KC PZPR wybrano Gomułkę na stanowisko I sekretarza KC PZPR\n2 TYPE Historia Polski\n2 DATE  21 OCT 1956\n",
            "1 EVEN odbyły się centralne obchody Milenium na Jasnej Górze\n2 TYPE Historia Polski\n2 DATE  3 MAY 1966\n",
            "1 EVEN odsunięto Władysława Gomułki od władzy. Pierwszym sekretarzem KC PZPR został Edward Gierek\n2 TYPE Historia Polski\n2 DATE  20 DEC 1970\n",
            "1 EVEN wybór kardynała Karola Wojtyły na biskupa Rzymu. Nowy papież przybrał imię Jan Paweł II\n2 TYPE Historia Polski\n2 DATE  16 OCT 1978\n",
            "1 EVEN podpisano porozumienia sierpniowe\n2 TYPE Historia Polski\n2 DATE  30 AUG 1980\n",
            "1 EVEN zmarł Prymas Polski kardynał Stefan Wyszyński\n2 TYPE Historia Polski\n2 DATE  28 MAY 1981\n",
            "1 EVEN premier Wojciech Jaruzelski został także I sekretarzem KC PZPR w miejsce Stanisława Kani\n2 TYPE Historia Polski\n2 DATE  18 OCT 1981\n",
            "1 EVEN władze komunistyczne PRL wprowadziły w Polsce stan wojenny\n2 TYPE Historia Polski\n2 DATE  13 DEC 1981\n",
            "1 EVEN zawieszono stan wojenny\n2 TYPE Historia Polski\n2 DATE  31 DEC 1982\n",
            "1 EVEN zniesiono stan wojenny\n2 TYPE Historia Polski\n2 DATE  22 JUL 1983\n",
            "1 EVEN odbyły się obrady Okrągłego Stołu\n2 TYPE Historia Polski\n2 DATE  FROM 6 FEB 1989 TO 5 APR 1989\n",
            "1 EVEN Pierwsza tura wyborów do tzw. Sejmu kontraktowego. Umowny koniec władzy komunistycznej w Polsce.\n2 TYPE Historia Polski\n2 DATE  4 JUN 1989\n",
            "1 EVEN urynkowiono ceny żywności – zniesienie systemu kartkowego\n2 TYPE Historia Polski\n2 DATE  1 AUG 1989\n",
            "1 EVEN Sejm i Senat zatwierdziły pakiet reform gospodarczych zwanych planem Balcerowicza\n2 TYPE Historia Polski\n2 DATE  27 DEC 1989\n",
            "1 EVEN zmieniono konstytucję Polskiej Rzeczypospolitej Ludowej podczas której m.in. zmieniła nazwę państwa na Rzeczpospolita Polska i przywrócono koronę orłu białemu w Godle Polski\n2 TYPE Historia Polski\n2 DATE  31 DEC 1989\n",
            "1 EVEN wybory prezydenckie wygrał Lech Wałęsa\n2 TYPE Historia Polski\n2 DATE  9 DEC 1990\n",
            "1 EVEN przeprowadzono denominację złotówki w stosunku 1:10 000\n2 TYPE Historia Polski\n2 DATE  1 JAN 1995\n",
            "1 EVEN wybory prezydenckie wygrał Aleksander Kwaśniewski\n2 TYPE Historia Polski\n2 DATE  19 OCT 1995\n",
            "1 EVEN Polska przystąpiła do NATO\n2 TYPE Historia Polski\n2 DATE  12 MAR 1999\n",
            "1 EVEN Polska przystąpiła do Unii Europejskiej\n2 TYPE Historia Polski\n2 DATE  1 MAY 2004\n",
            "1 EVEN zmarł Jan Paweł II\n2 TYPE Historia Polski\n2 DATE  2 APR 2005\n",
            "1 EVEN II tura wyborów prezydenckich wygrał Lech Kaczyński\n2 TYPE Historia Polski\n2 DATE  23 OCT 2005\n",
            "1 EVEN w katastrofie lotniczej w Smoleńsku zginął prezydent Rzeczypospolitej Polskiej Lech Kaczyński wraz z żoną. Śmierć poniosły także inne osoby, m.in.: ostatni prezydent RP na uchodźstwie Ryszard Kaczorowski. Łącznie zginęło 96 osób\n2 TYPE Historia Polski\n2 DATE  10 APR 2010\n",
            "1 EVEN II tura wyborów prezydenckich. Bronisław Komorowski został wybrany prezydentem Rzeczypospolitej Polskiej\n2 TYPE Historia Polski\n2 DATE  4 JUL 2010\n",
            "1 EVEN II tura wyborów prezydenckich wygrał Andrzej Duda\n2 TYPE Historia Polski\n2 DATE  24 MAY 2015\n",
            "1 EVEN II tura wyborów prezydenckich, prezydentem Rzeczypospolitej Polski został ponownie Andrzej Duda\n2 TYPE Historia Polski\n2 DATE  12 JUL 2020\n",
        ]);
    }

};
