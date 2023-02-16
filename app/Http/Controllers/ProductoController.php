<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index()
    {
        $Producto = Producto::paginate();
        return view("Productos.index", compact('Producto'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);

        $pr = Producto::create($request->all());
        return redirect()->route('producto.principal')->with('success', 'Product created successfully.');
    }

    public function update(Request $request, Producto $product)
    {
        $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required',
            'price' => 'required|numeric',
            'stock' => 'required|integer'
        ]);
        $product->update($request->all());
        return redirect()->route('producto.principal')->with('success', 'Producto actualizado ');
    }

    public function destroy(Producto $producto)
    {
        $producto->delete();
        return redirect()->route('producto.principal')->with('success', 'Producto eliminado');
    }
}
