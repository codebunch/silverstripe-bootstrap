<?php

use DNADesign\Elemental\Models\BaseElement;

class ElementContact extends BaseElement
{
    private static $singular_name = 'contact';

    private static $plural_name = 'contacts';

    private static $description = 'Get in touch';

    private static $table_name = 'ElementContact';

    private static $db = [
        'SmallDescription' => 'HTMLText'
    ];
    
    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Contact');
    }
}
