<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\ConverterInterface;
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

interface WeightConverterInterface extends ConverterInterface
{
    public function __construct(WeightInterface $unit);

    public function convertTo(WeightInterface $unit): WeightInterface;

    public function toYottagram(): Yottagram;

    public function toZettagram(): Zettagram;

    public function toExagram(): Exagram;

    public function toPetagram(): Petagram;

    public function toTeragram(): Teragram;

    public function toGigagram(): Gigagram;

    public function toMegagram(): Megagram;

    public function toKilogram(): Kilogram;

    public function toHectogram(): Hectogram;

    public function toDecagram(): Decagram;

    public function toGram(): Gram;

    public function toDecigram(): Decigram;

    public function toCentigram(): Centigram;

    public function toMilligram(): Milligram;

    public function toMicrogram(): Microgram;

    public function toNanogram(): Nanogram;

    public function toPicogram(): Picogram;

    public function toFemtogram(): Femtogram;

    public function toAttogram(): Attogram;

    public function toYoctogram(): Yoctogram;


    public function toAtomicMassUnit(): AtomicMassUnit;

    public function toCarat(): Carat;

    public function toKilonewton(): Kilonewton;

    public function toTon(): Ton;


    public function toDram(): Dram;

    public function toGrain(): Grain;

    public function toLongHundredweight(): LongHundredweight;

    public function toLongTon(): LongTon;

    public function toOunce(): Ounce;

    public function toPound(): Pound;

    public function toShortHundredweight(): ShortHundredweight;

    public function toShortTon(): ShortTon;


    public function toTroyCarat(): TroyCarat;

    public function toDoite(): Doite;

    public function toTroyGrain(): TroyGrain;

    public function toMite(): Mite;

    public function toTroyOunce(): TroyOunce;

    public function toPennyweight(): Pennyweight;

    public function toTroyPound(): TroyPound;

}
