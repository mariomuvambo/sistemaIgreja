<?php

namespace App\Http\Controllers;

use App\Models\aniversariantes;
use App\Models\avisos;
use App\Models\casamentos;
use App\Models\User;
use App\Models\userministerios;
use Illuminate\Http\Request;

class usuarioController extends Controller
{
    //

    public function usuarios(){
        // $usuarios = aniversariantes::all();

        $search = request('search');

        if($search){
            $usuarios = User::where([
                ['email','like','%'.$search.'%']
            ])->paginate(10);  

        }else{
            $usuarios = User::orderBy('id','desc')->paginate(4);
            
        }


        // $ususarios = DB::table('users')->get();

        // $ususarios = User::where('usertype','user')->get();
        return view('Detalhes.usuarioDetalhes', ['usuarios'=>$usuarios], ['search'=>$search]);

     }
 
    // public function editar($id){
 
    //     $usuarioDetalhes= User::findOrFail($id);

    //     return view('Detalhes.usuarioDetalhes', ['usuarioDetalhes' => $usuarioDetalhes]);
        
    // }

    // public function update(Request $update){
    
    //     User::findOrFail($update->id)->update($update->all());

    //     return redirect('/Detalhes/usuarioDetalhes')->with('msg','Editado com sucesso');
    // }


    public function casamento(){

        $pesquisa = request('pesquisa');

        if($pesquisa){
            $casamentos = casamentos::where([
                ['contacto_noivo','like','%'.$pesquisa.'%']
            ])->paginate(10);  

        }else{
            $casamentos = casamentos::orderBy('id','desc')->paginate(4);
            
        }

        return view('Detalhes.casamento', ['casamentos'=>$casamentos], ['pesquisa'=>$pesquisa]);

    }

    public function aniversariante(){ 
   
        $pesquisar = request('pesquisar');

        if($pesquisar){
            $aniversariantes = aniversariantes::where([
                ['nome','like','%'.$pesquisar.'%']
            ])->paginate(10);  

        }else{
            $aniversariantes = aniversariantes::orderBy('id','desc')->paginate(4);
            
        }

        return view('Detalhes.aniversariante', ['aniversariantes'=>$aniversariantes], ['pesquisar'=>$pesquisar]);

    }



    public function inscritos(){
        $pesquisas = request('pesquisas');

        if($pesquisas){
            $inscritos = userministerios::where([
                ['nome','like','%'.$pesquisas.'%']
            ])->paginate(10);  

        }else{
            $inscritos = userministerios::orderBy('id','desc')->paginate(4);
            
        }

        return view('Detalhes.incritosMinisterio', ['inscritos'=>$inscritos], ['pesquisas'=>$pesquisas]);

    }

    public function avisos(){
        $pesquisa1 = request('pesquisa1');

        if($pesquisa1){
            $avisos = avisos::where([
                ['tituloAviso','like','%'.$pesquisa1.'%']
            ])->paginate(10);  

        }else{
            $avisos = avisos::orderBy('id','desc')->paginate(4);
        }
    
        return view('Modal.avisos', ['avisos'=>$avisos], ['pesquisa1'=>$pesquisa1]);

    }



   












}
