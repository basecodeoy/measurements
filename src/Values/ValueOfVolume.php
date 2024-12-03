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
        public VolumeUnit $volumeUnit,
    ) {}

    public static function createFrom(float $data, VolumeUnit $volumeUnit): self
    {
        return new self($data, $volumeUnit);
    }

    public function convertTo(VolumeUnit $volumeUnit): self
    {
        return new self(
            VolumeUnitConverter::convert($this->data, $this->volumeUnit, $volumeUnit),
            $volumeUnit,
        );
    }
}
