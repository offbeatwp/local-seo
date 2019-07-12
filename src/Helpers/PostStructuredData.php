<?php

namespace OffbeatWP\LocalSeo\Helpers;

class PostStructuredData
{

    public function __construct()
    {

        $acfField = new MakeAcfFieldsForStructuredData('Structured Data');
        $acfField->addType('Article', 'tab_article');
        $acfField->addTextField('My field 1', 'my_field_one');
        $acfField->addType('Mijn Tab', 'tab_bie');
        $acfField->addTextBoxField('Mijn text veld', 'my_text_field');
        $acfField->execute();

    }

}