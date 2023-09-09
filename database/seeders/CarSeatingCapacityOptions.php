<?php

use Illuminate\Support\Facades\DB;

const CAR_SEATING_CAPACITY = [
    '2',
    '4',
    '5',
    '6',
    '7',
    '8',
    '10',
    '12',
    '15',
    '15+'
];

foreach (CAR_SEATING_CAPACITY as $option) {
    $option = [
        'option_type' => 'car.seating_capacity',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
