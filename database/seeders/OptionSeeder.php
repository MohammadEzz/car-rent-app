<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('options')->truncate();
        include_once(database_path('/seeders/CarOptionOptions.php'));
        include_once(database_path('/seeders/CarBodyTypeOptions.php'));
        include_once(database_path('/seeders/CarTransmissionTypeOptions.php'));
        include_once(database_path('/seeders/CarSeatingCapacityOptions.php'));
        include_once(database_path('/seeders/CarFuelTypeOptions.php'));
        include_once(database_path('/seeders/CarHorsepowerOptions.php'));
        include_once(database_path('/seeders/CarDoorsOptions.php'));
        include_once(database_path('/seeders/CarCylinderOptions.php'));
        include_once(database_path('/seeders/CarSteeringSideOptions.php'));
    }
}
