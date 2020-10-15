<?php

namespace ValueObjects\Metrology\Contracts\UnitTypes\DigitalInformation;

use ValueObjects\Metrology\Contracts\ConverterInterface;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Bit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Kilobit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Megabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Gigabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Terabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Petabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Exabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Yottabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Bit\Zettabit;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Byte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Kilobyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Megabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Gigabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Terabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Petabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Exabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Yottabyte;
use ValueObjects\Metrology\UnitTypes\DigitalInformation\Byte\Zettabyte;

interface DigitalInformationConverterInterface extends ConverterInterface
{
    public function __construct(DigitalInformationInterface $unit);

    public function convertTo(DigitalInformationInterface $unit): DigitalInformationInterface;

    public function toBit(): Bit;

    public function toKilobit(): Kilobit;

    public function toMegabit(): Megabit;

    public function toGigabit(): Gigabit;

    public function toTerabit(): Terabit;

    public function toPetabit(): Petabit;

    public function toExabit(): Exabit;

    public function toZettabit(): Zettabit;

    public function toYottabit(): Yottabit;

    public function toByte(): Byte;

    public function toKilobyte(): Kilobyte;

    public function toMegabyte(): Megabyte;

    public function toGigabyte(): Gigabyte;

    public function toTerabyte(): Terabyte;

    public function toPetabyte(): Petabyte;

    public function toExabyte(): Exabyte;

    public function toZettabyte(): Zettabyte;

    public function toYottabyte(): Yottabyte;
}
