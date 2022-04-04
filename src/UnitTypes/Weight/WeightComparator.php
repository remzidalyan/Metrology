<?php

namespace ValueObjects\Metrology\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\UnitTypes\Weight\{WeightComparatorInterface, WeightInterface};

class WeightComparator implements WeightComparatorInterface
{
    protected WeightInterface $unit;

    public function __construct(WeightInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function max(WeightInterface ...$units): WeightInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toGram()->getValue();
        }

        $maxItem = max($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public static function min(WeightInterface ...$units): WeightInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toGram()->getValue();
        }

        $maxItem = min($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public function equals(WeightInterface $unit): bool
    {
        return $this->unit->getValue() === $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThan(WeightInterface $unit): bool
    {
        return $this->unit->getValue() > $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThanOrEqual(WeightInterface $unit): bool
    {
        return $this->unit->getValue() >= $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThan(WeightInterface $unit): bool
    {
        return $this->unit->getValue() < $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThanOrEqual(WeightInterface $unit): bool
    {
        return $this->unit->getValue() <= $unit->convert()->convertTo($this->unit)->getValue();
    }
}
