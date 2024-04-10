<?php

namespace App\Http\Controllers;

use App\Models\ImagenProducto;
use Illuminate\Http\Request;

class ImagenProductoController extends Controller
{
    public function index()
    {
        $imagenes = ImagenProducto::all();
        return response()->json($imagenes);
    }

    public function store(Request $request)
    {
        $imagen = ImagenProducto::create($request->all());
        return response()->json($imagen, 201);
    }

    public function show($id)
    {
        $imagen = ImagenProducto::findOrFail($id);
        return response()->json($imagen);
    }

    public function update(Request $request, $id)
    {
        $imagen = ImagenProducto::findOrFail($id);
        $imagen->update($request->all());
        return response()->json($imagen, 200);
    }

    public function destroy($id)
    {
        ImagenProducto::destroy($id);
        return response()->json(null, 204);
    }
}
