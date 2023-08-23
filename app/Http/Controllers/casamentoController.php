<?php

namespace App\Http\Controllers;

use App\Models\casamentos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class casamentoController extends Controller
{
    //
    

public function casamento(){
    $casamentos = casamentos::all();
    return view('/casamento/casamento',['casamentos'=>$casamentos]);
}

public function storeCasamento(Request $request){

    $casamento = new casamentos();

    $casamento->nome_noiva = $request->nome_noiva;
    $casamento->apelido_noiva = $request->apelido_noiva;
    $casamento->nacionalidade_noiva = $request->nacionalidade_noiva;
    $casamento->contacto_noiva = $request->contacto_noiva;
    $casamento->estado_civil_noiva = $request->estado_civil_noiva;
    $casamento->batizada = $request->batizada;
    $casamento->local_batizada = $request->local_batizada;
    $casamento->nucleo_noiva = $request->nucleo_noiva;

    $casamento->nome_noivo = $request->nome_noivo;
    $casamento->apelido_noivo = $request->apelido_noivo;
    $casamento->nacionalidade_noivo = $request->nacionalidade_noivo;
    $casamento->contacto_noivo = $request->contacto_noivo;
    $casamento->estado_civil_noivo = $request->estado_civil_noivo;
    $casamento->batizado = $request->batizado;
    $casamento->local_batizado = $request->local_batizado;
    $casamento->nucleo_noivo = $request->nucleo_noivo;
    $casamento->data_casamento = $request->data_casamento;

    $user = auth()->user();

    $casamento->user_id = $user->id;
    $casamento->save(); 

    return redirect('/casamento/casamentoDetaill');

}


public function casamentoDetaill(){
    $casamentos = casamentos::all();
    return view('/casamento/casamentoDetaill',['casamentos'=>$casamentos]);
}

public function showOneUser(){
    $user = auth()->user();
    $casamentos = $user->casamentos;
    return view('/casamento/casamentoDetaill', ['casamentos' => $casamentos]);
}
public function apagar($id){

    casamentos::findOrFail($id)->delete();

    return redirect('/casamento/casamentoDetaill')->with('msg','Apagado com sucesso');

}
public function editar($id){
    $editar= casamentos::findOrFail($id);

    return view('casamento.editar', ['editar' => $editar]);
} 

public function update(Request $update){

    casamentos::findOrFail($update->id)->update($update->all());

    return redirect('/casamento/casamentoDetaill')->with('msg','Editado com sucesso');
}


}
