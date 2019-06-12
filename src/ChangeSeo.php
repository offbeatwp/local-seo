<?php

namespace OffbeatWP\LocalSeo;


class ChangeSeo
{

    public function update()
    {

        add_filter('wpseo_schema_organization', [$this, 'changeOrganizationData']);

    }

    public function changeOrganizationData($data)
    {

        $data['@type'] = 'aa';
        $data['name'] = 'naam';
        $data['url'] = 'url';
        $data['telephone'] = 'telephone';
        $data['fax'] = 'fax';

        $data['address'] = [
            '@type' => 'PostalAddress',
            'addressLocality' =>
                '{{ Plaats }} , {{ LAND }}',
            'streetAddress' => '{{ Straat }}'
        ];

        return $data;

    }


    static function singleton()
    {
        static $instance = null;
        if ($instance === null) {
            $instance = new ChangeSeo();
        }
        return $instance;
    }


}

