<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Converters;

use BaseCodeOy\Measurements\Enums\MassUnit;

final readonly class MassUnitConverter
{
    private const array CONVERSION_FACTORS = [
        'AR' => 0.2,
        'G' => 1,
        'KG' => 1_000,
        'LB' => 453.592,
        'MG' => 0.001,
        'OZ' => 28.349_5,
        'ST' => 6_350.29,
        'T' => 1_000_000,
    ];

    public static function convert(float $data, MassUnit $from, MassUnit $to): float
    {
        $dataInGrams = $data * self::CONVERSION_FACTORS[$from->value];

        return $dataInGrams / self::CONVERSION_FACTORS[$to->value];
    }
}
