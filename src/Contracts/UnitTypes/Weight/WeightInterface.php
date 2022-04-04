<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Weight;

use ValueObjects\Metrology\MetrologyInterface;

interface WeightInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(WeightCalculatorInterface $calculator = null): WeightCalculatorInterface;

    public function compare(WeightComparatorInterface $comparator = null): WeightComparatorInterface;

    public function convert(WeightConverterInterface $converter = null): WeightConverterInterface;

    public function observer(WeightObserverManagerInterface $observerManager = null): WeightObserverManagerInterface;
}
