<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;

class PedidoController extends Controller
{
    public function store(Request $request)
    {

        $pedido = new Pedido();
        $pedido->nombre = $request->nombre;
        $pedido->email = $request->email;
        $pedido->direccion = $request->direccion;
        $pedido->telefono = $request->telefono;
        $pedido->tipoDeEnvio = $request->metodo_Envio;
        $pedido->codigoPedido = 123;
        $pedido->save();

        return redirect()->route('index')
            ->with('success', 'Pedido realizado con éxito, en breve recibirás un email de confirmación.');;
    }
}
