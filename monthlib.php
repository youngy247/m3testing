<?php

/**
 * Returns the full name of a month given a month number.
 *
 * @param int $month A month number (1 - 12).
 * @return string The month's full name, e.g. 'January'.
 */
function nameOfMonth(int $month): string
{
    if ($month < 1 || $month > 12) {
        throw new OutOfBoundsException("Invalid month value: $month");
    }

    $months = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December'
    ];
    return $months[$month - 1];
}