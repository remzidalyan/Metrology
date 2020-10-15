<?php

namespace ValueObjects\Metrology\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\DigitalInformationCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\DigitalInformationInterface;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Bit;

class DigitalInformationCalculator implements DigitalInformationCalculatorInterface
{
    protected DigitalInformationInterface $unit;

    public function __construct(DigitalInformationInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function avg(DigitalInformationInterface ...$units): Bit
    {
        $sum = 0;
        foreach ($units as $unit) {
            $sum += $unit->convert()->toBit()->getValue();
        }

        $avg = $sum / count($units);

        return new Bit($avg);
    }

    public function add(float $value): DigitalInformationInterface
    {
        return $this->unit->setValue($this->unit->getValue() + $value);
    }

    public function subtract(float $value): DigitalInformationInterface
    {
        return $this->unit->setValue($this->unit->getValue() - $value);
    }

    public function multiply(float $value): DigitalInformationInterface
    {
        return $this->unit->setValue($this->unit->getValue() * $value);
    }

    public function divide(float $value): DigitalInformationInterface
    {
        return $this->unit->setValue($this->unit->getValue() / $value);
    }

    public function mod(float $value): DigitalInformationInterface
    {
        return $this->unit->setValue($this->unit->getValue() % $value);
    }

    public function addUnit(DigitalInformationInterface ...$units): DigitalInformationInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->add($total);

        return $this->unit;
    }

    public function subtractUnit(DigitalInformationInterface ...$units): DigitalInformationInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->subtract($total);

        return $this->unit;
    }
}
