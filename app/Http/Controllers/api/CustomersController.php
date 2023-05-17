<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sisven;
use Illuminate\Support\Facades\DB;

class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = DB::table('customers')
            ->select('customers.*')
            ->get();
        return json_encode(['customers' => $customers]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $customer = new Sisven();
        $customer->id = $request->id;
        $customer->document_number = $request->document_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->created_at = $request->created_at;
        $customer->updated_at = $request->updated_at;
        return json_encode(['customer' => $customer]);

    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $customers = Sisven::find($id);
        return json_encode(['customers' => $customers]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $customer = Sisven::find($id);
        $customer->id = $request->id;
        $customer->document_number = $request->document_number;
        $customer->first_name = $request->first_name;
        $customer->last_name = $request->last_name;
        $customer->address = $request->address;
        $customer->birthday = $request->birthday;
        $customer->phone_number = $request->phone_number;
        $customer->email = $request->email;
        $customer->created_at = $request->created_at;
        $customer->updated_at = $request->updated_at;
        $customer->save();
        return json_encode(['customer'=>$customer]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
        $customer = Sisven::find($id);
        $customer->delete();
        $customers = DB::table('customers')
        ->select('customers.*')
        ->get();
        return json_encode(['customers'=>$customers]);
    }
}