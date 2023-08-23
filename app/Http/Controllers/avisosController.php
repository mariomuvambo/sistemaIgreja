<?php

namespace App\Http\Controllers;

use App\Models\avisos;
use App\Models\User;
use App\Notifications\notificaUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;


class avisosController extends Controller
{
    //

    public function aviso(){
        $avisos = avisos::all();
        return view('/Avisos/aviso', ['avisos'=>$avisos]);

    }

    public function storeAviso(Request $request){

      

        $request->validate(
            [
                'tituloAviso'=>'required',
                'dataAviso'=>'required',
                'localAviso'=>'required',
                'dataRAviso'=>'required',
                'participanteAviso'=>'required',
                'horaAviso'=>'required',
                'descricaoAviso'=>'required',
            ]
            );

            if($this->isOnline()){
                
                $avisos = new avisos;
                $avisos->tituloAviso = $request->tituloAviso;
                $avisos->dataAviso = $request->dataAviso;
                $avisos->localAviso = $request->localAviso;
                $avisos->dataRAviso = $request->dataRAviso;
                $avisos->participanteAviso = $request->participanteAviso;
                $avisos->horaAviso = $request->horaAviso;
                $avisos->descricaoAviso = $request->descricaoAviso;

                $user = User::all();
                Notification::send($user, new notificaUser($request->tituloAviso,
                $request->dataAviso,
                $request->localAviso,
                $request->dataRAviso,
                $request->participanteAviso,
                $request->horaAviso,
                $request->descricaoAviso
             ));
                
                $avisos->save();

                return redirect()->back()->with('msg', 'Avisos enviado');
    
            }else{
                return redirect()->back()->withInput()->with('error','POR FAVOR CONECTE -SE A INTERNET');
            }
              
      
     

        return redirect('/Avisos/aviso')->with('msg','Gravado com sucesso');

    }
    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }

    public function listaAviso(){
        $avisos = avisos::all();        
        return view('/Avisos/listaAviso/lista', ['avisos'=>$avisos]);
        
        
    }
    public function apagar($id){

        avisos::findOrFail($id)->delete();

        return redirect('/Avisos/aviso')->with('msg','Apagado com sucesso');

    }

    public function editar($id){ 
        $editar= avisos::findOrFail($id);

        return view('Avisos.editar', ['editar' => $editar]);
    }
    
    public function update(Request $update){

        avisos::findOrFail($update->id)->update($update->all());

        return redirect('/Avisos/aviso')->with('msg','Editado com sucesso');
    }


    public function markAsRead($id){
        if($id){
            auth()->user()->notifications->where('id',$id)->markAsRead();
        }
        return back();
    }

    public function allRead(){
        
        auth()->user()->unreadNotifications->markAsRead();
        return back();
    }

    public function notificaUser(){ 

        if(auth()->user()){
            $user = User::first();
            $user->notify( new notificaUser($user));
        }
        dd('ok');
       
    }


  








   
}
