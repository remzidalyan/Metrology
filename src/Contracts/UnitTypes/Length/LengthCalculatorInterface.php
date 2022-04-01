<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\CalculatorInterface;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Meter;

interface LengthCalculatorInterface extends CalculatorInterface
{
    public function __construct(LengthInterface $unit);

    public static function avg(LengthInterface ...$units): Meter;

    public function add(float $value): LengthInterface;

    public function subtract(float $value): LengthInterface;

    public function multiply(float $value): LengthInterface;

    public function divide(float $value): LengthInterface;

    public function mod(float $value): LengthInterface;

    public function addUnit(LengthInterface ...$unit): LengthInterface;

    public function subtractUnit(LengthInterface ...$unit): LengthInterface;
}
