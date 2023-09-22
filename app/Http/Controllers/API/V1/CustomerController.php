<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::all();

        if ($customers->isEmpty()) {
            return response()->json(
                [],
                204
            );
        }

        return response()->json(
            [
                'data' => $customers,
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
        $result = Customer::create($input);

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
    public function show(string $customer_id)
    {
        $customer = Customer::find($customer_id);

        if (empty($customer->id)) {
            return response()->json(
                [
                    'error' => "Can't find customer with id: $customer_id"
                ],
                404
            );
        }

        return response()->json(
            [
                'data' => $customer,
            ],
            200
        );
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $customer_id)
    {
        $customer = Customer::find($customer_id);

        if (empty($customer->id)) {
            return response()->json(
                [
                    'error' => "Can't find customer with id: $customer_id"
                ],
                404
            );
        }

        $input = $request->input();
        $customer->update($input);

        return response()->json(
            [],
            204
        );
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $customer_id)
    {
        $customer = Customer::find($customer_id);

        if (empty($customer->id)) {
            return response()->json(
                [
                    'error' => "Can't find customer with id: $customer_id"
                ],
                404
            );
        }

        $customer->delete();

        return response()->json(
            [],
            204
        );
    }
}
