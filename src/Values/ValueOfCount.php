<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Values;

use BaseCodeOy\Measurements\Enums\CountUnit;

final readonly class ValueOfCount
{
    private function __construct(
        public float $data,
        public CountUnit $unit,
    ) {}

    public static function createFrom(float $data, CountUnit $unit): self
    {
        return new self($data, $unit);
    }
}
