<?php

namespace VonByte\UnitConversions\Tests;

use PHPUnit\Framework\TestCase;
use VonByte\UnitConversions\Weight;

class WeightTest extends TestCase
{

    /**
     * @test
     */
    public function it_can_convert_kilogram_to_pounds()
    {
        $lbs = Weight::fromKilograms(100)->toLbs();
        $this->assertEquals(220.4623, $lbs);
    }
}
