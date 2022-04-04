<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthInterface;
use ValueObjects\Metrology\UnitTypes\Length\Fermi\Fermi;
use ValueObjects\Metrology\UnitTypes\Length\Foot\Foot;
use ValueObjects\Metrology\UnitTypes\Length\Inch\Inch;
use ValueObjects\Metrology\UnitTypes\Length\Inch\Microinch;
use ValueObjects\Metrology\UnitTypes\Length\LightYear\LightYear;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Attometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Centimeter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Decameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Decimeter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Exameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Femtometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Gigameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Hectometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Kilometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Megameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Meter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Micrometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Millimeter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Nanometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Petameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Picometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Terameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Yoctometer;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Yottameter;
use ValueObjects\Metrology\UnitTypes\Length\Meter\Zettameter;
use ValueObjects\Metrology\UnitTypes\Length\Micron\Micron;
use ValueObjects\Metrology\UnitTypes\Length\Mil\Mil;
use ValueObjects\Metrology\UnitTypes\Length\Mile\Mile;
use ValueObjects\Metrology\UnitTypes\Length\Parsec\Kiloparsec;
use ValueObjects\Metrology\UnitTypes\Length\Parsec\Megaparsec;
use ValueObjects\Metrology\UnitTypes\Length\Parsec\Parsec;
use ValueObjects\Metrology\UnitTypes\Length\Yard\Kiloyard;
use ValueObjects\Metrology\UnitTypes\Length\Yard\Yard;

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

    public function toMicron(): Micron
    {
        if ($this->from instanceof Micron) {
            return new Micron($this->from->getValue());
        }
        return new Micron($this::convert($this->from, Micron::class));
    }

    public function toMegaparsec(): Megaparsec
    {
        if ($this->from instanceof Megaparsec) {
            return new Megaparsec($this->from->getValue());
        }

        return new Megaparsec($this::convert($this->from, Megaparsec::class));
    }

    public function toKiloparsec(): Kiloparsec
    {
        if ($this->from instanceof Kiloparsec) {
            return new Kiloparsec($this->from->getValue());
        }

        return new Kiloparsec($this::convert($this->from, Kiloparsec::class));
    }

    public function toParsec(): Parsec
    {
        if ($this->from instanceof Parsec) {
            return new Parsec($this->from->getValue());
        }

        return new Parsec($this::convert($this->from, Parsec::class));
    }

    public function toKiloyard(): Kiloyard
    {
        if ($this->from instanceof Kiloyard) {
            return new Kiloyard($this->from->getValue());
        }

        return new Kiloyard($this::convert($this->from, Kiloyard::class));
    }

    public function toYard(): Yard
    {
        if ($this->from instanceof Yard) {
            return new Yard($this->from->getValue());
        }

        return new Yard($this::convert($this->from, Yard::class));
    }

    public function toMil(): Mil
    {
        if ($this->from instanceof Mil) {
            return new Mil($this->from->getValue());
        }

        return new Mil($this::convert($this->from, Mil::class));
    }

    public function toMile(): Mile
    {
        if ($this->from instanceof Mile) {
            return new Mile($this->from->getValue());
        }

        return new Mile($this::convert($this->from, Mile::class));
    }

    public function toMicroinch(): Microinch
    {
        if ($this->from instanceof Microinch) {
            return new Microinch($this->from->getValue());
        }

        return new Microinch($this::convert($this->from, Microinch::class));
    }

    public function toInch(): Inch
    {
        if ($this->from instanceof Inch) {
            return new Inch($this->from->getValue());
        }

        return new Inch($this::convert($this->from, Inch::class));
    }

    public function toLightYear(): LightYear
    {
        if ($this->from instanceof LightYear) {
            return new LightYear($this->from->getValue());
        }

        return new LightYear($this::convert($this->from, LightYear::class));
    }

    public function toFermi(): Fermi
    {
        if ($this->from instanceof Fermi) {
            return new Fermi($this->from->getValue());
        }

        return new Fermi($this::convert($this->from, Fermi::class));
    }

    public function toFoot(): Foot
    {
        if ($this->from instanceof Foot) {
            return new Foot($this->from->getValue());
        }

        return new Foot($this::convert($this->from, Foot::class));
    }
}
