<?php

namespace OffbeatWP\LocalSeo;

class AddSeoFields
{
    const ID = 'local-seo';
    const PRIORITY = 1;

    public function title()
    {
        return __('Local Seo', 'raow');
    }

    public function form()
    {

        $form = new \OffbeatWP\Form\Form();

        $form->addTab('localseo_company_general-information', 'General information');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_name', 'Company name'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_link', 'Company website'));
        $priceRange = \OffbeatWP\Form\Fields\Select::make('company_price_range', 'Price class');
        $localCompanyKind = \OffbeatWP\Form\Fields\Select::make('localseo_company_type', 'Company Type');

        $priceRange->addOptions(\OffbeatWP\LocalSeo\data\General::PriceRange());

        $form->addField($priceRange);

        $openingsDays = \OffbeatWP\Form\Fields\Select::make('localseo_opening_day', 'Day');

        $openingsDays->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Days());

        $localCompanyKind->addOptions(\OffbeatWP\LocalSeo\data\General::CompanyKind());

        $countries = \OffbeatWP\Form\Fields\Select::make('localseo_company_country', 'Country');

        $countries->addOptions(\OffbeatWP\LocalSeo\data\Location::country());

        $closingTime = \OffbeatWP\Form\Fields\Select::make('localseo_closing_time', 'Closing time');
        $openingHours = \OffbeatWP\Form\Fields\Select::make('localseo_opening_time', 'Opening time');

        $closingTime->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $openingHours->addOptions(\OffbeatWP\LocalSeo\data\DateTime::Time());
        $form->addField($localCompanyKind);
        $form->addTab('contact-information', 'Contact details');
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_fax', 'Fax number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_phone', 'Telephone number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_street', 'Street'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_number', 'Number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_zip_code', 'Zip code'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_place', 'Place (City)'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_province', 'Province'));
        $form->addField($countries);
        $form->addTab('opening-hours', 'Opening hours');
        $form->addRepeater('opening-hours-selector',
            'Opening hours')->addField($openingsDays)->addField($openingHours)->addField($closingTime);

        return $form;

    }
}
