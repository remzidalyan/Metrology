<?php

namespace ValueObjects\Metrology\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeInterface;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Liter;

class VolumeCalculator implements VolumeCalculatorInterface
{
    protected VolumeInterface $unit;

    public function __construct(VolumeInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function avg(VolumeInterface ...$units): Liter
    {
        $sum = 0;
        foreach ($units as $unit) {
            $sum += $unit->convert()->toLiter()->getValue();
        }

        $avg = $sum / count($units);

        return new Liter($avg);
    }

    public function multiply(float $value): VolumeInterface
    {
        return $this->unit->setValue($this->unit->getValue() * $value);
    }

    public function divide(float $value): VolumeInterface
    {
        return $this->unit->setValue($this->unit->getValue() / $value);
    }

    public function mod(float $value): VolumeInterface
    {
        return $this->unit->setValue($this->unit->getValue() % $value);
    }

    public function addUnit(VolumeInterface ...$units): VolumeInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->add($total);

        return $this->unit;
    }

    public function add(float $value): VolumeInterface
    {
        return $this->unit->setValue($this->unit->getValue() + $value);
    }

    public function subtractUnit(VolumeInterface ...$units): VolumeInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->subtract($total);

        return $this->unit;
    }

    public function subtract(float $value): VolumeInterface
    {
        return $this->unit->setValue($this->unit->getValue() - $value);
    }
}
