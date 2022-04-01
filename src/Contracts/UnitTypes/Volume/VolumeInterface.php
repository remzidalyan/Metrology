<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Volume;

use ValueObjects\Metrology\MetrologyInterface;

interface VolumeInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(VolumeCalculatorInterface $calculator = null): VolumeCalculatorInterface;

    public function compare(VolumeComparatorInterface $comparator = null): VolumeComparatorInterface;

    public function convert(VolumeConverterInterface $converter = null): VolumeConverterInterface;

    public function observer(VolumeObserverManagerInterface $observerManager = null): VolumeObserverManagerInterface;
}
