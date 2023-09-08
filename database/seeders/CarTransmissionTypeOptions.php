<?php

use Illuminate\Support\Facades\DB;

const CAR_TRANSMISSION_TYPE = [
    'Manual',
    'Automatic',
];

foreach (CAR_TRANSMISSION_TYPE as $option) {
    $option = [
        'option_type' => 'car.transmission_type',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
