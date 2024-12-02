<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Converters\VolumeUnitConverter;
use BaseCodeOy\Measurements\Enums\VolumeUnit;

final readonly class ValueOfVolume
{
    private function __construct(
        public float $data,
        public VolumeUnit $unit,
    ) {}

    public static function createFrom(float $data, VolumeUnit $unit): self
    {
        return new self($data, $unit);
    }

    public function convertTo(VolumeUnit $unit): self
    {
        return new self(
            VolumeUnitConverter::convert($this->data, $this->unit, $unit),
            $unit,
        );
    }
}
