<?php

class Utilities 
{
    
    function __construct()
    {
    }

    public static function datetimeFormat($date)
    {
        $date = new DateTime($date);
        return $date->format('Y-m-d');
    }

    public static function datetimeFormatNoDate($date)
    {
        $date = new DateTime($date);
        return $date->format('H:i:s');
    }

    public static function datetimeFormatNoTime($date)
    {
        $date = new DateTime($date);
        return $date->format('Y/m/d');
    }
}
