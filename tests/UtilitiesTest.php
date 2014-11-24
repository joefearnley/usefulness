<?php

class UtilitiesTest extends PHPUnit_Framework_TestCase
{

    /**
     * Date used for tests
     * @var String $date
     */
    private $date = null;

    /**
     * Set timezone set and default date string.
     */
    public function setUp()
    {
        date_default_timezone_set('America/New_York');
        $this->date = '2014-12-25 01:00:00';
    }

    /**
     * Test default date format.
     */
    public function testDatetimeFormat()
    {
        $this->assertEquals('2014/12/25 01:00:00', Utilities::datetimeFormat($this->date));
    }

    /**
     * Test formatting a date string with only the time.
     */
    public function testDatetimeFormatNoDate()
    {
        $this->assertEquals('01:00:00', Utilities::datetimeFormatNoDate($this->date));
    }

    /**
     * Test formatting a date string with only the time.
     */
    public function testDatetimeFormatNoTime()
    {
        $this->assertEquals('2014/12/25', Utilities::datetimeFormatNoTime($this->date));
    }

    /**
     * Test that formatting works given a different format.
     */
    public function testDatetimeFormatWithDifferentDateFormat()
    {
        $this->assertEquals('2014/12/25', Utilities::datetimeFormatNoTime('2014-12-25'));
    }
}
