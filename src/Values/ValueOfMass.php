<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Converters\MassUnitConverter;
use BaseCodeOy\Measurements\Enums\MassUnit;

final readonly class ValueOfMass
{
    private function __construct(
        public float $data,
        public MassUnit $unit,
    ) {}

    public static function createFrom(float $data, MassUnit $unit): self
    {
        return new self($data, $unit);
    }

    public function convertTo(MassUnit $unit): self
    {
        return new self(
            MassUnitConverter::convert($this->data, $this->unit, $unit),
            $unit,
        );
    }
}
