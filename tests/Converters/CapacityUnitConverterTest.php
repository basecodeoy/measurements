<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Measurements\Converters\CapacityUnitConverter;
use BaseCodeOy\Measurements\Enums\CapacityUnit;

it('can convert between capacity units', function (): void {
    expect(CapacityUnitConverter::convert(1, CapacityUnit::BARREL, CapacityUnit::LITER))->toBe(158.987);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CENTILITER, CapacityUnit::LITER))->toBe(0.01);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CUBIC_CENTIMETER, CapacityUnit::LITER))->toBe(0.001);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CUBIC_DECIMETER, CapacityUnit::LITER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CUBIC_FOOT, CapacityUnit::LITER))->toBe(28.316_8);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CUBIC_INCH, CapacityUnit::LITER))->toBe(0.016_387_1);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::CUBIC_METER, CapacityUnit::LITER))->toBe(1_000.0);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::DECILITER, CapacityUnit::LITER))->toBe(0.1);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::DRUM, CapacityUnit::LITER))->toBe(208.197);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::GALLON, CapacityUnit::LITER))->toBe(3.785_41);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::MILLILITER, CapacityUnit::LITER))->toBe(0.001);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::PINT, CapacityUnit::LITER))->toBe(0.473_176);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::QUART, CapacityUnit::LITER))->toBe(0.946_353);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::LITER, CapacityUnit::LITER))->toBe(1.0);

    expect(CapacityUnitConverter::convert(158.987, CapacityUnit::LITER, CapacityUnit::BARREL))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.01, CapacityUnit::LITER, CapacityUnit::CENTILITER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.001, CapacityUnit::LITER, CapacityUnit::CUBIC_CENTIMETER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(1, CapacityUnit::LITER, CapacityUnit::CUBIC_DECIMETER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(28.316_8, CapacityUnit::LITER, CapacityUnit::CUBIC_FOOT))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.016_387_1, CapacityUnit::LITER, CapacityUnit::CUBIC_INCH))->toBe(1.0);
    expect(CapacityUnitConverter::convert(1_000, CapacityUnit::LITER, CapacityUnit::CUBIC_METER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.1, CapacityUnit::LITER, CapacityUnit::DECILITER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(208.197, CapacityUnit::LITER, CapacityUnit::DRUM))->toBe(1.0);
    expect(CapacityUnitConverter::convert(3.785_41, CapacityUnit::LITER, CapacityUnit::GALLON))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.001, CapacityUnit::LITER, CapacityUnit::MILLILITER))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.473_176, CapacityUnit::LITER, CapacityUnit::PINT))->toBe(1.0);
    expect(CapacityUnitConverter::convert(0.946_353, CapacityUnit::LITER, CapacityUnit::QUART))->toBe(1.0);
});
