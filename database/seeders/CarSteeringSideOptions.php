<?php

use Illuminate\Support\Facades\DB;

const CAR_STEERING_SIDE = [
    'left',
    'right'
];

foreach (CAR_STEERING_SIDE as $option) {
    $option = [
        'option_type' => 'car.steering_side',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
