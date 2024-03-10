<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carrito;
use App\Models\Catalogo;

class CarritoController extends Controller
{

    public function store(Request $request) // guardar un producto al carrito
    {
        $request->validate([
            'id' => 'required|exists:catalogos,id',
            'cantidad' => 'required|integer|min:1',
        ]);

        $carrito = new Carrito();
        $carrito->catalogo_id = $request->id;
        $carrito->cantidad = $request->cantidad;
        $carrito->save();

        return redirect()->route('productos')
            ->with('success', 'Producto añadido al carrito.');
    }

    public function update(Request $request, $id)
    {
        $cantidad = $request->cantidad;

        // Validar la cantidad
        if ($cantidad <= 0) {
            return redirect()->back()->with('error', 'La cantidad debe ser mayor que cero.');
        }

        // Buscar el producto en el carrito
        $carrito = Carrito::find($id);

        // Verificar si el producto existe en el carrito
        if (!$carrito) {
            return redirect()->back()->with('error', 'El producto no existe en el carrito.');
        }

        // Actualizar la cantidad del producto
        $carrito->cantidad = $cantidad;
        $carrito->save();

        return redirect()->route('carrito')->with('success', 'Cantidad actualizada exitosamente.');
    }


    public function destroy($id) // quitar un producto del carrito
    {
        $producto = Carrito::find($id)->delete();

        return redirect()->route('carrito')
            ->with('success', 'Producto eliminado del carrito');
    }
}
