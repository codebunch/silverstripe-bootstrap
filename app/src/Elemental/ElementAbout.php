<?php

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\HTMLTextField;
use SilverStripe\Forms\TextField;

class ElementAbout extends BaseElement
{
    private static $singular_name = 'about';

    private static $plural_name = 'about';

    private static $description = 'About';

    private static $table_name = 'ElementAbout';

    private static $db = [
        'SmallDescription' => 'HTMLText',
        'ButtonLabel' => 'Varchar(255)',
        'LinkToNav' => 'Boolean(1)',
        'NavigationLabel' => 'Varchar(255)',
        'LinkID' => 'Varchar(255)'
    ];

    public function getCMSFields()
    {

        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'About');
    }
}
