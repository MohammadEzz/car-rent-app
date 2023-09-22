<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class DiscountController extends Controller
{

    /**
     * Store a newly created car discount in storage.
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
        $result = $car->discount()->create($input);

        return response()->json(
            [
                'data' => $result
            ],
            201
        );
    }

    /**
     * Display the specified car discount.
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

        $result = $car->discount()->get();

        return response()->json(
            [
                'data' => $result
            ],
            200
        );
    }

    /**
     * Update the specified car discount in storage.
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
        $car->discount()->update($input);

        return response()->json(
            [],
            204
        );
    }
}
