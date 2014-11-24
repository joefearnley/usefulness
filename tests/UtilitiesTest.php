<?php

class UtilitiesTest extends PHPUnit_Framework_TestCase
{

    private $date = null;

    public function setUp()
    {
        date_default_timezone_set('America/New_York');
        $this->$date = '2014-12-25 19:16:36';
    }

    public function testDatetimeFormat()
    {
        $this->assertEquals('2014-12-25', Utilities::datetimeFormat($this->date));
    }

    public function testDatetimeFormatNoDate()
    {
        $this->assertEquals('19:16:36', Utilities::datetimeFormatNoDate($this->date));
    }

    public function testDatetimeFormatNoTime()
    {
        $this->assertEquals('2014/12/25', Utilities::datetimeFormatNoTime($this->date));
    }
}
