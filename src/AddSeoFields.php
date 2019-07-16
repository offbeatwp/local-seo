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
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_email', 'Company email'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_slogan', 'Company slogan'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_tax_id', 'Company tax id'));


        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_link', 'Company website'));
        $localCompanyKind = \OffbeatWP\Form\Fields\Select::make('localseo_company_type', 'Company Type');

        //priceRange
        $priceRange = \OffbeatWP\Form\Fields\Select::make('company_price_range', 'Price class');
        $priceRange->addOptions(\OffbeatWP\LocalSeo\data\General::priceRange());
        $form->addField($priceRange);

        //Opening and closing time
        $openingsDays = \OffbeatWP\Form\Fields\Select::make('localseo_opening_day', 'Day');
        $openingsDays->addOptions(\OffbeatWP\LocalSeo\data\DateTime::days());
        $localCompanyKind->addOptions(\OffbeatWP\LocalSeo\data\General::companyKind());
        $closingTime = \OffbeatWP\Form\Fields\Select::make('localseo_closing_time', 'Closing time');
        $openingHours = \OffbeatWP\Form\Fields\Select::make('localseo_opening_time', 'Opening time');
        $closingTime->addOptions(\OffbeatWP\LocalSeo\data\DateTime::time());
        $openingHours->addOptions(\OffbeatWP\LocalSeo\data\DateTime::time());

        //Countries
        $countries = \OffbeatWP\Form\Fields\Select::make('localseo_company_country', 'Country');
        $countries->addOptions(\OffbeatWP\LocalSeo\data\Location::country());


        $form->addField($localCompanyKind);
        $form->addField(\OffbeatWP\Form\Fields\Image::make('localseo_company_image', 'Company image'));
        $form->addTab('contact-information', 'Contact details');

        //Contact details
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_fax', 'Fax number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_phone', 'Telephone number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_street', 'Street'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_number', 'Number'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_zip_code', 'Zip code'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_place', 'Place (City)'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('localseo_company_province', 'Province'));
        $form->addField($countries);

        $form->addTab('localseo_opening_hours', 'Opening hours');
        $form->addRepeater('opening_hours_selector',
            'Opening hours')->addField($openingsDays)->addField($openingHours)->addField($closingTime);
        $form->addTab('currency', 'Currency & Payment methods');

        //Currency
        $currencies = \OffbeatWP\Form\Fields\Select::make('local_seo_currencies', 'Currency');
        $currencies->addOptions(\OffbeatWP\LocalSeo\data\General::currency());
        $form->addRepeater('local_seo_currency_selectors',
            'Which currency can they pay at your store?')->addField($currencies);

        //Payment methods
        $paymentMethod = \OffbeatWP\Form\Fields\Select::make('payment_method', 'Payment methods');
        $paymentMethod->addOptions(\OffbeatWP\LocalSeo\data\General::paymentMethod());
        $form->addRepeater('local_seo_paymentmethod_selectors',
            'Which payment Method can they use at your store?')->addField($paymentMethod);

//        aggregateRating
        $form->addTab('static_reviews', 'Static Reviews');

        $enabled = \OffbeatWP\Form\Fields\Select::make('static_reviews_enabled', 'Enable static reviews');
        $enabled->addOptions(\OffbeatWP\LocalSeo\data\General::enabled());

        $onlyGeneralScore = \OffbeatWP\Form\Fields\Select::make('only_general_score', 'Only General Score');
        $onlyGeneralScore->addOptions(\OffbeatWP\LocalSeo\data\General::enabled());


        $rating = \OffbeatWP\Form\Fields\Select::make('local_seo_rating', 'Rating');
        $rating->addOptions(\OffbeatWP\LocalSeo\data\General::rating());

        $form->addField($enabled);
        $form->addField($onlyGeneralScore);

        $form->addField(\OffbeatWP\Form\Fields\Text::make('local_seo_review_best_rating', 'BestRating'));
        $form->addField(\OffbeatWP\Form\Fields\Text::make('local_seo_review_worst_rating', 'worstRating'));
        $form->addRepeater('static_review_selector',
            'Review toevoegen')->addField(\OffbeatWP\Form\Fields\Text::make('static_review_selector_author',
            'Author'))->addField(\OffbeatWP\Form\Fields\Text::make('name',
            'Name (for example: A masterpiece of literature)'))->addField(\OffbeatWP\Form\Fields\Text::make('static_review_selector_review_body',
            'Review Body'))->addField($rating);;


        return $form;

    }
}
