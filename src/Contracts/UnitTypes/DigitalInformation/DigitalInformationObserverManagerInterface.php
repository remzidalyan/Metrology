<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\Observer\MetrologyObserverManagerInterface;

interface DigitalInformationObserverManagerInterface extends MetrologyObserverManagerInterface
{
    public function contains(DigitalInformationObserverInterface $observer): bool;

    public function attach(DigitalInformationObserverInterface $observer): void;

    public function detach(DigitalInformationObserverInterface $observer): void;

    public function fire(DigitalInformationObserverInterface $observer, string $event): void;
}
