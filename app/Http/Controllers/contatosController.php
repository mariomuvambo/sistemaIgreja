<?php

namespace App\Http\Controllers;

use App\Models\contatos;
use Illuminate\Http\Request;

class contatosController extends Controller
{
    //
    public function contactos(){

        $contactos = contatos::all();
        return view('/contactos_igreja/contactos',['$contacto'=>$contactos]);

    }
    public function storeContactos(Request $contato){
        $contatos = new contatos();

        $contatos->nome = $contato->nome;
        $contatos->apelido = $contato->apelido;
        $contatos->email = $contato->email;
        $contatos->contacto = $contato->contacto;
        $contatos->descricao = $contato->descricao; 
        
        $contatos->save();

        return redirect('/contactos_igreja/contactos')->with('msg','Registado com sucesso');

    }

    public function send(Request $request){

        $request->validate([
            'nome'=>'required',
            'apelido'=>'required',
            'email'=>'required|email',
            'contacto'=>'required',
            'descricao'=>'required'

        ]);
        
        if($this->isOnline()){
            $email_data = [
            'recipient'=> 'mariomuvambo1@gmail.com',
            'fromEmail'=>$request->email,
            'fromName'=>$request->nome,
            'fromApelido'=>$request->apelido,
            'fromContacto'=>$request->contacto,
            'body'=>$request->descricao
            ];

            \Mail::send('email-template', $email_data, function($message) use ($email_data){
                $message->to($email_data['recipient'])
                        ->from($email_data['fromEmail'],$email_data['fromName'])
                        ->subject($email_data['fromApelido']);
                        


            });

            return redirect()->back()->with('sucess', 'Email enviado');

        }else{
            return redirect()->back()->withInput()->with('error','POR FAVOR CONECTE -SE A INTERNET');
        }

    }

    public function isOnline($site = "https://youtube.com/"){
        if(@fopen($site,"r")){
            return true;
        }else{
            return false;
        }
    }



}
