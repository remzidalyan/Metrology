<?php

namespace ValueObjects\Metrology\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightInterface;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Gram;

class WeightCalculator implements WeightCalculatorInterface
{
    protected WeightInterface $unit;

    public function __construct(WeightInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function avg(WeightInterface ...$units): Gram
    {
        $sum = 0;
        foreach ($units as $unit) {
            $sum += $unit->convert()->toGram()->getValue();
        }

        $avg = $sum / count($units);

        return new Gram($avg);
    }

    public function multiply(float $value): WeightInterface
    {
        return $this->unit->setValue($this->unit->getValue() * $value);
    }

    public function divide(float $value): WeightInterface
    {
        return $this->unit->setValue($this->unit->getValue() / $value);
    }

    public function mod(float $value): WeightInterface
    {
        return $this->unit->setValue($this->unit->getValue() % $value);
    }

    public function addUnit(WeightInterface ...$units): WeightInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->add($total);

        return $this->unit;
    }

    public function add(float $value): WeightInterface
    {
        return $this->unit->setValue($this->unit->getValue() + $value);
    }

    public function subtractUnit(WeightInterface ...$units): WeightInterface
    {
        $total = 0;
        foreach ($units as $unit) {
            $total = $unit->convert()->convertTo($this->unit)->getValue();
        }

        $this->subtract($total);

        return $this->unit;
    }

    public function subtract(float $value): WeightInterface
    {
        return $this->unit->setValue($this->unit->getValue() - $value);
    }
}
