<?php

use Illuminate\Support\Facades\DB;

const CAR_CYLINDER = [
    '3',
    '4',
    '6',
    '8',
    '12',
    '12+',

];

foreach (CAR_CYLINDER as $option) {
    $option = [
        'option_type' => 'car.cylinder',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
