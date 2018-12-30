<?php

use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\TextField;
use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Assets\Image;

class SiteConfiguration extends DataExtension
{

    private static $db = [
        'Mobile' => 'Varchar(255)',
        'Email' => 'Varchar(255)'
    ];

    private static $has_one = [
        'Favicon' => Image::class,
        'Logo' => Image::class
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $fields->addFieldToTab(
            "Root.Main",
            new TextField("Mobile", "Contact Number")
        );

        $fields->addFieldToTab(
            "Root.Main",
            new TextField("Email", "Contact Email")
        );

        $fields->addFieldToTab(
            'Root.Main',
            $uploadField = new UploadField(
                $name = 'Favicon',
                $title = 'Upload Favicon'
            )
        );

        $fields->addFieldToTab(
            'Root.Main',
            $uploadField = new UploadField(
                $name = 'Logo',
                $title = 'Upload Logo'
            )
        );
    }
}
