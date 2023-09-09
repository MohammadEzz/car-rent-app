<?php

use Illuminate\Support\Facades\DB;

const CAR_FUEL_TYPE = [
    'petrol',
    'diesel',
    'hybrid',
    'electric',
];

foreach (CAR_FUEL_TYPE as $option) {
    $option = [
        'option_type' => 'car.fuel_type',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
