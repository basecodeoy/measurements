<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Measurements\Converters\MassUnitConverter;
use BaseCodeOy\Measurements\Enums\MassUnit;

it('can convert between mass units', function (): void {
    expect(MassUnitConverter::convert(1, MassUnit::CARAT, MassUnit::GRAM))->toBe(0.2);
    expect(MassUnitConverter::convert(1, MassUnit::KILOGRAM, MassUnit::GRAM))->toBe(1_000.0);
    expect(MassUnitConverter::convert(1_000, MassUnit::MILLIGRAM, MassUnit::GRAM))->toBe(1.0);
    expect(MassUnitConverter::convert(1, MassUnit::OUNCE, MassUnit::GRAM))->toBe(28.349_5);
    expect(MassUnitConverter::convert(1, MassUnit::POUND, MassUnit::GRAM))->toBe(453.592);
    expect(MassUnitConverter::convert(1, MassUnit::STONE, MassUnit::GRAM))->toBe(6_350.29);
    expect(MassUnitConverter::convert(1, MassUnit::TON, MassUnit::GRAM))->toBe(1_000_000.0);
    expect(MassUnitConverter::convert(1, MassUnit::GRAM, MassUnit::GRAM))->toBe(1.0);

    expect(MassUnitConverter::convert(1, MassUnit::GRAM, MassUnit::CARAT))->toBe(5.0);
    expect(MassUnitConverter::convert(1_000, MassUnit::GRAM, MassUnit::KILOGRAM))->toBe(1.0);
    expect(MassUnitConverter::convert(1, MassUnit::GRAM, MassUnit::MILLIGRAM))->toBe(1_000.0);
    expect(MassUnitConverter::convert(28.349_5, MassUnit::GRAM, MassUnit::OUNCE))->toBe(1.0);
    expect(MassUnitConverter::convert(453.592, MassUnit::GRAM, MassUnit::POUND))->toBe(1.0);
    expect(MassUnitConverter::convert(6_350.29, MassUnit::GRAM, MassUnit::STONE))->toBe(1.0);
    expect(MassUnitConverter::convert(1_000_000, MassUnit::GRAM, MassUnit::TON))->toBe(1.0);
});
