<?php

namespace App\Http\Controllers;

use App\Models\ministerio_registos;
use App\Models\userministerios;
use App\Models\userminsterios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ministeriosController extends Controller
{
    //
    public function  MinisterioRegisto(){
        
    
        $ministerio_registos = ministerio_registos::all();

        $RegistosMinisterio = DB::table('ministerio_registos')->get();
        
        return view('/MinisteriosRegisto/ministerio', ['ministerio_registos'=> $ministerio_registos],
                                                    ['RegistosMinisterio'=>$RegistosMinisterio]
                                            );

    }

    public function storeMinisterioRegisto(Request $request){
        
        $registoMinisterio = new ministerio_registos;

        $registoMinisterio->novoMinisterio=$request->novoMinisterio;
        $registoMinisterio->finalidade=$request->finalidade;
        $registoMinisterio->responsavelMinisterio=$request->responsavelMinisterio;
        $registoMinisterio->responsavelAdjunto=$request->responsavelAdjunto;
        $registoMinisterio->SectorGeral=$request->SectorGeral;
        $registoMinisterio->SectorMinisterio=$request->SectorMinisterio;

        $request->validate([
            'novoMinisterio'=>'required',
            'finalidade'=>'required',
            'responsavelAdjunto'=>'required',
            'responsavelMinisterio'=>'required',
            'SectorGeral'=>'required',
            'SectorMinisterio'=>'required',
        ]);

        $registoMinisterio->save();

        return redirect('/MinisteriosRegisto/ministerio')->with('msg', 'Gravado com sucesso');

    }

    public function apagarMinisterioRegisto($id){

        ministerio_registos::findOrFail($id)->delete();
        return redirect('/MinisteriosRegisto/ministerio')->with('msg','Apagado com sucesso');

    }
    public function editarRegisto($id){
        
        $editar= ministerio_registos::findOrFail($id);

        return view('MinisteriosRegisto.editar', ['editar' => $editar]);
        
    }

    public function updateRegisto(Request $update){
    
        ministerio_registos::findOrFail($update->id)->update($update->all());

        return redirect('/MinisteriosRegisto/ministerio')->with('msg','Editado com sucesso');
    }

    public function detalhesMinisterio(){
        $registoSelect = DB::table('ministerio_registos')->get();
        $detalhesMinisterio = ministerio_registos::all();
        
        return view('/MinisteriosUser/detalhesMinisterio', ['detalhesMinisterio'=> $detalhesMinisterio],['registoSelect'=>$registoSelect]
    );


 

    }


    

    
    
}
