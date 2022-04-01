<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use ValueObjects\Metrology\AbstractMetrology;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthComparatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthObserverManagerInterface;

abstract class AbstractLength extends AbstractMetrology implements LengthInterface
{
    protected ?LengthCalculatorInterface $calculator = null;
    protected ?LengthComparatorInterface $comparator = null;
    protected ?LengthConverterInterface $converter = null;
    protected ?LengthObserverManagerInterface $observerManager = null;

    public function calculate(LengthCalculatorInterface $calculator = null): LengthCalculatorInterface
    {
        if ($calculator !== null) {
            $this->calculator = new $calculator($this);
        } else if ($this->calculator === null) {
            $this->calculator = new LengthCalculator($this);
        }

        return $this->calculator;
    }

    public function compare(LengthComparatorInterface $comparator = null): LengthComparatorInterface
    {
        if ($comparator !== null) {
            $this->comparator = new $comparator($this);
        } else if ($this->comparator === null) {
            $this->comparator = new LengthComparator($this);
        }

        return $this->comparator;
    }

    public function convert(LengthConverterInterface $converter = null): LengthConverterInterface
    {
        if ($converter !== null) {
            $this->converter = new $converter($this);
        } else if ($this->converter === null) {
            $this->converter = new LengthConverter($this);
        }

        return $this->converter;
    }

    public function __destruct()
    {
        $this->observer()->notify('destroy');
    }

    public function observer(LengthObserverManagerInterface $observerManager = null): LengthObserverManagerInterface
    {
        if ($observerManager !== null) {
            $this->observerManager = new $observerManager($this);
        } else if ($this->observerManager === null) {
            $this->observerManager = new LengthObserverManager($this);
        }

        return $this->observerManager;
    }
}
