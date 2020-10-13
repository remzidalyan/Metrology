<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Temperature;

use ValueObjects\Metrology\Contracts\Observer\MetrologyObserverManagerInterface;

interface TemperatureObserverManagerInterface extends MetrologyObserverManagerInterface
{
    public function contains(TemperatureObserverInterface $observer): bool;

    public function attach(TemperatureObserverInterface $observer): void;

    public function detach(TemperatureObserverInterface $observer): void;

    public function fire(TemperatureObserverInterface $observer, string $event): void;
}
