<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class clienteController extends Controller
{
    //
    public function view()
    {
        $clientes = cliente::with("endereco")->get();
        return dd($clientes);
        // return view('cliente.create');
    }
    public function create()
    {
        return view('cliente.create');
    }
    public function read()
    {
        return view('cliente.create');
    }
    public function update()
    {
        return view('cliente.create');
    }
    public function delete()
    {
        return view('cliente.create');
    }
}
