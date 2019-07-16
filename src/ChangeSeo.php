<?php

namespace OffbeatWP\LocalSeo;


use function YoastSEO_Vendor\GuzzleHttp\default_ca_bundle;

use OffbeatWP\LocalSeo\Helpers;


class ChangeSeo
{


    public function __construct()
    {

        add_filter('wpseo_schema_organization', [$this, 'changeOrganizationData']);

        add_action('init', [$this, 'addMetaToAll']);


        add_action('wp_head', [$this, 'add_inline_script'], 0);
    }

    public function addMetaToAll()
    {

        new Helpers\PostStructuredData();

    }

    public function add_inline_script()
    {
        if (!empty(setting('static_review_selector'))) {
//            echo '<script type="application/ld+json">';
//            echo json_encode(\OffbeatWP\LocalSeo\Helpers\ReturnReviews::getAllReviews());
//            echo '</script>';
        }
    }

    public function changeOrganizationData($data)
    {

        // General information

        //Company name
        if (setting('localseo_company_name') != null) {
            $data['name'] = setting('localseo_company_name');
        }
        //Company email
        if (setting('localseo_company_email') != null) {
            $data['email'] = setting('localseo_company_email');
        }
        //Company fax
        if (setting('localseo_company_fax') != null) {
            $data['faxNumber'] = setting('localseo_company_fax');
        }
        //Company phone
        if (setting('localseo_company_phone') != null) {
            $data['telephone'] = setting('localseo_company_phone');
        }
        //Company type
        if (setting('localseo_company_type') != null) {
            $data['@type'] = setting('localseo_company_type');
        }
        //Company price range
        if (setting('company_price_range') != null) {
            $data['priceRange'] = setting('company_price_range');
        }
        //Company image
        if (setting('localseo_company_image') != null) {
            $data['image'] = wp_get_attachment_image_src(setting('localseo_company_image'), 'large')[0];
        }
        //Company slogan
        if (setting('localseo_company_slogan') != null) {
            $data['slogan'] = setting('localseo_company_slogan');
        }
        //Company tax id
        if (setting('localseo_company_tax_id') != null) {
            $data['taxID'] = setting('localseo_company_tax_id');
        }
        // Company location
        $data['address'] = [
            '@type'           => 'PostalAddress',
            'addressLocality' =>
                setting('localseo_company_place') . ', ' . setting('localseo_company_country'),
            'streetAddress'   => setting('localseo_company_street') . ' ' . setting('localseo_company_number'),
            'postalCode'      => setting('localseo_company_zip_code'),
        ];


        // Opening Times company

        if (setting('opening-hours-selector') != null) {
            $days = null;
            foreach (setting('opening-hours-selector') as $day) {
                $days[] = $day['localseo_opening_day'] . ' ' . $day['localseo_opening_time'] . '-' . $day['localseo_closing_time'];
            }
            $data['openingHours'] = $days;

        }

        // $$$ company

        if (setting('paymentmethod-selectors') != null) {
            $paymentMethods = null;
            foreach (setting('paymentmethod-selectors') as $paymentMethode) {
                $paymentMethods[] = $paymentMethode['payment_method'];
            }
            $data['paymentAccepted'] = implode(', ', $paymentMethods);
        }

        if (setting('currency-selectors') != null) {
            $currencies = null;
            foreach (setting('currency-selectors') as $currency) {
                $currencies[] = $currency['local_seo_currencies'];
            }
            $data['currenciesAccepted'] = implode(', ', $currencies);
        }

        return $data;

    }
}

