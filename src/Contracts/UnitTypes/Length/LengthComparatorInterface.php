<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\ComparatorInterface;

interface LengthComparatorInterface extends ComparatorInterface
{
    public function __construct(LengthInterface $unit);

    public static function min(LengthInterface ...$units): LengthInterface;

    public static function max(LengthInterface ...$units): LengthInterface;

    public function equals(LengthInterface $unit): bool;

    public function greaterThan(LengthInterface $unit): bool;

    public function greaterThanOrEqual(LengthInterface $unit): bool;

    public function lessThan(LengthInterface $unit): bool;

    public function lessThanOrEqual(LengthInterface $unit): bool;
}
