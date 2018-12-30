<?php

use SilverStripe\ORM\DataObject;

class Services extends DataObject
{

    private static $table_name = 'Services';

    private static $singular_name = 'Services';

    private static $plural_name = 'Services';

    private static $description = 'Our Services';

    private static $db = [
      'Title' => 'Varchar(255)',
      'Description' => 'HTMLText',
      'Icon' => 'Varchar(150)'
    ];

    private static $belongs_many_many = array('ElementServices' => ElementServices::class );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}
