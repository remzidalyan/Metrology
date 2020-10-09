<?php

namespace ValueObjects\Metrology;

use ValueObjects\Common\ValueObjectInterface;

interface MetrologyInterface extends ValueObjectInterface
{
    public static function getSymbol(): string;

    public function getValue(): float;

    public function setValue(float $value);
}
