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
        $newData = collect();

        $this->getOrganizationData('@type', 'localseo_company_type', $newData);
        $this->getOrganizationData('name', 'localseo_company_name', $newData);
        $this->getOrganizationData('url', 'localseo_company_link', $newData);
        $this->getOrganizationData('telephone', 'localseo_company_phone', $newData);
        $this->getOrganizationData('fax', 'localseo_company_fax', $newData);
        $this->getOrganizationData('openingHoursSpecification', '', $newData);


        $data['address'] = [
            '@type' => 'PostalAddress',
            'addressLocality' =>
                '{{ Plaats }} , {{ LAND }}',
            'streetAddress' => '{{ Straat }}',
        ];
        $data['sameAs'] = [
            "https://www.facebook.com/yoast",
            "https://www.linkedin.com/company/yoast-com/",
            "https://en.wikipedia.org/wiki/Yoast",
            "https://twitter.com/yoast",
        ];

        return $data;


    }

    public function getOrganizationData($type, $key = null, $data)
    {
        switch ($type) {
            case 'openingHoursSpecification':
                $openingshours = setting('opening-hours-selector');
                var_dump($openingshours);
//                array shizzle

                $data->put($type, 'openingHoursSpecification');
                break;
            default:
                if (!empty($settingValue = setting($key))) {

                    $data->put($type, $settingValue);
                    break;
                }
        }
    }


}

