<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\MetrologyInterface;

interface DigitalInformationInterface extends MetrologyInterface
{
    public function __construct(float $value);

    public function calculate(DigitalInformationCalculatorInterface $calculator = null): DigitalInformationCalculatorInterface;

    public function compare(DigitalInformationComparatorInterface $comparator = null): DigitalInformationComparatorInterface;

    public function convert(DigitalInformationConverterInterface $converter = null): DigitalInformationConverterInterface;

    public function observer(DigitalInformationObserverManagerInterface $observerManager = null): DigitalInformationObserverManagerInterface;
}
