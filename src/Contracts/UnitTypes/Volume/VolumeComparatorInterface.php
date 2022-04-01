<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\ComparatorInterface;

interface VolumeComparatorInterface extends ComparatorInterface
{
    public function __construct(VolumeInterface $unit);

    public static function min(VolumeInterface ...$units): VolumeInterface;

    public static function max(VolumeInterface ...$units): VolumeInterface;

    public function equals(VolumeInterface $unit): bool;

    public function greaterThan(VolumeInterface $unit): bool;

    public function greaterThanOrEqual(VolumeInterface $unit): bool;

    public function lessThan(VolumeInterface $unit): bool;

    public function lessThanOrEqual(VolumeInterface $unit): bool;
}
