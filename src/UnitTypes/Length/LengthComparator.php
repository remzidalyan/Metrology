<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\UnitTypes\Length\{LengthComparatorInterface, LengthInterface};

class LengthComparator implements LengthComparatorInterface
{
    protected LengthInterface $unit;

    public function __construct(LengthInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function max(LengthInterface ...$units): LengthInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toCelsius()->getValue();
        }

        $maxItem = max($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public static function min(LengthInterface ...$units): LengthInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toMeter()->getValue();
        }

        $maxItem = min($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public function equals(LengthInterface $unit): bool
    {
        return $this->unit->getValue() === $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThan(LengthInterface $unit): bool
    {
        return $this->unit->getValue() > $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThanOrEqual(LengthInterface $unit): bool
    {
        return $this->unit->getValue() >= $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThan(LengthInterface $unit): bool
    {
        return $this->unit->getValue() < $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThanOrEqual(LengthInterface $unit): bool
    {
        return $this->unit->getValue() <= $unit->convert()->convertTo($this->unit)->getValue();
    }
}
