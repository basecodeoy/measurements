<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Enums;

enum MassUnit: string
{
    case CARAT = 'AR';
    case GRAM = 'G';
    case KILOGRAM = 'KG';
    case MILLIGRAM = 'MG';
    case OUNCE = 'OZ';
    case POUND = 'LB';
    case STONE = 'ST';
    case TON = 'T';
}
