<?php

namespace ValueObjects\Metrology\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightInterface;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\Dram;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\Grain;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\LongHundredweight;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\LongTon;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\Ounce;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\Pound;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\ShortHundredweight;
use ValueObjects\Metrology\UnitTypes\Weight\Avoirdupois\ShortTon;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Attogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Centigram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Decagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Decigram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Exagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Femtogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Gigagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Gram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Hectogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Kilogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Megagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Microgram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Milligram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Nanogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Petagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Picogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Teragram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Yoctogram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Yottagram;
use ValueObjects\Metrology\UnitTypes\Weight\Gram\Zettagram;
use ValueObjects\Metrology\UnitTypes\Weight\Metric\AtomicMassUnit;
use ValueObjects\Metrology\UnitTypes\Weight\Metric\Carat;
use ValueObjects\Metrology\UnitTypes\Weight\Metric\Kilonewton;
use ValueObjects\Metrology\UnitTypes\Weight\Metric\Ton;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Carat as TroyCarat;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Doite;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Grain as TroyGrain;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Mite;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Ounce as TroyOunce;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Pennyweight;
use ValueObjects\Metrology\UnitTypes\Weight\Troy\Pound as TroyPound;

class WeightConverter implements WeightConverterInterface
{
    protected WeightInterface $from;

    public function __construct(WeightInterface $from)
    {
        $this->from = $from;
    }

    public function convertTo(WeightInterface $unit): WeightInterface
    {
        return $this::{'to' . $unit::getValueObjectName()}();
    }

    public function toGram(): Gram
    {
        if ($this->from instanceof Gram) {
            return new Gram($this->from->getValue());
        }

        return new Gram($this::convert($this->from, Gram::class));
    }

    private static function convert(WeightInterface $from, string $to): float
    {
        $value = $from->getValue();
        return $value * pow(10, $from::EXPONENT - $to::EXPONENT);
    }

    public function toYottagram(): Yottagram
    {
        if ($this->from instanceof Yottagram) {
            return new Yottagram($this->from->getValue());
        }

        return new Yottagram($this::convert($this->from, Yottagram::class));
    }

    public function toZettagram(): Zettagram
    {
        if ($this->from instanceof Zettagram) {
            return new Zettagram($this->from->getValue());
        }

        return new Zettagram($this::convert($this->from, Zettagram::class));
    }

    public function toExagram(): Exagram
    {
        if ($this->from instanceof Exagram) {
            return new Exagram($this->from->getValue());
        }

        return new Exagram($this::convert($this->from, Exagram::class));
    }

    public function toPetagram(): Petagram
    {
        if ($this->from instanceof Petagram) {
            return new Petagram($this->from->getValue());
        }

        return new Petagram($this::convert($this->from, Petagram::class));
    }

    public function toTeragram(): Teragram
    {
        if ($this->from instanceof Teragram) {
            return new Teragram($this->from->getValue());
        }

        return new Teragram($this::convert($this->from, Teragram::class));
    }

    public function toGigagram(): Gigagram
    {
        if ($this->from instanceof Gigagram) {
            return new Gigagram($this->from->getValue());
        }

        return new Gigagram($this::convert($this->from, Gigagram::class));
    }

    public function toMegagram(): Megagram
    {
        if ($this->from instanceof Megagram) {
            return new Megagram($this->from->getValue());
        }

        return new Megagram($this::convert($this->from, Megagram::class));
    }

    public function toKilogram(): Kilogram
    {
        if ($this->from instanceof Kilogram) {
            return new Kilogram($this->from->getValue());
        }

        return new Kilogram($this::convert($this->from, Kilogram::class));
    }

    public function toHectogram(): Hectogram
    {
        if ($this->from instanceof Hectogram) {
            return new Hectogram($this->from->getValue());
        }

        return new Hectogram($this::convert($this->from, Hectogram::class));
    }

    public function toDecagram(): Decagram
    {
        if ($this->from instanceof Decagram) {
            return new Decagram($this->from->getValue());
        }

        return new Decagram($this::convert($this->from, Decagram::class));
    }

    public function toDecigram(): Decigram
    {
        if ($this->from instanceof Decigram) {
            return new Decigram($this->from->getValue());
        }

        return new Decigram($this::convert($this->from, Decigram::class));
    }

    public function toCentigram(): Centigram
    {
        if ($this->from instanceof Centigram) {
            return new Centigram($this->from->getValue());
        }

        return new Centigram($this::convert($this->from, Centigram::class));
    }

    public function toMilligram(): Milligram
    {
        if ($this->from instanceof Milligram) {
            return new Milligram($this->from->getValue());
        }

        return new Milligram($this::convert($this->from, Milligram::class));
    }

    public function toMicrogram(): Microgram
    {
        if ($this->from instanceof Microgram) {
            return new Microgram($this->from->getValue());
        }

        return new Microgram($this::convert($this->from, Microgram::class));
    }

    public function toNanogram(): Nanogram
    {
        if ($this->from instanceof Nanogram) {
            return new Nanogram($this->from->getValue());
        }

        return new Nanogram($this::convert($this->from, Nanogram::class));
    }

