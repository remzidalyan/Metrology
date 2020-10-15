<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\ConverterInterface;
use ValueObjects\Metrology\UnitTypes\Temperature\Units\{Celsius, Fahrenheit, Kelvin, Rankine, Reaumur};

interface TemperatureConverterInterface extends ConverterInterface
{
    public function __construct(TemperatureInterface $unit);

    public function convertTo(TemperatureInterface $unit): TemperatureInterface;

    public function toCelsius(): Celsius;

    public function toFahrenheit(): Fahrenheit;

    public function toKelvin(): Kelvin;

    public function toRankine(): Rankine;

    public function toReaumur(): Reaumur;
}
