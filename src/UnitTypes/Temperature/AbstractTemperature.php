<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use ValueObjects\Metrology\AbstractMetrology;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\{
    TemperatureInterface, TemperatureCalculatorInterface, TemperatureComparatorInterface, TemperatureConverterInterface
};

abstract class AbstractTemperature extends AbstractMetrology implements TemperatureInterface
{
    public function calculate(): TemperatureCalculatorInterface
    {
        return new TemperatureCalculator($this);
    }

    public function compare(): TemperatureComparatorInterface
    {
        return new TemperatureComparator($this);
    }

    public function convert(): TemperatureConverterInterface
    {
        return new TemperatureConverter($this);
    }
}
