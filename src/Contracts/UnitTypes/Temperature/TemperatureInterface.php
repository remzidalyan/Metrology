<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\MetrologyInterface;

interface TemperatureInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(TemperatureCalculatorInterface $calculator = null): TemperatureCalculatorInterface;

    public function compare(TemperatureComparatorInterface $comparator = null): TemperatureComparatorInterface;

    public function convert(TemperatureConverterInterface $converter = null): TemperatureConverterInterface;

    public function observer(TemperatureObserverManagerInterface $observerManager = null): TemperatureObserverManagerInterface;
}
