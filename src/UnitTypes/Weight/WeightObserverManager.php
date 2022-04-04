<?php

namespace ValueObjects\Metrology\UnitTypes\Weight;

use SplObjectStorage;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightObserverInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Weight\WeightObserverManagerInterface;
use ValueObjects\Metrology\Observers\AbstractMetrologyObserverManager;

class WeightObserverManager extends AbstractMetrologyObserverManager implements WeightObserverManagerInterface
{
    protected WeightInterface $object;

    public function __construct(WeightInterface $unit)
    {
        $this->observers = new SplObjectStorage();
        $this->object = $unit;
    }

    public function attach(WeightObserverInterface $observer, $data = null): void
    {
        if (!$this->contains($observer)) {
            $this->observers->attach($observer, $data = null);
        }
    }

    public function contains(WeightObserverInterface $observer): bool
    {
        return $this->observers->contains($observer);
    }

    public function detach(WeightObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    public function fire(WeightObserverInterface $observer, string $event): void
    {
        if (method_exists($observer, $event)) {
            $observer::$event($this->object);
        }
    }
}
