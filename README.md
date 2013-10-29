Contao-jQuery-Version-Switcher
==============================

Select different jQuery versions in Contao. This extension allows you to select/change the jQuery version in the page layout settings of the contao backend.

Currently jQuery versions from 1.3.2 to 2.0.3 are supported.

## Requirements

* Contao 3 / Contao 3.1

## Note

* Contao 3.1 and higher supports now "jQuery - local file", "jQuery - googleapis.com" and "jQuery - googleapis.com with local fallback"
* Contao 3.0: This extension only works, when "jQuery source" has "jQuery - local file" selected.
* Older jQuery versions (less than version 1.6.4) may have some compatibility issues with the "jQuery templates"
* jQuery 2.0.3 does not support older browsers like IE8!

## Changelog

##### Version 3.1.1 stable

* Supports the following jQuery versions: 2.0.3 / 1.10.2 / 1.9.1 / 1.8.3 / 1.7.2 / 1.6.4 / 1.5.2 / 1.4.4 / 1.3.2
* Added version switcher support for googleapis and googleapis with fallback (not available in contao 3.0)
* Added jQuery 2.0.3 and 1.10.2
* Removed jQuery 1.10.1 (changes automatically to 1.10.2 if 1.10.1 was used)

##### Version 3.1.0 alpha

* First release
* Supports the following jQuery versions: 1.10.1 / 1.9.1 / 1.8.3 / 1.7.2 / 1.6.4 / 1.5.2 / 1.4.4 / 1.3.2
