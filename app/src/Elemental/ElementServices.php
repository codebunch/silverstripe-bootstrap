<?php

use DNADesign\Elemental\Models\BaseElement;

class ElementServices extends BaseElement
{
    private static $singular_name = 'service';

    private static $plural_name = 'services';

    private static $description = 'Our Services';

    private static $table_name = 'ElementServices';
    
    private static $many_many = array('Service' => Services::class );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Services');
    }
}
