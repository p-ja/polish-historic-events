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

     public function historicEventsAll(): Collection
    {
        // $eventTypeC = I18N::translate('Chancellor of Germany');

        return new Collection([
            "1 EVEN Chrzest Polski\n2 TYPE Historia Polski\n2 DATE  966\n2 NOTE https://pl.wikipedia.org/wiki/Chrzest_Polski\n",
            "1 EVEN Polska przystąpiła do NATO\n2 TYPE Historia Polski\n2 DATE  1999\n",
            "1 EVEN Polska przystąpiła do Unii Europejskiej\n2 TYPE Historia Polski\n2 DATE  1 MAY 2004\n",
        ]);
    }

};
