<?php

namespace ValueObjects\Metrology\Contracts;

use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureInterface;

interface CalculatorInterface
{
    public function add(float $value): TemperatureInterface;

    public function subtract(float $value): TemperatureInterface;

    public function multiply(float $value): TemperatureInterface;

    public function divide(float $value): TemperatureInterface;

    public function mod(float $value): TemperatureInterface;
}
