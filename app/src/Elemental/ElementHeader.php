<?php

use DNADesign\Elemental\Models\BaseElement;

class ElementHeader extends BaseElement
{
    private static $singular_name = 'header';

    private static $plural_name = 'header';

    private static $description = 'Header';

    private static $table_name = 'ElementHeader';

    private static $db = [
        'SmallDescription' => 'HTMLText',
        'ButtonLabel' => 'Varchar(255)'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Header');
    }
}
