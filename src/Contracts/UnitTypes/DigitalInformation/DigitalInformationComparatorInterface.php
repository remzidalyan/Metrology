<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\ComparatorInterface;

interface DigitalInformationComparatorInterface extends ComparatorInterface
{
    public function __construct(DigitalInformationInterface $unit);

    public static function min(DigitalInformationInterface ...$units): DigitalInformationInterface;

    public static function max(DigitalInformationInterface ...$units): DigitalInformationInterface;

    public function equals(DigitalInformationInterface $unit): bool;

    public function greaterThan(DigitalInformationInterface $unit): bool;

    public function greaterThanOrEqual(DigitalInformationInterface $unit): bool;

    public function lessThan(DigitalInformationInterface $unit): bool;

    public function lessThanOrEqual(DigitalInformationInterface $unit): bool;
}
