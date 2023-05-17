<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Sisven;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = DB::table('categories')
            ->select('categories.*')
            ->get();
        return json_encode(['categories' => $categories]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $categories = new Sisven();
        $categories->id = $request->id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->created_at = $request->created_at;
        $categories->updated_at = $request->updated_at;
        return json_encode(['categories' => $categories]);
    }

    /**
     * Display the specified resource.
     */
    public function show( $id)
    {
        //
        $categories = Sisven::find($id);
        return json_encode(['categories' => $categories]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $categories = Sisven::find($id);
        $categories->id = $request->id;
        $categories->name = $request->name;
        $categories->description = $request->description;
        $categories->created_at = $request->created_at;
        $categories->updated_at = $request->updated_at;
        $categories->save();
        return json_encode(['categories'=>$categories]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
        //
    }
}
