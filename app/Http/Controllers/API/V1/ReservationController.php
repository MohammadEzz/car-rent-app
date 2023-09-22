<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reservations = Reservation::with([
            'customer',
            'car',
            'deposit'
        ])->get();

        if ($reservations->isEmpty()) {
            return response()->json(
                [],
                204
            );
        }

        return response()->json(
            [
                'data' => $reservations,
            ],
            200
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $result = Reservation::create($input);

        return response()->json(
            [
                'data' => $result,
            ],
            201
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $reservation_id)
    {
        $reservation = Reservation::with([
            'customer',
            'car',
            'deposit'
        ])->where('id', $reservation_id)->first();

        if (empty($reservation->id)) {
            return response()->json(
                [
                    'error' => "Can't find reservation with id: $reservation_id"
                ],
                404
            );
        }

        return response()->json(
            [
                'data' => $reservation,
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $reservation_id)
    {
        $reservation = Reservation::find($reservation_id);

        if (empty($reservation->id)) {
            return response()->json(
                [
                    'error' => "Can't find reservation with id: $reservation_id"
                ],
                404
            );
        }

        $input = $request->input();
        $reservation->update($input);

        return response()->json(
            [],
            204
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $reservatio_id)
    {
        $reservation = Reservation::find($reservatio_id);

        if (empty($reservation->id)) {
            return response()->json(
                [
                    'error' => "Can't find reservation with id: $reservatio_id"
                ],
                404
            );
        }

        $reservation->delete();

        return response()->json(
            [],
            204
        );
    }
}
