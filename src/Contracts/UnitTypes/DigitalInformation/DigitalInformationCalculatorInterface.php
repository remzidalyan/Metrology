<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\CalculatorInterface;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Bit;

interface DigitalInformationCalculatorInterface extends CalculatorInterface
{
    public function __construct(DigitalInformationInterface $unit);

    public static function avg(DigitalInformationInterface ...$units): Bit;

    public function add(float $value): DigitalInformationInterface;

    public function subtract(float $value): DigitalInformationInterface;

    public function multiply(float $value): DigitalInformationInterface;

    public function divide(float $value): DigitalInformationInterface;

    public function mod(float $value): DigitalInformationInterface;

    public function addUnit(DigitalInformationInterface ...$unit): DigitalInformationInterface;

    public function subtractUnit(DigitalInformationInterface ...$unit): DigitalInformationInterface;
}
