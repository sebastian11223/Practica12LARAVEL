<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function articulos() {
        return view('AdminMensaje')->with(['text' => 'Benvinguts a la pàgina articles']);
    }
    
    public function clientes() {
        return view('clientesVista')->with(['clientesMensaje' => 'Este es el mensaje de la pagina de clientes:']);
    }
    
    public function Facturacion() {
        return view('facturacionVista')->with(['variableFacturacion' => 'PAGINA FACTURACION']);
    }

    public function Contabilidad() {
        return view('Contabilidad')->with(['contabilidadView' => 'CONTABILIDAD page']);
    }
}
