<?php

namespace App\Http\Controllers;

use App\Models\ClienteTpa;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class ClienteTpaController extends Controller
{
    //
    public function index()
    {
        $dados = ClienteTpa::with("tpa","cliente")->get();
        return view('gerir.create',["dados"=>$dados]);
    }
}
