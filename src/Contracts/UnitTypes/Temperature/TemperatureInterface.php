<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\MetrologyInterface;

interface TemperatureInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(): TemperatureCalculatorInterface;

    public function compare(): TemperatureComparatorInterface;

    public function convert(): TemperatureConverterInterface;
}
