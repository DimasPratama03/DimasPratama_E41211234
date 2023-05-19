<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function getAll()
    {
        $product = Product::all();
        return Response::json($product,200);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function getTik($id)
    {
        $product = Product::find($id);
        return Response::json($product,200);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function createTik(Request $request)
    {
        Product::create($request->all());

        return response()->json([
            'status' => 'ok',
            'message' => 'Tiket Berhasil ditambahkan!'
        ], 201); 
    }

    /**
     * Display the specified resource.
     */
    public function updateTik($id, Request $request)
    {
        Product::find($id)->update($request->all());
        return response()->json([
            'status' => 'ok',
            'message' => 'Tiket Berhasil diubah!'
        ], 201);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteTik($id)
    {
        Product::destroy($id);

        return response()->json([
            'status' => 'ok',
            'message' => 'Tiket Berhasil dihapus!'
        ], 201);

    }
}

