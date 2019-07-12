<?php

namespace OffbeatWP\LocalSeo\Helpers;

class PostStructuredData
{

    public function __construct()
    {

        $acfField = new MakeAcfFieldsForStructuredData('HelloGroup');
        $acfField->addTextField('My field 1', 'my_field_one' );
        $acfField->addTextBoxField('Mijn text veld', 'my_text_field');
        $acfField->execute();

    }

}