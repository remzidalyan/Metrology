<?php

namespace ValueObjects\Metrology\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\{DigitalInformationComparatorInterface, DigitalInformationInterface};

class DigitalInformationComparator implements DigitalInformationComparatorInterface
{
    protected DigitalInformationInterface $unit;

    public function __construct(DigitalInformationInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function max(DigitalInformationInterface ...$units): DigitalInformationInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toCelsius()->getValue();
        }

        $maxItem = max($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public static function min(DigitalInformationInterface ...$units): DigitalInformationInterface
    {
        $items = [];
        foreach ($units as $unit) {
            $items[] = $unit->convert()->toCelsius()->getValue();
        }

        $maxItem = min($items);
        $maxValKeys = array_keys($items, $maxItem);

        return $units[$maxValKeys[0]];
    }

    public function equals(DigitalInformationInterface $unit): bool
    {
        return $this->unit->getValue() === $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThan(DigitalInformationInterface $unit): bool
    {
        return $this->unit->getValue() > $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function greaterThanOrEqual(DigitalInformationInterface $unit): bool
    {
        return $this->unit->getValue() >= $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThan(DigitalInformationInterface $unit): bool
    {
        return $this->unit->getValue() < $unit->convert()->convertTo($this->unit)->getValue();
    }

    public function lessThanOrEqual(DigitalInformationInterface $unit): bool
    {
        return $this->unit->getValue() <= $unit->convert()->convertTo($this->unit)->getValue();
    }
}
