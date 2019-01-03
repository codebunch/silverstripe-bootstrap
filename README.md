# SilverStripe 4 + Bootstrap recipe
    
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
composer create-project beanjuice/silverstripe-bootstrap ./your-project-folder dev-master
```

```
Create your own .env file with DB credentials, follow syntax as per .env.example
```

```
cd themes/creative
npm install
```

## Coding standard check using PHP_CodeSniffer

```
./vendor/bin/phpcs *.php
./vendor/bin/phpcbf *.php
```

## Local admin credentials setup

```
Add your default admin credentials in config - app/_config.php
SilverStripe\Security\Security::setDefaultAdmin("admin","admin");
```

## Build

```
Execute build.sh for SilverStripe dev/build
```

## Screenprints


![Screenprints](https://raw.githubusercontent.com/beanjuice/silverstripe-bootstrap/master/themes/creative/images/homepage.png)



![Screenprints](https://raw.githubusercontent.com/beanjuice/silverstripe-bootstrap/master/themes/creative/images/cmsadmin.png)



![Screenprints](https://raw.githubusercontent.com/beanjuice/silverstripe-bootstrap/master/themes/creative/images/adminlogin.png)



## Special thanks to https://startbootstrap.com/ for the free bootstrap 4 template.
