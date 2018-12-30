<?php

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\CheckboxField;

class BaseElementExtension extends DataExtension
{

    private static $db = [
        'LinkToNav' => 'Boolean(1)',
        'NavigationLabel' => 'Varchar(255)',
        'LinkID' => 'Varchar(255)'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        // Remove relationship fields
        $fields->removeByName('LinkToNav');
        $fields->removeByName('NavigationLabel');
        $fields->removeByName('LinkID');
        $fields->addFieldToTab("Root.Settings", new CheckboxField("LinkToNav", "Link To Nav"));
        $fields->addFieldToTab("Root.Settings", new TextField("NavigationLabel", "Navigation Label"));
        $fields->addFieldToTab("Root.Settings", new TextField("LinkID", "Link ID"));
    }
}
