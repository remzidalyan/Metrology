<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureInterface;
use ValueObjects\Metrology\UnitTypes\Temperature\Units\Celsius;

class TemperatureCalculator implements TemperatureCalculatorInterface
{
    protected TemperatureInterface $unit;

    public function __construct(TemperatureInterface $unit)
    {
        $this->unit = $unit;
    }

    public static function avg(TemperatureInterface ...$units): Celsius
    {
        $sum = 0;
        foreach ($units as $unit) {
            $sum += $unit->convert()->toCelsius()->getValue();
        }

        $avg = $sum / count($units);

        return new Celsius($avg);
    }

    public function add(float $value): TemperatureInterface
    {
        return $this->unit->setValue($this->unit->getValue() + $value);
    }

    public function subtract(float $value): TemperatureInterface
    {
        return $this->unit->setValue($this->unit->getValue() - $value);
    }

    public function multiply(float $value): TemperatureInterface
    {
        return $this->unit->setValue($this->unit->getValue() * $value);
    }

    public function divide(float $value): TemperatureInterface
    {
        return $this->unit->setValue($this->unit->getValue() / $value);
    }

    public function mod(float $value): TemperatureInterface
    {
        return $this->unit->setValue($this->unit->getValue() % $value);
    }

    public function addUnit(TemperatureInterface ...$units): TemperatureInterface
    {
        $total = 0;

        foreach ($units as $unit) {
            if (get_class($unit) === Celsius::class) {
                $total += $unit->getValue();
            } else {
                $total += $unit->convert()->toCelsius()->getValue();
            }
        }

        $total = (new Celsius($total))->convert()->convertTo($this->unit)->getValue();
        $this->add($total);

        return $this->unit;
    }

    public function subtractUnit(TemperatureInterface ...$units): TemperatureInterface
    {
        $total = 0;

        foreach ($units as $unit) {
            if (get_class($unit) === Celsius::class) {
                $total += $unit->getValue();
            } else {
                $total += $unit->convert()->toCelsius()->getValue();
            }
        }

        $total = (new Celsius($total))->convert()->convertTo($this->unit)->getValue();
        $this->subtract($total);

        return $this->unit;
    }
}
