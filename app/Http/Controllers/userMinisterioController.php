<?php

namespace App\Http\Controllers;

use App\Models\aniversariantes;
use App\Models\avisos;
use App\Models\User;
use App\Models\userministerios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userMinisterioController extends Controller
{
    //

    // UserMinisterios

    public function Ministerio(){
             
        $userministerios = userministerios::all();
        return view('/MinisteriosUser/userMinisterio', ['userministerios' => $userministerios]  );
    }

    public function storeMinisterio(Request $ministerios){
      
        $minister = new userministerios;

       
        $minister->selecioneMinisterio = $ministerios->selecioneMinisterio;
        $minister->nome = $ministerios->nome;
        $minister->apelido = $ministerios->apelido;
        $minister->contacto = $ministerios->contacto;
        $ministerios->validate(
            [
                'selecioneMinisterio'=>'required',
                'nome'=>'required',
                'apelido'=>'required',
                'contacto'=>'required',

            ]
            );

        $user = auth()->user();

        $minister->user_id= $user->id;

        $minister->save();


        return redirect('/MinisteriosUser/userMinisterio')->with('Gravado com sucesso');

    }

    public function apagar($id){

        userministerios::findOrFail($id)->delete();

        return redirect('/MinisteriosUser/userMinisterio')->with('msg','Apagado com sucesso');

    }
    public function editar($id){
        
        $registoSelect = DB::table('ministerio_registos')->get();
        $editar= userministerios::findOrFail($id);
        return view('MinisteriosUser.editar', ['editar' => $editar],['registoSelect' => $registoSelect]
    );
        
    }

    public function update(Request $update){
    
        userministerios::findOrFail($update->id)->update($update->all());

        return redirect('/MinisteriosUser/userMinisterio')->with('msg','Editado com sucesso');
    }

    public function showOneUser(){
     

        $user = auth()->user();
        $userministerios = $user->userministerios;

        $registoSelect = DB::table('ministerio_registos')->get();

        return view('MinisteriosUser.userMinisterio', ['userministerios' => $userministerios], 
                                                     ['registoSelect' => $registoSelect]);
    }


    public function total(){
        
        $userministerio = userministerios::all();
        $userministerio = DB::table('userministerios')->get(); 

        $aniversariantes = aniversariantes::all();
        $aniversariantes = Db::table('aniversariantes')->get();


        // $users = User::all();
        return view('/Total/total', ['userministerio'=> $userministerio] , ['aniversariantes'=> $aniversariantes]);

    }


  

}
