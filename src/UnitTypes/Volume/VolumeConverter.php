<?php

namespace ValueObjects\Metrology\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeInterface;
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

class VolumeConverter implements VolumeConverterInterface
{
    protected VolumeInterface $from;

    public function __construct(VolumeInterface $from)
    {
        $this->from = $from;
    }

    public function convertTo(VolumeInterface $unit): VolumeInterface
    {
        return $this::{'to' . $unit::getValueObjectName()}();
    }

    public function toLiter(): Liter
    {
        if ($this->from instanceof Liter) {
            return new Liter($this->from->getValue());
        }

        return new Liter($this::convert($this->from, Liter::class));
    }

    private static function convert(VolumeInterface $from, string $to): float
    {
        $value = $from->getValue();
        return $value * pow(10, $from::EXPONENT - $to::EXPONENT);
    }

    public function toExaliter(): Exaliter
    {
        if ($this->from instanceof Exaliter) {
            return new Exaliter($this->from->getValue());
        }

        return new Exaliter($this::convert($this->from, Exaliter::class));
    }

    public function toPetaliter(): Petaliter
    {
        if ($this->from instanceof Petaliter) {
            return new Petaliter($this->from->getValue());
        }

        return new Petaliter($this::convert($this->from, Petaliter::class));
    }

    public function toTeraliter(): Teraliter
    {
        if ($this->from instanceof Teraliter) {
            return new Teraliter($this->from->getValue());
        }

        return new Teraliter($this::convert($this->from, Teraliter::class));
    }

    public function toGigaliter(): Gigaliter
    {
        if ($this->from instanceof Gigaliter) {
            return new Gigaliter($this->from->getValue());
        }

        return new Gigaliter($this::convert($this->from, Gigaliter::class));
    }

    public function toMegaliter(): Megaliter
    {
        if ($this->from instanceof Megaliter) {
            return new Megaliter($this->from->getValue());
        }

        return new Megaliter($this::convert($this->from, Megaliter::class));
    }

    public function toKiloliter(): Kiloliter
    {
        if ($this->from instanceof Kiloliter) {
            return new Kiloliter($this->from->getValue());
        }

        return new Kiloliter($this::convert($this->from, Kiloliter::class));
    }

    public function toHectoliter(): Hectoliter
    {
        if ($this->from instanceof Hectoliter) {
            return new Hectoliter($this->from->getValue());
        }

        return new Hectoliter($this::convert($this->from, Hectoliter::class));
    }

    public function toDecaliter(): Decaliter
    {
        if ($this->from instanceof Decaliter) {
            return new Decaliter($this->from->getValue());
        }

        return new Decaliter($this::convert($this->from, Decaliter::class));
    }

    public function toDeciliter(): Deciliter
    {
        if ($this->from instanceof Deciliter) {
            return new Deciliter($this->from->getValue());
        }

        return new Deciliter($this::convert($this->from, Deciliter::class));
    }

    public function toCentiliter(): Centiliter
    {
        if ($this->from instanceof Centiliter) {
            return new Centiliter($this->from->getValue());
        }

        return new Centiliter($this::convert($this->from, Centiliter::class));
    }

    public function toMilliliter(): Milliliter
    {
        if ($this->from instanceof Milliliter) {
            return new Milliliter($this->from->getValue());
        }

        return new Milliliter($this::convert($this->from, Milliliter::class));
    }

    public function toMicroliter(): Microliter
    {
        if ($this->from instanceof Microliter) {
            return new Microliter($this->from->getValue());
        }

        return new Microliter($this::convert($this->from, Microliter::class));
    }

    public function toNanoliter(): Nanoliter
    {
        if ($this->from instanceof Nanoliter) {
            return new Nanoliter($this->from->getValue());
        }

        return new Nanoliter($this::convert($this->from, Nanoliter::class));
    }

    public function toPicoliter(): Picoliter
    {
        if ($this->from instanceof Picoliter) {
            return new Picoliter($this->from->getValue());
        }

        return new Picoliter($this::convert($this->from, Picoliter::class));
    }

