<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\ComparatorInterface;

interface WeightComparatorInterface extends ComparatorInterface
{
    public function __construct(WeightInterface $unit);

    public static function min(WeightInterface ...$units): WeightInterface;

    public static function max(WeightInterface ...$units): WeightInterface;

    public function equals(WeightInterface $unit): bool;

    public function greaterThan(WeightInterface $unit): bool;

    public function greaterThanOrEqual(WeightInterface $unit): bool;

    public function lessThan(WeightInterface $unit): bool;

    public function lessThanOrEqual(WeightInterface $unit): bool;
}
