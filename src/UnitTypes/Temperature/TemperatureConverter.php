<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureInterface;
use ValueObjects\Metrology\UnitTypes\Temperature\Units\{
    Celsius, Fahrenheit, Kelvin, Rankine, Reaumur
};

class TemperatureConverter implements TemperatureConverterInterface
{
    private static array $exchangeRates = [
        'Celsius' => [
            'Fahrenheit' => '%value% * 1.8 + 32',
            'Kelvin' => '%value% + 273.15',
            'Rankine' => '%value% * 1.8 + 32 + 459.67',
            'Reaumur' => '%value% * 0.8',
        ],
        'Fahrenheit' => [
            'Celsius' => '(%value% - 32) / 1.8',
            'Kelvin' => '(%value% - 32) / 1.8',
            'Rankine' => '%value% + 459.67',
            'Reaumur' => '(%value% - 32) / 2.25)',
        ],
        'Kelvin' => [
            'Celsius' => '%value% - 273.15',
            'Fahrenheit' => '%value% * 1.8 - 459.67',
            'Rankine' => '%value% * 1.8',
            'Reaumur' => '(%value% - 273.15) * 0.8',
        ],
        'Rankine' => [
            'Celsius' => '(%value% - 32 - 459.67) / 1.8',
            'Fahrenheit' => '%value% - 459.67',
            'Kelvin' => '%value% / 1.8',
            'Reaumur' => '%value% - 32 - 459.67) / 2.25',
        ],
        'Reaumur' => [
            'Celsius' => '%value% * 1.25',
            'Fahrenheit' => '%value% * 2.25 + 32',
            'Kelvin' => '%value% * 1.25 + 273.15',
            'Rankine' => '%value% * 2.25 + 32 + 459.67',
        ]
    ];

    protected TemperatureInterface $from;


    public function __construct(TemperatureInterface $from)
    {
        $this->from = $from;
    }

    public static function getExchangeRates(): object
    {
        return (object)static::$exchangeRates;
    }

    private static function convert(TemperatureInterface $from, string $to): float
    {
        $formula = str_replace('%value%', $from->getValue(), static::getExchangeRates()->{$from::getValueObjectName()}[$to::getValueObjectName()]);
        return eval('return ' . $formula . ';');
    }

    public function convertTo(TemperatureInterface $unit): TemperatureInterface
    {
        return $this::{'to' . $unit::getValueObjectName()}();
    }

    public function toCelsius(): TemperatureInterface
    {
        if ($this->from instanceof Celsius) {
            return new Celsius($this->from->getValue());
        }

        return new Celsius($this::convert($this->from, Celsius::class));
    }

    public function toFahrenheit(): TemperatureInterface
    {
        if ($this->from instanceof Fahrenheit) {
            return new Fahrenheit($this->from->getValue());
        }

        return new Fahrenheit($this::convert($this->from, Fahrenheit::class));
    }

    public function toKelvin(): TemperatureInterface
    {
        if ($this->from instanceof Kelvin) {
            return new Kelvin($this->from->getValue());
        }

        return new Kelvin($this::convert($this->from, Kelvin::class));
    }

    public function toRankine(): TemperatureInterface
    {
        if ($this->from instanceof Rankine) {
            return new Rankine($this->from->getValue());
        }

        return new Rankine($this::convert($this->from, Rankine::class));
    }

    public function toReaumur(): TemperatureInterface
    {
        if ($this->from instanceof Reaumur) {
            return new Reaumur($this->from->getValue());
        }

        return new Reaumur($this::convert($this->from, Reaumur::class));
    }
}
