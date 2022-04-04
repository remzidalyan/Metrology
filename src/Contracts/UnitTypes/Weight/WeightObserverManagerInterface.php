<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Weight;

use ValueObjects\Metrology\Contracts\Observer\MetrologyObserverManagerInterface;

interface WeightObserverManagerInterface extends MetrologyObserverManagerInterface
{
    public function contains(WeightObserverInterface $observer): bool;

    public function attach(WeightObserverInterface $observer): void;

    public function detach(WeightObserverInterface $observer): void;

    public function fire(WeightObserverInterface $observer, string $event): void;
}
