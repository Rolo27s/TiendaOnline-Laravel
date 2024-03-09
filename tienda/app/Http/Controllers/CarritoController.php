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

    public function update($id, $cantidad) // parámetros sujetos a cambios si es necesario
    {
        // TODO: Actualizar cantidad de un producto.

        // En caso de que un producto ya esté en el carrito y se intente añadir de nuevo, se actualiza
        // la cantidad actual de la base de datos sumándole la cantidad que el usuario quiera añadir
    }

    public function destroy($id) // quitar un producto del carrito
    {
        $producto = Carrito::find($id)->delete();

        return redirect()->route('carrito')
            ->with('success', 'Producto eliminado del carrito');
    }
}
