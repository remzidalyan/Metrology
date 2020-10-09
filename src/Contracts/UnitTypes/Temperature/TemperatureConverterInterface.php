<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\ConverterInterface;

interface TemperatureConverterInterface extends ConverterInterface
{
    public function __construct(TemperatureInterface $unit);

    public function convertTo(TemperatureInterface $unit): TemperatureInterface;

    public function toCelsius(): TemperatureInterface;

    public function toFahrenheit(): TemperatureInterface;

    public function toKelvin(): TemperatureInterface;

    public function toRankine(): TemperatureInterface;

    public function toReaumur(): TemperatureInterface;
}
