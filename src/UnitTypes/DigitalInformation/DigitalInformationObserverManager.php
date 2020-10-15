<?php

namespace ValueObjects\Metrology\UnitTypes\DigitalInformation;

use SplObjectStorage;
use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\DigitalInformationInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\DigitalInformationObserverInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation\DigitalInformationObserverManagerInterface;
use ValueObjects\Metrology\Observers\AbstractMetrologyObserverManager;

class DigitalInformationObserverManager extends AbstractMetrologyObserverManager implements DigitalInformationObserverManagerInterface
{
    protected DigitalInformationInterface $object;

    public function __construct(DigitalInformationInterface $unit)
    {
        $this->observers = new SplObjectStorage();
        $this->object = $unit;
    }

    public function contains(DigitalInformationObserverInterface $observer): bool
    {
        return $this->observers->contains($observer);
    }

    public function attach(DigitalInformationObserverInterface $observer, $data = null): void
    {
        if (!$this->contains($observer)) {
            $this->observers->attach($observer, $data = null);
        }
    }

    public function detach(DigitalInformationObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    public function fire(DigitalInformationObserverInterface $observer, string $event): void
    {
        if (method_exists($observer, $event)) {
            $observer::$event($this->object);
        }
    }
}
