<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Sisven;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = DB::table('products')
        ->select('products.*')
        ->get();
    return json_encode(['products' => $products]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $products = new Sisven();
        $products->id = $request->id;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->category_id = $request->category_id;
        $products->created_at = $request->created_at;
        $products->updated_at = $request->updated_at;
        return json_encode(['products' => $products]);

    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $products = Sisven::find($id);
        return json_encode(['products' => $products]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $products = Sisven::find($id);
        $products->id = $request->id;
        $products->name = $request->name;
        $products->price = $request->price;
        $products->stock = $request->stock;
        $products->category_id = $request->category_id;
        $products->created_at = $request->created_at;
        $products->updated_at = $request->updated_at;
        $products->save();
        return json_encode(['products'=>$products]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}
