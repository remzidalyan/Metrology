<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\{TemperatureComparatorInterface, TemperatureInterface};

class TemperatureComparator implements TemperatureComparatorInterface
{
    protected TemperatureInterface $unit;

    public function __construct(TemperatureInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function max(TemperatureInterface ...$units): TemperatureInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toCelsius()->getValue();
        }

        $maxItem = max($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public static function min(TemperatureInterface ...$units): TemperatureInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toCelsius()->getValue();
        }

        $maxItem = min($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public function equals(TemperatureInterface $unit): bool
    {
        return $this->unit->getValue() === $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThan(TemperatureInterface $unit): bool
    {
        return $this->unit->getValue() > $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThanOrEqual(TemperatureInterface $unit): bool
    {
        return $this->unit->getValue() >= $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThan(TemperatureInterface $unit): bool
    {
        return $this->unit->getValue() < $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThanOrEqual(TemperatureInterface $unit): bool
    {
        return $this->unit->getValue() <= $unit->convert()->convertTo($this->unit)->getValue();
    }
}
