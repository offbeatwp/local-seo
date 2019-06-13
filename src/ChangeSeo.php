<?php

namespace OffbeatWP\LocalSeo;


class ChangeSeo
{


    public function __construct()
    {

        add_filter('wpseo_schema_organization', [$this, 'changeOrganizationData']);

        var_dump(setting('opening-hours-selector'));

    }

    public function changeOrganizationData($data)
    {
        $newData = collect();

        $this->getOrganizationData('@type', 'company_kind', $newData);
        $this->getOrganizationData('name', 'company_name', $newData);
        $this->getOrganizationData('url', 'url', $newData);
        $this->getOrganizationData('telephone', 'phone', $newData);
        $this->getOrganizationData('fax', 'fax', $newData);


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

        return $newData->toArray();

    }

    public function getOrganizationData($type, $key, $data)
    {

        if (!empty($settingValue = setting($key))) {
            $data->put($type, $settingValue);
        }

    }



}

