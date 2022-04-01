<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\Length;

use ValueObjects\Metrology\Contracts\Observer\MetrologyObserverManagerInterface;

interface LengthObserverManagerInterface extends MetrologyObserverManagerInterface
{
    public function contains(LengthObserverInterface $observer): bool;

    public function attach(LengthObserverInterface $observer): void;

    public function detach(LengthObserverInterface $observer): void;

    public function fire(LengthObserverInterface $observer, string $event): void;
}
