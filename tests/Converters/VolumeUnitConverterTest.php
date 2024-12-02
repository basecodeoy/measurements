<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Measurements\Converters\VolumeUnitConverter;
use BaseCodeOy\Measurements\Enums\VolumeUnit;

it('can convert between volume units', function (): void {
    expect(VolumeUnitConverter::convert(1, VolumeUnit::BARREL, VolumeUnit::LITER))->toBe(158.987);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::CUBIC_CENTIMETER, VolumeUnit::LITER))->toBe(0.001);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::CUBIC_DECIMETER, VolumeUnit::LITER))->toBe(1.0);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::CUBIC_FOOT, VolumeUnit::LITER))->toBe(28.316_8);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::CUBIC_INCH, VolumeUnit::LITER))->toBe(0.016_387_1);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::CUBIC_METER, VolumeUnit::LITER))->toBe(1_000.0);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::GALLON, VolumeUnit::LITER))->toBe(3.785_41);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::PINT, VolumeUnit::LITER))->toBe(0.473_176);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::LITER, VolumeUnit::LITER))->toBe(1.0);

    expect(VolumeUnitConverter::convert(158.987, VolumeUnit::LITER, VolumeUnit::BARREL))->toBe(1.0);
    expect(VolumeUnitConverter::convert(0.001, VolumeUnit::LITER, VolumeUnit::CUBIC_CENTIMETER))->toBe(1.0);
    expect(VolumeUnitConverter::convert(1, VolumeUnit::LITER, VolumeUnit::CUBIC_DECIMETER))->toBe(1.0);
    expect(VolumeUnitConverter::convert(28.316_8, VolumeUnit::LITER, VolumeUnit::CUBIC_FOOT))->toBe(1.0);
    expect(VolumeUnitConverter::convert(0.016_387_1, VolumeUnit::LITER, VolumeUnit::CUBIC_INCH))->toBe(1.0);
    expect(VolumeUnitConverter::convert(1_000, VolumeUnit::LITER, VolumeUnit::CUBIC_METER))->toBe(1.0);
    expect(VolumeUnitConverter::convert(3.785_41, VolumeUnit::LITER, VolumeUnit::GALLON))->toBe(1.0);
    expect(VolumeUnitConverter::convert(0.473_176, VolumeUnit::LITER, VolumeUnit::PINT))->toBe(1.0);
});
