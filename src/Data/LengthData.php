<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Data;

use BaseCodeOy\Datobs\AbstractData;
use BaseCodeOy\Measurements\Enums\LengthUnit;
use Spatie\LaravelData\Attributes\WithCast;
use Spatie\LaravelData\Casts\EnumCast;

final class LengthData extends AbstractData
{
    public function __construct(
        public readonly float $data,
        #[WithCast(EnumCast::class)]
        public readonly LengthUnit $unit,
    ) {}
}