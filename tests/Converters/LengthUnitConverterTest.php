<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Measurements\Converters\LengthUnitConverter;
use BaseCodeOy\Measurements\Enums\LengthUnit;

it('can convert between length units', function (): void {
    expect(LengthUnitConverter::convert(1, LengthUnit::CENTIMETER, LengthUnit::METER))->toBe(0.01);
    expect(LengthUnitConverter::convert(1, LengthUnit::FOOT, LengthUnit::METER))->toBe(0.304_8);
    expect(LengthUnitConverter::convert(1, LengthUnit::LINEAR_METER, LengthUnit::METER))->toBe(1.0);
    expect(LengthUnitConverter::convert(1, LengthUnit::YARD, LengthUnit::METER))->toBe(0.914_4);
    expect(LengthUnitConverter::convert(1, LengthUnit::METER, LengthUnit::METER))->toBe(1.0);
    expect(LengthUnitConverter::convert(100, LengthUnit::CENTIMETER, LengthUnit::METER))->toBe(1.0);
    expect(LengthUnitConverter::convert(3, LengthUnit::YARD, LengthUnit::METER))->toBe(2.743_2);
    expect(LengthUnitConverter::convert(10, LengthUnit::FOOT, LengthUnit::METER))->toBe(3.048);
});
