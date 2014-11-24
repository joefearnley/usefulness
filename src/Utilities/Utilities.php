<?php

class Utilities 
{

    /**
     * Default time format.
     * 
     * @param  String $date
     * @return String
     */
    public static function datetimeFormat($date)
    {
        $date = new DateTime($date);
        return $date->format('Y/m/d H:i:s');
    }

    /**
     * Format a datetime string with no date.
     * 
     * @param String $date
     * @return String
     */
    public static function datetimeFormatNoDate($date)
    {
        $date = new DateTime($date);
        return $date->format('H:i:s');
    }

    /**
     * Format a datetime string with no time.
     * 
     * @param String $date
     * @return String
     */
    public static function datetimeFormatNoTime($date)
    {
        $date = new DateTime($date);
        return $date->format('Y/m/d');
    }
}
