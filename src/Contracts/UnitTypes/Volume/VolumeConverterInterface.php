<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\ConverterInterface;
use ValueObjects\Metrology\UnitTypes\Volume\Cubic\CubicFoot;
use ValueObjects\Metrology\UnitTypes\Volume\Cubic\CubicInch;
use ValueObjects\Metrology\UnitTypes\Volume\Cubic\CubicMile;
use ValueObjects\Metrology\UnitTypes\Volume\Cubic\CubicYard;
use ValueObjects\Metrology\UnitTypes\Volume\CubicMeter\CubicCentimeter;
use ValueObjects\Metrology\UnitTypes\Volume\CubicMeter\CubicDecimeter;
use ValueObjects\Metrology\UnitTypes\Volume\CubicMeter\CubicKilometer;
use ValueObjects\Metrology\UnitTypes\Volume\CubicMeter\CubicMeter;
use ValueObjects\Metrology\UnitTypes\Volume\CubicMeter\CubicMillimeter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Attoliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Centiliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Decaliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Deciliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Exaliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Femtoliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Gigaliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Hectoliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Kiloliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Liter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Megaliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Microliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Milliliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Nanoliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Petaliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Picoliter;
use ValueObjects\Metrology\UnitTypes\Volume\Liter\Teraliter;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKBarrel;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKCup;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKDessertspoon;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKFluidOunce;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKGallon;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKGill;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKMinim;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKPint;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKQuart;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKTablespoon;
use ValueObjects\Metrology\UnitTypes\Volume\UK\UKTeaspoon;
use ValueObjects\Metrology\UnitTypes\Volume\US\USBarrel;
use ValueObjects\Metrology\UnitTypes\Volume\US\USCup;
use ValueObjects\Metrology\UnitTypes\Volume\US\USDessertspoon;
use ValueObjects\Metrology\UnitTypes\Volume\US\USFluidOunce;
use ValueObjects\Metrology\UnitTypes\Volume\US\USGallon;
use ValueObjects\Metrology\UnitTypes\Volume\US\USGill;
use ValueObjects\Metrology\UnitTypes\Volume\US\USMinim;
use ValueObjects\Metrology\UnitTypes\Volume\US\USPint;
use ValueObjects\Metrology\UnitTypes\Volume\US\USQuart;
use ValueObjects\Metrology\UnitTypes\Volume\US\USTablespoon;
use ValueObjects\Metrology\UnitTypes\Volume\US\USTeaspoon;

interface VolumeConverterInterface extends ConverterInterface
{
    public function __construct(VolumeInterface $unit);

    public function convertTo(VolumeInterface $unit): VolumeInterface;


    public function toExaliter(): Exaliter;

    public function toPetaliter(): Petaliter;

    public function toTeraliter(): Teraliter;

    public function toGigaliter(): Gigaliter;

    public function toMegaliter(): Megaliter;

    public function toKiloliter(): Kiloliter;

    public function toHectoliter(): Hectoliter;

    public function toDecaliter(): Decaliter;

    public function toLiter(): Liter;

    public function toDeciliter(): Deciliter;

    public function toCentiliter(): Centiliter;

    public function toMilliliter(): Milliliter;

    public function toMicroliter(): Microliter;

    public function toNanoliter(): Nanoliter;

    public function toPicoliter(): Picoliter;

    public function toFemtoliter(): Femtoliter;

    public function toAttoliter(): Attoliter;


    public function toCubicFoot(): CubicFoot;

    public function toCubicInch(): CubicInch;

    public function toCubicMile(): CubicMile;

    public function toCubicYard(): CubicYard;


    public function toCubicMeter(): CubicMeter;

    public function toCubicCentimeter(): CubicCentimeter;

    public function toCubicDecimeter(): CubicDecimeter;

    public function toCubicKilometer(): CubicKilometer;

    public function toCubicMillimeter(): CubicMillimeter;


    public function toUKBarrel(): UKBarrel;

    public function toUKCup(): UKCup;

    public function toUKDessertspoon(): UKDessertspoon;

    public function toUKFluidOunce(): UKFluidOunce;

    public function toUKGallon(): UKGallon;

    public function toUKGill(): UKGill;

    public function toUKMinim(): UKMinim;

    public function toUKPint(): UKPint;

    public function toUKQuart(): UKQuart;

    public function toUKTablespoon(): UKTablespoon;

    public function toUKTeaspoon(): UKTeaspoon;

    public function toUSBarrel(): USBarrel;

    public function toUSCup(): USCup;

    public function toUSDessertspoon(): USDessertspoon;

    public function toUSFluidOunce(): USFluidOunce;

    public function toUSGallon(): USGallon;

    public function toUSGill(): USGill;

    public function toUSMinim(): USMinim;

    public function toUSPint(): USPint;

    public function toUSQuart(): USQuart;

    public function toUSTablespoon(): USTablespoon;

    public function toUSTeaspoon(): USTeaspoon;
}
