<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Converters\LengthUnitConverter;
use BaseCodeOy\Measurements\Enums\LengthUnit;

final readonly class ValueOfLength
{
    private function __construct(
        public float $data,
        public LengthUnit $unit,
    ) {}

    public static function createFrom(float $data, LengthUnit $unit): self
    {
        return new self($data, $unit);
    }

    public function convertTo(LengthUnit $unit): self
    {
        return new self(
            LengthUnitConverter::convert($this->data, $this->unit, $unit),
            $unit,
        );
    }
}
