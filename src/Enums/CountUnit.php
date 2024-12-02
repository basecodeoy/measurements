<?php declare(strict_types=1);

/**
 * Copyright (C) BaseCode Oy - All Rights Reserved
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace BaseCodeOy\Measurements\Enums;

enum CountUnit: string
{
    case DOZEN = 'DOZ';
    case DOZEN_PAIR = 'DPR';
    case EACH = 'EA';
    case GROSS = 'GR';
    case NUMBER = 'NO';
    case PAIR = 'PR';
    case PIECES = 'PCS';
}
