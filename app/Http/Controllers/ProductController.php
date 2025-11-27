<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Product::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
       'nombre' => 'required|string',
       'descripcion' => 'required|string',
       'precio' => 'required|numeric',
       'stock' => 'required|integer',
       'status' => 'boolean',
   ]);
   return Product::create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
       'nombre' => 'required|string',
       'descripcion' => 'required|string',
       'precio' => 'required|numeric',
       'stock' => 'required|integer',
       'status' => 'boolean',
   ]);
   $product->update($request->all());
   return $product;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product->delete(); return response()->json(['message' => 'Producto eliminado']);
    }

    public function activos() {
       return Product::where('status', true)->get();
   }
}
