<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use App\Models\Deposit;
use App\Models\DepositValue;
use Illuminate\Http\Request;

class DepositValueController extends Controller
{

    /**
     * Store a newly created resource in storage.
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
        $result = $car->depositValue()->create($input);

        return response()->json(
            [
                'data' => $result
            ],
            201
        );
    }

    /**
     * Display the specified resource.
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

        $result = $car->depositValue()->get();

        return response()->json(
            [
                'data' => $result
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
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
        $car->depositValue()->update($input);

        return response()->json(
            [],
            204
        );
    }
}
