<?php

namespace App\Http\Controllers;

use App\Models\Tpa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TpaController extends Controller
{
    //
    public function show()
    {
        return view('tpa.create');
    }
    public function store(Request $request)
    {
        $tpa = Tpa::create([
            "idPos"=> $request->idPos,
            "descricao"=> $request->descricao,
            "marca"=> $request->marca,
            "modelo"=> $request->modelo,
            "cor"=> $request->cor,
            "numero_serie"=> $request->numero_serie,
            "estado"=> $request->estado
        ]);
        if($tpa)
        {
            return redirect()->route('tpa.view')->with("sucess","Cadastrado com sucesso");
        }
        else
        {
            return redirect()->route('tpa.view')->with("error","Cadastrado sem sucesso");
        }
        return redirect()->route('tpa.view');
    }

    public function read ()
    {
        $tpa = Tpa::all();
        return view('tpa.read',["tpas"=>$tpa]);
    }
    public function delete ($id)
    {
        $tpa = Tpa::find($id);
        if($tpa->delete())
            return redirect()->route('tpa.read')->with("sucess","TPA eliminado");
        else
            return redirect()->route('tpa.read')->with("error","TPA eliminado");
    }
    public function updateView ($id)
    {
        $tpa = Tpa::find($id);
        if($tpa)
            return view('tpa.update',["tpa"=>$tpa]);
        else
            return view('tpa.update')->with("error","TPA update");
    }
    public function update ($id,Request $request)
    {
        $tpa = Tpa::find($id);
        if($tpa)
            {
                $newTpa = $tpa->update([
                    "idPos"=> $request->idPos,
                    "descricao"=> $request->descricao,
                    "marca"=> $request->marca,
                    "modelo"=> $request->modelo,
                    "cor"=> $request->cor,
                    "numero_serie"=> $request->numero_serie,
                    "estado"=> $request->estado
                ]);
                if($newTpa)
                {
                    return redirect()->route('tpa.updateView',$id)->with("sucess","Dados atualizado");
                }
                else
                {
                    return redirect()->route('tpa.updateView',$id)->with("error","Erro na atualização dos dados");
                }
            }
        else
            return view('tpa.updateView',$id)->with("error","Erro na atualização dos dados");
    }
}
