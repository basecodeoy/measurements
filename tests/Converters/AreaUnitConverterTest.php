<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

use BaseCodeOy\Measurements\Converters\AreaUnitConverter;
use BaseCodeOy\Measurements\Enums\AreaUnit;

it('can convert between area units', function (): void {
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_CENTIMETER, AreaUnit::SQUARE_METER))->toBe(0.000_1);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_DECIMETER, AreaUnit::SQUARE_METER))->toBe(0.01);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_FOOT, AreaUnit::SQUARE_METER))->toBe(0.092_903);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_INCH, AreaUnit::SQUARE_METER))->toBe(0.000_645_16);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_MILLIMETER, AreaUnit::SQUARE_METER))->toBe(0.000_001);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_YARD, AreaUnit::SQUARE_METER))->toBe(0.836_127);
    expect(AreaUnitConverter::convert(1, AreaUnit::SQUARE_METER, AreaUnit::SQUARE_METER))->toBe(1.0);
});
