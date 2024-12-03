<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Enums;

enum LengthUnit: string
{
    case CENTIMETER = 'CM';
    case FOOT = 'FT';
    case LINEAR_METER = 'LNM';
    case METER = 'M';
    case YARD = 'YD';
}
