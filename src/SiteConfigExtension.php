<?php

namespace DorsetDigital\TawkTo;


use SilverStripe\Forms\TextareaField;
use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms\FieldList;

class SiteConfigExtension extends DataExtension
{
    private static $db = [
        'TawkToEmbedCode' => 'Text'
    ];

    public function updateCMSFields(FieldList $fields) {
        $fields->addFieldToTab('Root.TawkTo', TextareaField::create('TawkToEmbedCode')
            ->setTitle(_t(__CLASS__.'.EmbedFieldTitle', 'Embed Code'))
            ->setDescription(_t(__CLASS__ . '.EmbedFieldDescription', "Tawk.to embed code")));
        return $fields;
    }
}