<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\ComparatorInterface;
use ValueObjects\Metrology\UnitTypes\Temperature\Units\Celsius;

interface TemperatureComparatorInterface extends ComparatorInterface
{
    public function __construct(TemperatureInterface $unit);


    public function equals(TemperatureInterface $unit): bool;

    public function greaterThan(TemperatureInterface $unit): bool;

    public function greaterThanOrEqual(TemperatureInterface $unit): bool;

    public function lessThan(TemperatureInterface $unit): bool;

    public function lessThanOrEqual(TemperatureInterface $unit): bool;


    public static function min(TemperatureInterface ...$units): TemperatureInterface;

    public static function max(TemperatureInterface ...$units): TemperatureInterface;
}
