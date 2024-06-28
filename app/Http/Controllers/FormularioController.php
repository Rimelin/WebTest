<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Producto;

class FormularioController extends Controller
{
    public function index (){

        return view('formulario');
    } 

    public function create()
    {
        return view('formulario');
    }
    public function store(Request $request)
    {
        // Validación de datos del formulario
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'marca' => 'required|string|max:255',
            'fecha_de_creacion' => 'required|date',
            'costo' => 'required|numeric|min:0',
            'numero_disponible' => 'required|integer|min:0',
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', //Tamaño maximo y tipo que permite
        ]);

        // Subir la imagen
        $imageName = time().'.'.$request->foto->extension();  
        $request->foto->move(public_path('images'), $imageName);

        // Crear el producto en la base de datos
        Producto::create([
            'nombre' => $request->nombre,
            'categoria' => $request->categoria,
            'marca' => $request->marca,
            'fecha_de_creacion' => $request->fecha_de_creacion,
            'costo' => $request->costo,
            'numero_disponible' => $request->numero_disponible,
            'foto' => $imageName,
        ]);

        // Redireccionar con un mensaje de éxito
        return redirect()->back()->with('success', 'Producto subido correctamente.');
    }
}
