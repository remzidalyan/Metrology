<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthInterface;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Attometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Centimeter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Decameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Decimeter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Exameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Femtometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Gigameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Hectometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Kilometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Megameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Meter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Micrometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Millimeter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Nanometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Petameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Picometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Terameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Yoctometer;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Yottameter;
use ValueObjects\Metrology\UnitTypes\Length\FormulatedLength\Zettameter;

class LengthConverter implements LengthConverterInterface
{
    protected LengthInterface $from;

    public function __construct(LengthInterface $from)
    {
        $this->from = $from;
    }

    public function convertTo(LengthInterface $unit): LengthInterface
    {
        return $this::{'to' . $unit::getValueObjectName()}();
    }

    public function toMeter(): Meter
    {
        if ($this->from instanceof Meter) {
            return new Meter($this->from->getValue());
        }

        return new Meter($this::convert($this->from, Meter::class));
    }

    private static function convert(LengthInterface $from, string $to): float
    {
        $value = $from->getValue();
        return $value * pow(10, $from::EXPONENT - $to::EXPONENT);
    }

    public function toYottameter(): Yottameter
    {
        if ($this->from instanceof Meter) {
            return new Yottameter($this->from->getValue());
        }

        return new Yottameter($this::convert($this->from, Yottameter::class));
    }

    public function toZettameter(): Zettameter
    {
        if ($this->from instanceof Zettameter) {
            return new Zettameter($this->from->getValue());
        }

        return new Zettameter($this::convert($this->from, Zettameter::class));
    }

    public function toExameter(): Exameter
    {
        if ($this->from instanceof Exameter) {
            return new Exameter($this->from->getValue());
        }

        return new Exameter($this::convert($this->from, Exameter::class));
    }

    public function toPetameter(): Petameter
    {
        if ($this->from instanceof Petameter) {
            return new Petameter($this->from->getValue());
        }

        return new Petameter($this::convert($this->from, Petameter::class));
    }

    public function toTerameter(): Terameter
    {
        if ($this->from instanceof Terameter) {
            return new Terameter($this->from->getValue());
        }

        return new Terameter($this::convert($this->from, Terameter::class));
    }

    public function toGigameter(): Gigameter
    {
        if ($this->from instanceof Gigameter) {
            return new Gigameter($this->from->getValue());
        }

        return new Gigameter($this::convert($this->from, Gigameter::class));
    }

    public function toMegameter(): Megameter
    {
        if ($this->from instanceof Megameter) {
            return new Megameter($this->from->getValue());
        }

        return new Megameter($this::convert($this->from, Megameter::class));
    }

    public function toKilometer(): Kilometer
    {
        if ($this->from instanceof Kilometer) {
            return new Kilometer($this->from->getValue());
        }

        return new Kilometer($this::convert($this->from, Kilometer::class));
    }

    public function toHectometer(): Hectometer
    {
        if ($this->from instanceof Hectometer) {
            return new Hectometer($this->from->getValue());
        }

        return new Hectometer($this::convert($this->from, Hectometer::class));
    }

    public function toDecameter(): Decameter
    {
        if ($this->from instanceof Decameter) {
            return new Decameter($this->from->getValue());
        }

        return new Decameter($this::convert($this->from, Decameter::class));
    }

    public function toDecimeter(): Decimeter
    {
        if ($this->from instanceof Decimeter) {
            return new Decimeter($this->from->getValue());
        }

        return new Decimeter($this::convert($this->from, Decimeter::class));
    }

    public function toCentimeter(): Centimeter
    {
        if ($this->from instanceof Centimeter) {
            return new Centimeter($this->from->getValue());
        }

        return new Centimeter($this::convert($this->from, Centimeter::class));
    }

    public function toMillimeter(): Millimeter
    {
        if ($this->from instanceof Millimeter) {
            return new Millimeter($this->from->getValue());
        }

        return new Millimeter($this::convert($this->from, Millimeter::class));
    }

    public function toMicrometer(): Micrometer
    {
        if ($this->from instanceof Micrometer) {
            return new Micrometer($this->from->getValue());
        }

        return new Micrometer($this::convert($this->from, Micrometer::class));
    }

    public function toNanometer(): Nanometer
    {
        if ($this->from instanceof Nanometer) {
            return new Nanometer($this->from->getValue());
        }

        return new Nanometer($this::convert($this->from, Nanometer::class));
    }

    public function toPicometer(): Picometer
    {
        if ($this->from instanceof Picometer) {
            return new Picometer($this->from->getValue());
        }

        return new Picometer($this::convert($this->from, Picometer::class));
    }

    public function toFemtometer(): Femtometer
    {
        if ($this->from instanceof Femtometer) {
            return new Femtometer($this->from->getValue());
        }

        return new Femtometer($this::convert($this->from, Femtometer::class));
    }

    public function toAttometer(): Attometer
    {
        if ($this->from instanceof Attometer) {
            return new Attometer($this->from->getValue());
        }

        return new Attometer($this::convert($this->from, Attometer::class));
    }

    public function toYoctometer(): Yoctometer
    {
        if ($this->from instanceof Yoctometer) {
            return new Yoctometer($this->from->getValue());
        }

        return new Yoctometer($this::convert($this->from, Yoctometer::class));
    }
}
