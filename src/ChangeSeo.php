<?php

namespace OffbeatWP\LocalSeo;


class ChangeSeo
{

    public function update()
    {

        add_filter('wpseo_json_ld_output', [$this, 'change_yoast_ld_json_file'], 10, 1);

    }

    public function change_yoast_ld_json_file($data){

//      $data = array();
        return $data;

    }


    static function singleton() {
        static $instance = null;
        if ($instance === null) {
            $instance = new ChangeSeo();
        }
        return $instance;
    }


}

