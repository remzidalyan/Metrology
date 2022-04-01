<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\ConverterInterface;
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
}
