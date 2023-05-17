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
        $pay_mode = new Sisven();
        $pay_mode->id = $request->id;
        $pay_mode->name = $request->name;
        $pay_mode->observation = $request->observation;
        $pay_mode->created_at = $request->created_at;
        $pay_mode->updated_at = $request->updated_at;
        return json_encode(['pay_mode' => $pay_mode]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $pay_mode = Sisven::find($id);
        return json_encode(['pay_mode' => $pay_mode]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $pay_mode = Sisven::find($id);
        $pay_mode->id = $request->id;
        $pay_mode->name = $request->name;
        $pay_mode->observation = $request->observation;
        $pay_mode->created_at = $request->created_at;
        $pay_mode->updated_at = $request->updated_at;
        $pay_mode->save();
        return json_encode(['pay_mode'=>$pay_mode]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}
