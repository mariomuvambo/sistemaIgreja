<?php

namespace App\Http\Controllers;

use App\Models\dizimos;
use App\Models\ofertas;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class financaController extends Controller
{
    //FINANCAS

    public function index(){
        return view('/financas/financa');
    }

    // DIZIMO
    public function dizimo(){
        $dizimos = dizimos::all();
        return view('/dizimo/dizimo',['dizimos'=>$dizimos]);

    }
    public function storeDizimo(Request $request){
        $ofertas = new dizimos(); 
       
        $ofertas->dataDizimo = $request->dataDizimo;
        $ofertas->valorDizimo = $request->valorDizimo;
        $ofertas->descricaoDizimo = $request->descricaoDizimo;

        $request->validate(
            [
                'dataDizimo'=>'required',
                'valorDizimo'=>'required',
                'descricaoDizimo'=>'required',
                

            ]
            );

        $ofertas->save();
        return redirect('/dizimo/dizimo')->with('msg','Gravado com sucesso');

    }

    public function apagarDizimo($id){

        dizimos::findOrFail($id)->delete();

        return redirect('/dizimo/dizimo')->with('msg','Apagado com sucesso');

    }

    public function editarDizimo($id){
        
        $editar= dizimos::findOrFail($id);

        return view('/dizimo/editarDizimo', ['editar' => $editar]);
        
    }
    public function updateDizimo(Request $update){

    
        dizimos::findOrFail($update->id)->update($update->all());

        return redirect('/dizimo/dizimo')->with('msg','Editado com sucesso');
    }


    // OFERTA
    public function oferta(){ 
        $ofertas = ofertas::all();

        return view('/ofertas/oferta', ['ofertas'=>$ofertas]);
    }

    public function storeOferta(Request $request){
        $ofertas = new ofertas; 
        $ofertas->nome = $request->nome;
        $ofertas->apelido = $request->apelido;
        $ofertas->data = $request->data;
        $ofertas->valor = $request->valor; 
        $ofertas->descricao = $request->descricao;

        $request->validate([
            'nome'=>'required',
            'apelido'=>'required',
            'data'=>'required',
            'valor'=>'required',
            'descricao'=>'required',
        ]);

        $ofertas->save();
        return redirect('/ofertas/oferta')->with('msg','Gravado com sucesso');

    }

    public function apagar($id){

        ofertas::findOrFail($id)->delete();

        return redirect('/ofertas/oferta')->with('msg','Apagado com sucesso');

    }

    public function editar($id){
        
        $editar= ofertas::findOrFail($id);

        return view('/ofertas/editar', ['editar' => $editar]);
        
    }

    public function update(Request $update){

    
        ofertas::findOrFail($update->id)->update($update->all());

        return redirect('/ofertas/oferta')->with('msg','Editado com sucesso');
    }

    // NEGOCIO
    public function Negocio(){
        $financaOferta = ofertas::all();
        $financaDizimo = dizimos::all();

       

        return view('/Negocio/financas', 
               ['financaOferta'=> $financaOferta],
               ['financaDizimo'=>$financaDizimo],
    );
    }

    public function imprimirDizimo(){
        return view('/imprimir/imprimirDizimo');
    }


}
