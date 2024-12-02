<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Converters\AreaUnitConverter;
use BaseCodeOy\Measurements\Enums\AreaUnit;

final readonly class ValueOfArea
{
    private function __construct(
        public float $data,
        public AreaUnit $unit,
    ) {}

    public static function createFrom(float $data, AreaUnit $unit): self
    {
        return new self($data, $unit);
    }

    public function convertTo(AreaUnit $unit): self
    {
        return new self(
            AreaUnitConverter::convert($this->data, $this->unit, $unit),
            $unit,
        );
    }
}
