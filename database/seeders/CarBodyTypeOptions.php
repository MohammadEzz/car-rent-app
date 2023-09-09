<?php

use Illuminate\Support\Facades\DB;

const CAR_BODY_TYPE = [
    'Sedan',
    'SUV',
    'Compact',
    'Super',
    'Hatchback',
    'Station wagon',
    'Convertible',
    'Muscle',
    'Sport',
    'Roadster',
    'Targa',
    'Micro',
    'Coupe',
    'Van',
    'Minivan',
    'Minibus',
    'Pickup',
    'Limousine',
    'Off-roader',
    'Utility vehicle',
];

foreach (CAR_BODY_TYPE as $option) {
    $option = [
        'option_type' => 'car.body_type',
        'option_value' => strtolower($option),
    ];
    DB::table('options')->insert($option);
}
