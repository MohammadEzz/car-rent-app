<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class ExtraFeatureController extends Controller
{
    /**
     * Display a listing of the car extra features.
     */
    public function index(string $car_id)
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

        $extra_features = $car->extraFeatures()->get();

        if ($extra_features->isEmpty()) {
            return response()->json(
                [],
                204
            );
        }

        return response()->json(
            [
                'data' => $extra_features,
            ],
            200
        );
    }

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
        $result = $car->extraFeatures()->create($input);

        return response()->json(
            [
                'data' => $result
            ],
            201
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $car_id, string $extra_feature_id)
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

        $extra_feature = $car->extraFeatures()->find($extra_feature_id);

        if (empty($extra_feature->id)) {
            return response()->json(
                [
                    'error' => "Can't find extra feature with id: $extra_feature_id"
                ],
                404
            );
        }

        $extra_feature->delete();

        return response()->json(
            [],
            204
        );
    }
}
