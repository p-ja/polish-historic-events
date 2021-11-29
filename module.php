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

    // /**
    //  * Additional/updated translations.
    //  *
    //  * @param string $language
    //  *
    //  * @return string[]
    //  */
    // public function customTranslations(string $language): array
    // {
    //     switch ($language) {
    //         case 'de':
    //             // Arrays are preferred, and faster.
    //             // If your module uses .MO files, then you can convert them to arrays like this.
    //             return (new Translation(__DIR__ . '/resources/language/de.mo'))->asArray();

    //         default:
    //             return [];
    //     }
    // }

    /**
     * Based on: https://pl.wikipedia.org/wiki/Kalendarium_historii_Polski
     */
    public function historicEventsAll(): Collection
    {
        // $eventTypeC = I18N::translate('Chancellor of Germany');

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
            ]);
    }

};
