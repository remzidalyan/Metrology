<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthInterface;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Meter;

class LengthCalculator implements LengthCalculatorInterface
{
    protected LengthInterface $unit;

    public function __construct(LengthInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function avg(LengthInterface ...$units): Meter
    {
        $sum = 0;
        foreach ($units as $unit) {
            $sum += $unit->convert()->toMeter()->getValue();
        }

        $avg = $sum / count($units);

        return new Meter($avg);
    }

    public function multiply(float $value): LengthInterface
    {
        return $this->unit->setValue($this->unit->getValue() * $value);
    }

    public function divide(float $value): LengthInterface
    {
        return $this->unit->setValue($this->unit->getValue() / $value);
    }

    public function mod(float $value): LengthInterface
    {
        return $this->unit->setValue($this->unit->getValue() % $value);
    }

    public function addUnit(LengthInterface ...$units): LengthInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->add($total);

        return $this->unit;
    }

    public function add(float $value): LengthInterface
    {
        return $this->unit->setValue($this->unit->getValue() + $value);
    }

    public function subtractUnit(LengthInterface ...$units): LengthInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->subtract($total);

        return $this->unit;
    }

    public function subtract(float $value): LengthInterface
    {
        return $this->unit->setValue($this->unit->getValue() - $value);
    }
}
