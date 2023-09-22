<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the cars.
     */
    public function index()
    {
        $cars = Car::with([
            'depositValue',
            'reservationPrice',
            'discount'
        ])->get();

        if ($cars->isEmpty()) {
            return response()->json(
                [],
                204
            );
        }

        return response()->json(
            [
                'data' => $cars,
            ],
            200
        );
    }

    /**
     * Store a newly created car in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $result = Car::create($input);

        return response()->json(
            [
                'data' => $result,
            ],
            201
        );
    }

    /**
     * Display the specified car.
     */
    public function show(string $car_id)
    {
        $car = Car::with([
            'depositValue',
            'reservationPrice',
            'discount'
        ])->where('id', $car_id)->first();

        if (empty($car->id)) {
            return response()->json(
                [
                    'error' => "Can't find car with id: $car_id"
                ],
                404
            );
        }

        return response()->json(
            [
                'data' => $car,
            ],
            200
        );
    }

    /**
     * Update the specified car in storage.
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
        $car->update($input);

        return response()->json(
            [],
            204
        );
    }

    /**
     * Remove the specified car from storage.
     */
    public function destroy(string $car_id)
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

        $car->delete();

        return response()->json(
            [],
            204
        );
    }
}
