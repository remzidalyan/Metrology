<?php

namespace ValueObjects\Metrology\UnitTypes\Weight;

use ValueObjects\Metrology\AbstractMetrology;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightComparatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightObserverManagerInterface;

abstract class AbstractWeight extends AbstractMetrology implements WeightInterface
{
    protected ?WeightCalculatorInterface $calculator = null;
    protected ?WeightComparatorInterface $comparator = null;
    protected ?WeightConverterInterface $converter = null;
    protected ?WeightObserverManagerInterface $observerManager = null;

    public function calculate(WeightCalculatorInterface $calculator = null): WeightCalculatorInterface
    {
        if ($calculator !== null) {
            $this->calculator = new $calculator($this);
        } else if ($this->calculator === null) {
            $this->calculator = new WeightCalculator($this);
        }

        return $this->calculator;
    }

    public function compare(WeightComparatorInterface $comparator = null): WeightComparatorInterface
    {
        if ($comparator !== null) {
            $this->comparator = new $comparator($this);
        } else if ($this->comparator === null) {
            $this->comparator = new WeightComparator($this);
        }

        return $this->comparator;
    }

    public function convert(WeightConverterInterface $converter = null): WeightConverterInterface
    {
        if ($converter !== null) {
            $this->converter = new $converter($this);
        } else if ($this->converter === null) {
            $this->converter = new WeightConverter($this);
        }

        return $this->converter;
    }

    public function __destruct()
    {
        $this->observer()->notify('destroy');
    }

    public function observer(WeightObserverManagerInterface $observerManager = null): WeightObserverManagerInterface
    {
        if ($observerManager !== null) {
            $this->observerManager = new $observerManager($this);
        } else if ($this->observerManager === null) {
            $this->observerManager = new WeightObserverManager($this);
        }

        return $this->observerManager;
    }
}
