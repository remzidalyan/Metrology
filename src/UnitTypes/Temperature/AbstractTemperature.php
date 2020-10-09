<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use ValueObjects\Metrology\AbstractMetrology;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureComparatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureInterface;

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
