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
        public AreaUnit $areaUnit,
    ) {}

    public static function createFrom(float $data, AreaUnit $areaUnit): self
    {
        return new self($data, $areaUnit);
    }

    public function convertTo(AreaUnit $areaUnit): self
    {
        return new self(
            AreaUnitConverter::convert($this->data, $this->areaUnit, $areaUnit),
            $areaUnit,
        );
    }
}