    public function toPicogram(): Picogram
    {
        if ($this->from instanceof Picogram) {
            return new Picogram($this->from->getValue());
        }

        return new Picogram($this::convert($this->from, Picogram::class));
    }

    public function toFemtogram(): Femtogram
    {
        if ($this->from instanceof Femtogram) {
            return new Femtogram($this->from->getValue());
        }

        return new Femtogram($this::convert($this->from, Femtogram::class));
    }

    public function toAttogram(): Attogram
    {
        if ($this->from instanceof Attogram) {
            return new Attogram($this->from->getValue());
        }

        return new Attogram($this::convert($this->from, Attogram::class));
    }

    public function toYoctogram(): Yoctogram
    {
        if ($this->from instanceof Yoctogram) {
            return new Yoctogram($this->from->getValue());
        }

        return new Yoctogram($this::convert($this->from, Yoctogram::class));
    }

    public function toAtomicMassUnit(): AtomicMassUnit
    {
        if ($this->from instanceof AtomicMassUnit) {
            return new AtomicMassUnit($this->from->getValue());
        }

        return new AtomicMassUnit($this::convert($this->from, AtomicMassUnit::class));
    }

    public function toCarat(): Carat
    {
        if ($this->from instanceof Carat) {
            return new Carat($this->from->getValue());
        }

        return new Carat($this::convert($this->from, Carat::class));
    }

    public function toKilonewton(): Kilonewton
    {
        if ($this->from instanceof Kilonewton) {
            return new Kilonewton($this->from->getValue());
        }

        return new Kilonewton($this::convert($this->from, Kilonewton::class));
    }

    public function toTon(): Ton
    {
        if ($this->from instanceof Ton) {
            return new Ton($this->from->getValue());
        }

        return new Ton($this::convert($this->from, Ton::class));
    }

    public function toDram(): Dram
    {
        if ($this->from instanceof Dram) {
            return new Dram($this->from->getValue());
        }

        return new Dram($this::convert($this->from, Dram::class));
    }

    public function toGrain(): Grain
    {
        if ($this->from instanceof Grain) {
            return new Grain($this->from->getValue());
        }

        return new Grain($this::convert($this->from, Grain::class));
    }

    public function toLongHundredweight(): LongHundredweight
    {
        if ($this->from instanceof LongHundredweight) {
            return new LongHundredweight($this->from->getValue());
        }

        return new LongHundredweight($this::convert($this->from, LongHundredweight::class));
    }

    public function toLongTon(): LongTon
    {
        if ($this->from instanceof LongTon) {
            return new LongTon($this->from->getValue());
        }

        return new LongTon($this::convert($this->from, LongTon::class));
    }

    public function toOunce(): Ounce
    {
        if ($this->from instanceof Ounce) {
            return new Ounce($this->from->getValue());
        }

        return new Ounce($this::convert($this->from, Ounce::class));
    }

    public function toPound(): Pound
    {
        if ($this->from instanceof Pound) {
            return new Pound($this->from->getValue());
        }

        return new Pound($this::convert($this->from, Pound::class));
    }

    public function toShortHundredweight(): ShortHundredweight
    {
        if ($this->from instanceof ShortHundredweight) {
            return new ShortHundredweight($this->from->getValue());
        }

        return new ShortHundredweight($this::convert($this->from, ShortHundredweight::class));
    }

    public function toShortTon(): ShortTon
    {
        if ($this->from instanceof ShortTon) {
            return new ShortTon($this->from->getValue());
        }

        return new ShortTon($this::convert($this->from, ShortTon::class));
    }

    public function toTroyCarat(): TroyCarat
    {
        if ($this->from instanceof TroyCarat) {
            return new TroyCarat($this->from->getValue());
        }

        return new TroyCarat($this::convert($this->from, TroyCarat::class));
    }

    public function toDoite(): Doite
    {
        if ($this->from instanceof Doite) {
            return new Doite($this->from->getValue());
        }

        return new Doite($this::convert($this->from, Doite::class));
    }

    public function toTroyGrain(): TroyGrain
    {
        if ($this->from instanceof TroyGrain) {
            return new TroyGrain($this->from->getValue());
        }

        return new TroyGrain($this::convert($this->from, TroyGrain::class));
    }

    public function toMite(): Mite
    {
        if ($this->from instanceof Mite) {
            return new Mite($this->from->getValue());
        }

        return new Mite($this::convert($this->from, Mite::class));
    }

    public function toTroyOunce(): TroyOunce
    {
        if ($this->from instanceof TroyOunce) {
            return new TroyOunce($this->from->getValue());
        }

        return new TroyOunce($this::convert($this->from, TroyOunce::class));
    }

    public function toPennyweight(): Pennyweight
    {
        if ($this->from instanceof Pennyweight) {
            return new Pennyweight($this->from->getValue());
        }

        return new Pennyweight($this::convert($this->from, Pennyweight::class));
    }

    public function toTroyPound(): TroyPound
    {
        if ($this->from instanceof TroyPound) {
            return new TroyPound($this->from->getValue());
        }

        return new TroyPound($this::convert($this->from, TroyPound::class));
    }
}
