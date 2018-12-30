<?php

use DNADesign\Elemental\Models\BaseElement;

class ElementPortfolio extends BaseElement
{
    private static $singular_name = 'portfolio';

    private static $plural_name = 'portfolios';

    private static $description = 'Portfolio';

    private static $table_name = 'ElementPortfolio';
    
    private static $many_many = array('Portfolio' => Portfolio::class );

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        return $fields;
    }

    public function getType()
    {
        return _t(__CLASS__ . '.BlockType', 'Portfolio');
    }
}
