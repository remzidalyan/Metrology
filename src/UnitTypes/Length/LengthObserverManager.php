<?php

namespace ValueObjects\Metrology\UnitTypes\Length;

use SplObjectStorage;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthObserverInterface;
use ValueObjects\Metrology\Contracts\UnitTypes\Length\LengthObserverManagerInterface;
use ValueObjects\Metrology\Observers\AbstractMetrologyObserverManager;

class LengthObserverManager extends AbstractMetrologyObserverManager implements LengthObserverManagerInterface
{
    protected LengthInterface $object;

    public function __construct(LengthInterface $unit)
    {
        $this->observers = new SplObjectStorage();
        $this->object = $unit;
    }

    public function contains(LengthObserverInterface $observer): bool
    {
        return $this->observers->contains($observer);
    }

    public function attach(LengthObserverInterface $observer, $data = null): void
    {
        if (!$this->contains($observer)) {
            $this->observers->attach($observer, $data = null);
        }
    }

    public function detach(LengthObserverInterface $observer): void
    {
        $this->observers->detach($observer);
    }

    public function fire(LengthObserverInterface $observer, string $event): void
    {
        if (method_exists($observer, $event)) {
            $observer::$event($this->object);
        }
    }
}
