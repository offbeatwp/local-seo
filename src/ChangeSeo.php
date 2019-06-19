<?php

namespace OffbeatWP\LocalSeo;


use function YoastSEO_Vendor\GuzzleHttp\default_ca_bundle;

class ChangeSeo
{


    public function __construct()
    {

        add_filter('wpseo_schema_organization', [$this, 'changeOrganizationData']);

    }

    public function changeOrganizationData($data)
    {

//        if (setting('opening-hours-selector') != null) {
//            $days = null;
//            foreach (setting('opening-hours-selector') as $day) {
//                $days[] = $day['localseo_opening_day'] . ' ' . $day['localseo_opening_time'] . '-' . $day['localseo_closing_time'];
//            }
//            $data['openingHours'] = implode(', ',$days);
//        }

        if (setting('localseo_company_fax') != null) {
            $data['faxNumber'] = setting('localseo_company_fax');
        }
        if (setting('localseo_company_phone') != null) {
            $data['telephone'] = setting('localseo_company_phone');
        }

        if (setting('localseo_company_type') != null) {
            $data['@type'] = setting('localseo_company_type');
        }

//        $data['openingHours'] = '"Mo-Fr 10:00-19:00", "Sa 10:00-22:00", "Su 10:00-21:00"';


        $data['address'] = [
            '@type' => 'PostalAddress',
            'addressLocality' =>
                setting(localseo_company_place) . ', ' . setting('localseo_company_country'),
            'streetAddress' => setting(localseo_company_street) . ' ' . setting('localseo_company_number'),
            'postalCode' => setting('localseo_company_zip_code'),
        ];

        return $data;

    }


}

