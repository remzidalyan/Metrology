<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\CalculatorInterface;
use ValueObjects\Metrology\UnitTypes\Temperature\Units\Celsius;

interface TemperatureCalculatorInterface extends CalculatorInterface
{
    public function __construct(TemperatureInterface $unit);


    public function add(float $value): TemperatureInterface;

    public function subtract(float $value): TemperatureInterface;

    public function multiply(float $value): TemperatureInterface;

    public function divide(float $value): TemperatureInterface;

    public function mod(float $value): TemperatureInterface;


    public function addUnit(TemperatureInterface ...$unit): TemperatureInterface;

    public function subtractUnit(TemperatureInterface ...$unit): TemperatureInterface;


    public static function avg(TemperatureInterface ...$units): Celsius;
}
