<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Volume;

use ValueObjects\Metrology\Contracts\Observer\MetrologyObserverManagerInterface;

interface VolumeObserverManagerInterface extends MetrologyObserverManagerInterface
{
    public function contains(VolumeObserverInterface $observer): bool;

    public function attach(VolumeObserverInterface $observer): void;

    public function detach(VolumeObserverInterface $observer): void;

    public function fire(VolumeObserverInterface $observer, string $event): void;
}
