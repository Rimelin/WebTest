<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class ArticuloController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Producto::query();

        // Filtrar por categoría
        if ($request->has('categoria')) {
            $query->where('Categoria', $request->input('categoria'));
        }

        // ...otros filtros y ordenaciones...
        if ($request->has('menora')) {
            $query->where('costo', '<=', $request->input('menora'));
        }
        if ($request->has('unicas')) {
            $query->where('numero_disponible', '=', $request->input('unicas'));
        }

        if ($request->has('ordermayor_by')) {
            $query->orderBy($request->input('ordermayor_by'), $request->input('order_direction', 'desc'));
        }
        if ($request->has('ordermenor_by')) {
            $query->orderBy($request->input('ordermenor_by'), $request->input('order_direction', 'asc'));
        }
        
        if ($request->has('order_by')) {
            $query->orderBy($request->input('order_by'), $request->input('order_direction', 'asc'));
        }

        $productos = $query->get();
        
        return view('articulos',compact('productos'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}