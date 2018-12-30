# SilverStripe 4 + Bootstrap Boilerplate
    
## Introduction

This project can be used as a quick starter for someone who wish to use SilverStripe CMS and BootStrap theme.

Features include

* SilverStripe 4 CMS ++ Bootstrap 4 theme.
* Webpack setup that includes jQuery, BootStrap, font awesome in the bundle.
* SilverStripe elemental module [dnadesign/silverstripe-elemental] included and ready to use in the CMS.

## Requirements

* PHP >= 5.6.0
* SilverStripe CMS ^4.2.1
* SilverStripe Elemental Module ^3.0
* PHP_CodeSniffer 3.*


## Installation

```
composer require sathish-vel/silverstripe-bootstrap
```

```
cd themes/creative
npm install
```

Coding standard check using PHP_CodeSniffer

```
./vendor/bin/phpcs *.php
./vendor/bin/phpcbf *.php
```

## Build

Update the run.sh script for your localhost url and execute ./run.sh

## Screenprints

Special thanks to https://startbootstrap.com/ for the free bootstrap 4 template.