<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Deposit;
use Illuminate\Http\Request;

class DepositController extends Controller
{
    /**
     * Display a listing of the deposits.
     */
    public function index()
    {
        $deposits = Deposit::with([
            'reservation.car',
            'reservation.customer'
        ])->get();

        if ($deposits->isEmpty()) {
            return response()->json(
                [],
                204
            );
        }

        return response()->json(
            [
                'data' => $deposits,
            ],
            200
        );
    }

    /**
     * Store a newly created deposit in storage.
     */
    public function store(Request $request)
    {
        $input = $request->input();
        $result = Deposit::create($input);

        return response()->json(
            [
                'data' => $result,
            ],
            201
        );
    }

    /**
     * Display the specified deposit.
     */
    public function show(string $deposit_id)
    {
        $deposit = Deposit::with([
            'reservation.car',
            'reservation.customer'
        ])->where('id', $deposit_id)->first();

        if (empty($deposit->id)) {
            return response()->json(
                [
                    'error' => "Can't find deposit with id: $deposit_id"
                ],
                404
            );
        }

        return response()->json(
            [
                'data' => $deposit,
            ],
            200
        );
    }

    /**
     * Update the specified deposit in storage.
     */
    public function update(Request $request, string $deposit_id)
    {
        $deposit = Deposit::find($deposit_id);

        if (empty($deposit->id)) {
            return response()->json(
                [
                    'error' => "Can't find deposit with id: $deposit_id"
                ],
                404
            );
        }

        $input = $request->input();
        $deposit->update($input);

        return response()->json(
            [],
            204
        );
    }

    /**
     * Remove the specified deposit from storage.
     */
    public function destroy(string $deposit_id)
    {
        $deposit = Deposit::find($deposit_id);

        if (empty($deposit->id)) {
            return response()->json(
                [
                    'error' => "Can't find deposit with id: $deposit_id"
                ],
                404
            );
        }

        $deposit->delete();

        return response()->json(
            [],
            204
        );
    }
}
