<?php

use SilverStripe\ORM\DataObject;
use SilverStripe\Assets\Image;

class Portfolio extends DataObject
{

    private static $table_name = 'Portfolio';

    private static $singular_name = 'Portfolio';

    private static $plural_name = 'Portfolios';

    private static $description = 'Portfolio';

    private static $db = [
      'Category' => 'Varchar(255)',
      'ProjectName' => 'Varchar(255)'
    ];
  
    private static $has_one = [
      'Thumbnail' => Image::class,
      'FullSizeImage' => Image::class
    ];

    private static $belongs_many_many = array('ElementPortfolio' => ElementPortfolio::class );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }
}
