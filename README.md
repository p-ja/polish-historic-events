# Polish historical events - module for Webtrees

This module provides historical facts (in Polish) for [webtrees](https://www.webtrees.net/).

This module contains almost 200 events from Polish history.
It is based on [Kalendarium historii Polski](https://pl.wikipedia.org/wiki/Kalendarium_historii_Polski) (PL).

## Requirements

Same as Webtrees [system requirements](https://github.com/fisharebest/webtrees#system-requirements).

Tested with 2.0.17 version of webtrees.

## Installation

1. Backup webtrees database
2. Download the latest release
3. Unzip the package into your `webtrees/modules_v4` directory of your Webtrees installation
4. Log in as administrator in your Webtress.
5. Activate this module in `Control Panel`/`Modules`/`Individual page`/`Historic events`.

## Usage

Once the module is enabled, the **Historic events** should appear in **Facts and events** tab on person details page.

## Development

### Formatting events

Events are *hardcoded* in `module.php`. They are in [GEDCOM](https://www.gedcom.org/) format. To make it easier to edit the events, an auxiliary ODS file can be found in `events/historia_polski.ods`. This file can be edited using e.g. LibreOffice. All changes should be done in the first tab *Dane*. The result can be copied from automatically generated content in the *Wynik* tab. Tab *Pola* is auxiliary is not meant to be edited manually.

### Building release

A release package can be generated manually but using an [Apache Ant](https://ant.apache.org/) build script is preferable. Once you have Ant installed, simply run:

```shell
ant clean release
```

The release package will be generated in `release` folder.

### Test

To test the module, you can install it manually in a Webtrees installation or use a dockerized version.

```shell
docker-compose up -d
```

**Known issue** - when running for the first time, start the database first, wait until fully loaded and then start Webtrees container.

```shell
docker-compose up -d db
# wait until db is fully up and running
docker-compose up -d webtrees
```