    public function toFemtoliter(): Femtoliter
    {
        if ($this->from instanceof Femtoliter) {
            return new Femtoliter($this->from->getValue());
        }

        return new Femtoliter($this::convert($this->from, Femtoliter::class));
    }

    public function toAttoliter(): Attoliter
    {
        if ($this->from instanceof Attoliter) {
            return new Attoliter($this->from->getValue());
        }

        return new Attoliter($this::convert($this->from, Attoliter::class));
    }

    public function toCubicFoot(): CubicFoot
    {
        if ($this->from instanceof CubicFoot) {
            return new CubicFoot($this->from->getValue());
        }

        return new CubicFoot($this::convert($this->from, CubicFoot::class));
    }

    public function toCubicInch(): CubicInch
    {
        if ($this->from instanceof CubicInch) {
            return new CubicInch($this->from->getValue());
        }

        return new CubicInch($this::convert($this->from, CubicInch::class));
    }

    public function toCubicMile(): CubicMile
    {
        if ($this->from instanceof CubicMile) {
            return new CubicMile($this->from->getValue());
        }

        return new CubicMile($this::convert($this->from, CubicMile::class));
    }

    public function toCubicYard(): CubicYard
    {
        if ($this->from instanceof CubicYard) {
            return new CubicYard($this->from->getValue());
        }

        return new CubicYard($this::convert($this->from, CubicYard::class));
    }

    public function toCubicMeter(): CubicMeter
    {
        if ($this->from instanceof CubicMeter) {
            return new CubicMeter($this->from->getValue());
        }

        return new CubicMeter($this::convert($this->from, CubicMeter::class));
    }

    public function toCubicCentimeter(): CubicCentimeter
    {
        if ($this->from instanceof CubicCentimeter) {
            return new CubicCentimeter($this->from->getValue());
        }

        return new CubicCentimeter($this::convert($this->from, CubicCentimeter::class));
    }

    public function toCubicDecimeter(): CubicDecimeter
    {
        if ($this->from instanceof CubicDecimeter) {
            return new CubicDecimeter($this->from->getValue());
        }

        return new CubicDecimeter($this::convert($this->from, CubicDecimeter::class));
    }

    public function toCubicKilometer(): CubicKilometer
    {
        if ($this->from instanceof CubicKilometer) {
            return new CubicKilometer($this->from->getValue());
        }

        return new CubicKilometer($this::convert($this->from, CubicKilometer::class));
    }

    public function toCubicMillimeter(): CubicMillimeter
    {
        if ($this->from instanceof CubicMillimeter) {
            return new CubicMillimeter($this->from->getValue());
        }

        return new CubicMillimeter($this::convert($this->from, CubicMillimeter::class));
    }

    public function toUKBarrel(): UKBarrel
    {
        if ($this->from instanceof UKBarrel) {
            return new UKBarrel($this->from->getValue());
        }

        return new UKBarrel($this::convert($this->from, UKBarrel::class));
    }

    public function toUKCup(): UKCup
    {
        if ($this->from instanceof UKCup) {
            return new UKCup($this->from->getValue());
        }

        return new UKCup($this::convert($this->from, UKCup::class));
    }

    public function toUKDessertspoon(): UKDessertspoon
    {
        if ($this->from instanceof UKDessertspoon) {
            return new UKDessertspoon($this->from->getValue());
        }

        return new UKDessertspoon($this::convert($this->from, UKDessertspoon::class));
    }

    public function toUKFluidOunce(): UKFluidOunce
    {
        if ($this->from instanceof UKFluidOunce) {
            return new UKFluidOunce($this->from->getValue());
        }

        return new UKFluidOunce($this::convert($this->from, UKFluidOunce::class));
    }

    public function toUKGallon(): UKGallon
    {
        if ($this->from instanceof UKGallon) {
            return new UKGallon($this->from->getValue());
        }

        return new UKGallon($this::convert($this->from, UKGallon::class));
    }

