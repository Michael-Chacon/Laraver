<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PedidoController extends Controller
{
    public function pedido()
    {
        request()->validate([
            'nombre' => 'required',
            'direccion' => 'required',
            'id' => 'required|min:10'
        ], [
            'nombre.required' => 'Necesito tu nombre',
        ]);
        return 'Datos correctos';
    }
}
