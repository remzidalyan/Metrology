<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\ConverterInterface;
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

interface LengthConverterInterface extends ConverterInterface
{
    public function __construct(LengthInterface $unit);

    public function convertTo(LengthInterface $unit): LengthInterface;

    public function toYottameter(): Yottameter;

    public function toZettameter(): Zettameter;

    public function toExameter(): Exameter;

    public function toPetameter(): Petameter;

    public function toTerameter(): Terameter;

    public function toGigameter(): Gigameter;

    public function toMegameter(): Megameter;

    public function toKilometer(): Kilometer;

    public function toHectometer(): Hectometer;

    public function toDecameter(): Decameter;

    public function toMeter(): Meter;

    public function toDecimeter(): Decimeter;

    public function toCentimeter(): Centimeter;

    public function toMillimeter(): Millimeter;

    public function toMicrometer(): Micrometer;

    public function toNanometer(): Nanometer;

    public function toPicometer(): Picometer;

    public function toFemtometer(): Femtometer;

    public function toAttometer(): Attometer;

    public function toYoctometer(): Yoctometer;

    public function toMicron(): Micron;

    public function toMegaparsec(): Megaparsec;

    public function toKiloparsec(): Kiloparsec;

    public function toParsec(): Parsec;

    public function toKiloyard(): Kiloyard;

    public function toYard(): Yard;

    public function toMil(): Mil;

    public function toMile(): Mile;

    public function toMicroinch(): Microinch;

    public function toInch(): Inch;

    public function toLightYear(): LightYear;

    public function toFermi(): Fermi;

    public function toFoot(): Foot;
}
