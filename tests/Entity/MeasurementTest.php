<?php

namespace App\Tests\Entity;

use App\Entity\Measurement;
use PHPUnit\Framework\TestCase;

class MeasurementTest extends TestCase
{
    public function testGetFahrenheit(): void
    {
        $measurement = new Measurement();

        $measurement->setCelsius('0');
        $this->assertEquals(32, $measurement->getFahrenheit());
        $measurement->setCelsius('-100');
        $this->assertEquals(-148, $measurement->getFahrenheit());
        $measurement->setCelsius('100');
        $this->assertEquals(212, $measurement->getFahrenheit());
    }
}
