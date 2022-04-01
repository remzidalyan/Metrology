<?php

namespace ValueObjects\Metrology\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\UnitTypes\Volume\{VolumeComparatorInterface, VolumeInterface};

class VolumeComparator implements VolumeComparatorInterface
{
    protected VolumeInterface $unit;

    public function __construct(VolumeInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function max(VolumeInterface ...$units): VolumeInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toLiter()->getValue();
        }

        $maxItem = max($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public static function min(VolumeInterface ...$units): VolumeInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toLiter()->getValue();
        }

        $maxItem = min($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public function equals(VolumeInterface $unit): bool
    {
        return $this->unit->getValue() === $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThan(VolumeInterface $unit): bool
    {
        return $this->unit->getValue() > $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThanOrEqual(VolumeInterface $unit): bool
    {
        return $this->unit->getValue() >= $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThan(VolumeInterface $unit): bool
    {
        return $this->unit->getValue() < $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThanOrEqual(VolumeInterface $unit): bool
    {
        return $this->unit->getValue() <= $unit->convert()->convertTo($this->unit)->getValue();
    }
}
