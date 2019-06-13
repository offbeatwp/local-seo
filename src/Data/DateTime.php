<?php

namespace OffbeatWP\LocalSeo\Data;

class DateTime
{

    public static function Time()
    {

        $time = [
            '07:00:00' => '7:00',
            '08:00:00' => '8:00',
            '09:00:00' => '9:00',
            '10:00:00' => '10:00',
            '11:00:00' => '11:00',
            '12:00:00' => '12:00',
            '13:00:00' => '13:00',
            '14:00:00' => '14:00',
            '15:00:00' => '15:00',
            '16:00:00' => '16:00',
            '17:00:00' => '17:00',
            '18:00:00' => '18:00',
            '19:00:00' => '19:00',
            '20:00:00' => '20:00',
            '21:00:00' => '21:00',
            '22:00:00' => '22:00',
            '23:00:00' => '23:00',
            '24:00:00' => '24:00',
            '01:00:00' => '1:00',
            '02:00:00' => '2:00',
            '03:00:00' => '3:00',
            '04:00:00' => '4:00',
            '05:00:00' => '5:00',
            '06:00:00' => '6:00',
        ];

        return $time;

    }

    public static function Days(){

        $days = [
            'http://schema.org/Monday' => 'Monday',
            'http://schema.org/Tuesday' => 'Tuesday',
            'http://schema.org/Wednesday' => 'Wednesday',
            'http://schema.org/Thursday' => 'Thursday',
            'http://schema.org/Friday' => 'Friday',
            'http://schema.org/Saturday' => 'Saturday',
            'http://schema.org/Sunday' => 'Sunday',
        ];

            return $days;
    }


}
