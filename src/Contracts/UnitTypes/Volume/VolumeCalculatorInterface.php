<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\CalculatorInterface;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Liter;

interface VolumeCalculatorInterface extends CalculatorInterface
{
    public function __construct(VolumeInterface $unit);

    public static function avg(VolumeInterface ...$units): Liter;

    public function add(float $value): VolumeInterface;

    public function subtract(float $value): VolumeInterface;

    public function multiply(float $value): VolumeInterface;

    public function divide(float $value): VolumeInterface;

    public function mod(float $value): VolumeInterface;

    public function addUnit(VolumeInterface ...$unit): VolumeInterface;

    public function subtractUnit(VolumeInterface ...$unit): VolumeInterface;
}
