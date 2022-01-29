<?php

namespace App\Http\Controllers;

use App\Models\cliente;
use App\Models\endereco;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class clienteController extends Controller
{
    //
    public function view()
    {
        // $clientes = cliente::with("endereco")->get();
        // return dd($clientes);
        return view('cliente.create');
    }
    public function create(Request $request)
    {
        $cliente = cliente::create([
            "nome"=> $request->nome,
            "tipo"=> $request->tipo,
            "codigo_agencia"=> $request->codigo_agencia,
            "numero_conta"=> $request->numero_conta,
            "contacto_1"=> $request->contacto_1,
            "contacto_2"=> $request->contacto_2
        ]);
        if($cliente)
        {
            $endereco = endereco::create([
                "endereco"=> $request->endereco,
                "municipio"=> $request->municipio,
                "provincia"=> $request->provincia,
                "user_id"=> $cliente->id,
            ]);
            if($endereco)
                return redirect()->route('cliente.view')->with("sucess","Cadastrado com sucesso");
            else
                return redirect()->route('cliente.view')->with("erro","Cadastro com erro");
        }
        else
            return redirect()->route('cliente.view')->with("erro","Cadastro com erro, cliente nao cadastrado");

    }

    public function read()
    {
        $cliente = cliente::with('endereco')->get();
        return view('cliente.read',["clientes"=>$cliente]);
    }
    public function updateShow($id)
    {
        $cliente = cliente::findByid($id);
        return view('cliente.update');
    }
    public function update($id)
    {
        return view('cliente.update');
    }
    public function delete($id)
    {
        return view('cliente.create');
    }
}
