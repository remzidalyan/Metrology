<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\MetrologyInterface;

interface LengthInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(LengthCalculatorInterface $calculator = null): LengthCalculatorInterface;

    public function compare(LengthComparatorInterface $comparator = null): LengthComparatorInterface;

    public function convert(LengthConverterInterface $converter = null): LengthConverterInterface;

    public function observer(LengthObserverManagerInterface $observerManager = null): LengthObserverManagerInterface;
}
