<?php

namespace ValueObjects\Metrology\UnitTypes\Volume;

use ValueObjects\Metrology\AbstractMetrology;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeCalculatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeComparatorInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeConverterInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeObserverManagerInterface;

abstract class AbstractVolume extends AbstractMetrology implements VolumeInterface
{
    protected ?VolumeCalculatorInterface $calculator = null;
    protected ?VolumeComparatorInterface $comparator = null;
    protected ?VolumeConverterInterface $converter = null;
    protected ?VolumeObserverManagerInterface $observerManager = null;

    public function calculate(VolumeCalculatorInterface $calculator = null): VolumeCalculatorInterface
    {
        if ($calculator !== null) {
            $this->calculator = new $calculator($this);
        } else if ($this->calculator === null) {
            $this->calculator = new VolumeCalculator($this);
        }

        return $this->calculator;
    }

    public function compare(VolumeComparatorInterface $comparator = null): VolumeComparatorInterface
    {
        if ($comparator !== null) {
            $this->comparator = new $comparator($this);
        } else if ($this->comparator === null) {
            $this->comparator = new VolumeComparator($this);
        }

        return $this->comparator;
    }

    public function convert(VolumeConverterInterface $converter = null): VolumeConverterInterface
    {
        if ($converter !== null) {
            $this->converter = new $converter($this);
        } else if ($this->converter === null) {
            $this->converter = new VolumeConverter($this);
        }

        return $this->converter;
    }

    public function __destruct()
    {
        $this->observer()->notify('destroy');
    }

    public function observer(VolumeObserverManagerInterface $observerManager = null): VolumeObserverManagerInterface
    {
        if ($observerManager !== null) {
            $this->observerManager = new $observerManager($this);
        } else if ($this->observerManager === null) {
            $this->observerManager = new VolumeObserverManager($this);
        }

        return $this->observerManager;
    }
}