    public function toUKGill(): UKGill
    {
        if ($this->from instanceof UKGill) {
            return new UKGill($this->from->getValue());
        }

        return new UKGill($this::convert($this->from, UKGill::class));
    }

    public function toUKMinim(): UKMinim
    {
        if ($this->from instanceof UKMinim) {
            return new UKMinim($this->from->getValue());
        }

        return new UKMinim($this::convert($this->from, UKMinim::class));
    }

    public function toUKPint(): UKPint
    {
        if ($this->from instanceof UKPint) {
            return new UKPint($this->from->getValue());
        }

        return new UKPint($this::convert($this->from, UKPint::class));
    }

    public function toUKQuart(): UKQuart
    {
        if ($this->from instanceof UKQuart) {
            return new UKQuart($this->from->getValue());
        }

        return new UKQuart($this::convert($this->from, UKQuart::class));
    }

    public function toUKTablespoon(): UKTablespoon
    {
        if ($this->from instanceof UKTablespoon) {
            return new UKTablespoon($this->from->getValue());
        }

        return new UKTablespoon($this::convert($this->from, UKTablespoon::class));
    }

    public function toUKTeaspoon(): UKTeaspoon
    {
        if ($this->from instanceof UKTeaspoon) {
            return new UKTeaspoon($this->from->getValue());
        }

        return new UKTeaspoon($this::convert($this->from, UKTeaspoon::class));
    }

    public function toUSBarrel(): USBarrel
    {
        if ($this->from instanceof USBarrel) {
            return new USBarrel($this->from->getValue());
        }

        return new USBarrel($this::convert($this->from, USBarrel::class));
    }

    public function toUSCup(): USCup
    {
        if ($this->from instanceof USCup) {
            return new USCup($this->from->getValue());
        }

        return new USCup($this::convert($this->from, USCup::class));
    }

    public function toUSDessertspoon(): USDessertspoon
    {
        if ($this->from instanceof USDessertspoon) {
            return new USDessertspoon($this->from->getValue());
        }

        return new USDessertspoon($this::convert($this->from, USDessertspoon::class));
    }

    public function toUSFluidOunce(): USFluidOunce
    {
        if ($this->from instanceof USFluidOunce) {
            return new USFluidOunce($this->from->getValue());
        }

        return new USFluidOunce($this::convert($this->from, USFluidOunce::class));
    }

    public function toUSGallon(): USGallon
    {
        if ($this->from instanceof USGallon) {
            return new USGallon($this->from->getValue());
        }

        return new USGallon($this::convert($this->from, USGallon::class));
    }

    public function toUSGill(): USGill
    {
        if ($this->from instanceof USGill) {
            return new USGill($this->from->getValue());
        }

        return new USGill($this::convert($this->from, USGill::class));
    }

    public function toUSMinim(): USMinim
    {
        if ($this->from instanceof USMinim) {
            return new USMinim($this->from->getValue());
        }

        return new USMinim($this::convert($this->from, USMinim::class));
    }

    public function toUSPint(): USPint
    {
        if ($this->from instanceof USPint) {
            return new USPint($this->from->getValue());
        }

        return new USPint($this::convert($this->from, USPint::class));
    }

    public function toUSQuart(): USQuart
    {
        if ($this->from instanceof USQuart) {
            return new USQuart($this->from->getValue());
        }

        return new USQuart($this::convert($this->from, USQuart::class));
    }

    public function toUSTablespoon(): USTablespoon
    {
        if ($this->from instanceof USTablespoon) {
            return new USTablespoon($this->from->getValue());
        }

        return new USTablespoon($this::convert($this->from, USTablespoon::class));
    }

    public function toUSTeaspoon(): USTeaspoon
    {
        if ($this->from instanceof USTeaspoon) {
            return new USTeaspoon($this->from->getValue());
        }

        return new USTeaspoon($this::convert($this->from, USTeaspoon::class));
    }
}
