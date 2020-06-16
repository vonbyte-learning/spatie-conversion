<?php

namespace VonByte\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use VonByte\UnitConversions\Temperature;
use VonByte\UnitConversions\Weight;



class TemperatureTest extends TestCase
{

    /**
     * @test
     */
    public function it_can_convert_celcius_to_fahrenheit()
    {
        $fahrenheit = Temperature::forCelsius(100)->toFahrenheit();
        $this->assertEquals(212, $fahrenheit);
    }
}
