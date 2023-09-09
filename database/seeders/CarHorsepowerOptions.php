<?php

use Illuminate\Support\Facades\DB;

const CAR_HORSEPOWER = [
    '0 - 100',
    '100 - 200',
    '200 - 300',
    '300 - 400',
    '400 - 500',
    '500 - 600',
    '600 - 700',
    '700 - 800',
    '800 - 900',
    '900 - 1000',
    '1000+'

];

foreach (CAR_HORSEPOWER as $option) {
    $option = [
        'option_type' => 'car.horsepower',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
