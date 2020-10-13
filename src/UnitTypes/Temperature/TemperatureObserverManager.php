<?php

namespace ValueObjects\Metrology\UnitTypes\Temperature;

use SplObjectStorage;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureObserverInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Temperature\TemperatureObserverManagerInterface;
use ValueObjects\Metrology\Observers\AbstractMetrologyObserverManager;

class TemperatureObserverManager extends AbstractMetrologyObserverManager implements TemperatureObserverManagerInterface
{
    protected TemperatureInterface $object;

    public function __construct(TemperatureInterface $unit)
    {
        $this->observers = new SplObjectStorage();
        $this->object = $unit;
    }

    public function contains(TemperatureObserverInterface $observer): bool
    {
        return $this->observers->contains($observer);
    }

    public function attach(TemperatureObserverInterface $observer, $data = null): void
    {
        if (!$this->contains($observer)) {
            $this->observers->attach($observer, $data = null);
        }
    }

    public function detach(TemperatureObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    public function fire(TemperatureObserverInterface $observer, string $event): void
    {
        if (method_exists($observer, $event)) {
            $observer::$event($this->object);
        }
    }
}
