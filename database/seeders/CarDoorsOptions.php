<?php

use Illuminate\Support\Facades\DB;

const CAR_DOORS = [
    '2',
    '3',
    '4',
    '5',
    '5+',
];

foreach (CAR_DOORS as $option) {
    $option = [
        'option_type' => 'car.doors',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
