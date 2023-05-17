<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Sisven;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PayModeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pay_mode = DB::table('pay_mode')
        ->select('pay_mode.*')
        ->get();
    return json_encode(['pay_mode' => $pay_mode]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}
