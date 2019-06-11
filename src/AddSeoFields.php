<?php

namespace OffbeatWP\LocalSeo;

class AddSeoFields
{
    const ID = 'local-seo';
    const PRIORITY = 1;

    public function title()
    {
        return __('Seo', 'raow');
    }

    public function form()
    {

        $form = new \OffbeatWP\Form\Form();

        $form->addTab('general-information', 'General information');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_name', 'Company name'));

        $priceRange = \OffbeatWP\Form\Fields\Select::make('company_price_range', 'Price class');
        $localCompanyKind = \OffbeatWP\Form\Fields\Select::make('company_kind', 'Company Kind');


        $priceRange->addOptions(\OffbeatWP\LocalSeo\data\General::PriceRange());

        $form->addField($priceRange);

        $openingsdays = \OffbeatWP\Form\Fields\Select::make('opening_hours', 'Openings Hours');

        $openingsdays->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Days());

        $localCompanyKind->addOptions(\OffbeatWP\LocalSeo\data\General::CompanyKind());


        $countries =  \OffbeatWP\Form\Fields\Select::make('countries', 'Countries');

        $countries->addOptions(\OffbeatWP\LocalSeo\data\Location::country());

        $closingTime = \OffbeatWP\Form\Fields\Select::make('closing_time', 'Closing time');
        $openingHours = \OffbeatWP\Form\Fields\Select::make('opening_time', 'Opening time');

        $closingTime->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $openingHours->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $form->addField($localCompanyKind);
        $form->addTab('contact-information', 'Contact details');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_fax', 'Fax number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_phone', 'Telephone number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_street', 'Street'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_number', 'Number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_zip_code', 'Zip code'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_place', 'Place (City)'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('company_province', 'Province'));
        $form->addField($countries);
        $form->addTab('opening-hours', 'Opening hours');
        $form->addRepeater('opening-hours-selector',
            'Opening hours')->addField($openingsdays)->addField($openingHours)->addField($closingTime);

        return $form;

    }
}
