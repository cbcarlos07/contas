<?php

namespace App\Http\Controllers;

use App\ContasPagar;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\DB;
class ContasPagarController extends Controller
{
    public function listar(){
       // $contas_pagar = DB::select('SELECT * FROM contas_pagar');
        $contas_pagar = ContasPagar::all();
        return view( 'listar' )->with('contas_pagar', $contas_pagar);
    }

    public function cadastro(){
        return view ('cadastro');
    }
}
