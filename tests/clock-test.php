<?php

// Load dependencies
use PHPUnit\Framework\TestCase;

// Initialize ClockTests as a TestCase
class ClockTests extends TestCase
{
    private $clock;

    // Initialize a Clock object
    protected function setUp()
    {
        $this->clock = new Clock();
    }

    // Unset Clock object upon test completion
    protected function tearDown()
    {
        $this->clock = NULL;
    }

    // First test - should return "I am a clock"
    public function testIdentity()
    {
        $result = $this->clock->whatAmI();
        $this->assertEquals("I am a clock", $result);
    }

    // countBells test 1
    // INPUT $startTime = '2:00'; $endTime = '3:00'; OUTPUT 5
    public function testcountBells1()
    {
        $startTime = '2:00';
        $endTime = '3:00';
        $expected = 5;
        $actual = $this->clock->countBells($startTime, $endTime);
        $this->assertEquals($expected, $actual);
    }
}

?>
