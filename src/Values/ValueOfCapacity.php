<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Converters\CapacityUnitConverter;
use BaseCodeOy\Measurements\Enums\CapacityUnit;

final readonly class ValueOfCapacity
{
    private function __construct(
        public float $data,
        public CapacityUnit $capacityUnit,
    ) {}

    public static function createFrom(float $data, CapacityUnit $capacityUnit): self
    {
        return new self($data, $capacityUnit);
    }

    public function convertTo(CapacityUnit $capacityUnit): self
    {
        return new self(
            CapacityUnitConverter::convert($this->data, $this->capacityUnit, $capacityUnit),
            $capacityUnit,
        );
    }
}
