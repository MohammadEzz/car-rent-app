<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\ReservationPrice;
use Illuminate\Http\Request;

class ReservationPriceController extends Controller
{

    /**
     * Store a newly created car reservation in storage.
     */
    public function store(Request $request, string $car_id)
    {
        $car = Car::find($car_id);

        if (empty($car->id)) {
            return response()->json(
                [
                    'error' => "Can't find car with id: $car_id"
                ],
                404
            );
        }

        $input = $request->input();
        $result = $car->reservationPrice()->create($input);

        return response()->json(
            [
                'data' => $result
            ],
            201
        );
    }

    /**
     * Display the specified car reservation.
     */
    public function show(string $car_id)
    {
        $car = Car::find($car_id);

        if (empty($car->id)) {
            return response()->json(
                [
                    'error' => "Can't find car with id: $car_id"
                ],
                404
            );
        }

        $result = $car->reservationPrice()->get();

        return response()->json(
            [
                'data' => $result
            ],
            200
        );
    }

    /**
     * Update the specified car reservation in storage.
     */
    public function update(Request $request, string $car_id)
    {
        $car = Car::find($car_id);

        if (empty($car->id)) {
            return response()->json(
                [
                    'error' => "Can't find car with id: $car_id"
                ],
                404
            );
        }

        $input = $request->input();
        $car->reservationPrice()->update($input);

        return response()->json(
            [],
            204
        );
    }
}
