<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\CalculatorInterface;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Gram;

interface WeightCalculatorInterface extends CalculatorInterface
{
    public function __construct(WeightInterface $unit);

    public static function avg(WeightInterface ...$units): Gram;

    public function add(float $value): WeightInterface;

    public function subtract(float $value): WeightInterface;

    public function multiply(float $value): WeightInterface;

    public function divide(float $value): WeightInterface;

    public function mod(float $value): WeightInterface;

    public function addUnit(WeightInterface ...$unit): WeightInterface;

    public function subtractUnit(WeightInterface ...$unit): WeightInterface;
}
