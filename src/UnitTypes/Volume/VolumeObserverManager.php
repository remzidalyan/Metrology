<?php

namespace ValueObjects\Metrology\UnitTypes\Volume;

use SplObjectStorage;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeObserverInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Volume\VolumeObserverManagerInterface;
use ValueObjects\Metrology\Observers\AbstractMetrologyObserverManager;

class VolumeObserverManager extends AbstractMetrologyObserverManager implements VolumeObserverManagerInterface
{
    protected VolumeInterface $object;

    public function __construct(VolumeInterface $unit)
    {
        $this->observers = new SplObjectStorage();
        $this->object = $unit;
    }

    public function attach(VolumeObserverInterface $observer, $data = null): void
    {
        if (!$this->contains($observer)) {
            $this->observers->attach($observer, $data = null);
        }
    }

    public function contains(VolumeObserverInterface $observer): bool
    {
        return $this->observers->contains($observer);
    }

    public function detach(VolumeObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    public function fire(VolumeObserverInterface $observer, string $event): void
    {
        if (method_exists($observer, $event)) {
            $observer::$event($this->object);
        }
    }
}
