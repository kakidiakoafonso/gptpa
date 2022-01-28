<?php

namespace App\Http\Controllers;

use App\Models\Estabelecimento;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class EstabelecimentoController extends Controller
{
    //
    function index(Request $request)
    {
        $estabelecimento = Estabelecimento::all();
        return view("cliente.create",['estabelecimento'=>$estabelecimento]);
        // return view("Home",compact("estabelecimento"));
    }
    function create(Request $request)
    {
        $estabelecimento = Estabelecimento::create([
            "nome"=> $request->nome,
            "contacto"=> $request->contacto,
            "tipo_cliente"=> $request->tipo_cliente,
            // "data_criacao"=> $request->data_criacao,
            "provincia"=> $request->provincia,
            "municipio"=> $request->municipio,
            "endereco"=> $request->endereco,
            "iban"=> $request->iban
        ]);
        $res = $estabelecimento->save();
        if($res)
            return redirect()->route("home")->with("status","sucess");
        else
            return redirect()->route("home")->with("status","error");
    }

    function delete ($id)
    {
        $estabelecimento = Estabelecimento::find($id);

        if($estabelecimento->delete())
            return redirect()->route("home")->with("status","sucess");
        else
            return redirect()->route("home")->with("status","error");
    }

    function colaborador ()
    {
       return view('colaborador.create');
    }

}
