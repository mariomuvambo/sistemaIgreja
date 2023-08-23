<?php

namespace App\Http\Controllers;

use App\Models\aniversariantes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class aniversariantesController extends Controller
{
    // 
    // Aniversariante

    public function aniversariante()
    {
        $aniversariantes = aniversariantes::all();
        return view('/Aniversariantes/aniversariante', ['aniversariantes' => $aniversariantes]);
    }

    // totalAniversariantes
    public function totalAniversariantes()
    {
       
   
        // $aniversariantes = aniversariantes::all();
        $aniversariantes = aniversariantes::orderBy('id','desc')->paginate(3);
        return view('/Total/aniversariantes', ['aniversariantes' => $aniversariantes]);
    }

    public function storeAniversario(Request $request)
    {

        $request->validate(
            [
                'nome'=>'required',
                'apelido'=>'required',
                'sexo'=>'required',
                'data_aniversario'=>'required',
                'image'=>'required|image'
            ]
            );

        $registo = new  aniversariantes;

        $registo->nome = $request->nome;
        $registo->apelido = $request->apelido;
        $registo->sexo = $request->sexo;
        $registo->data_aniversario = $request->data_aniversario;


        if ($request->hasFile('image') && $request->file('image')->isValid()) {
            $requestImage = $request->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtok('now') . "." . $extension);

            $requestImage->move(public_path('img/foto_aniversario'), $imageName);

            $registo->image = $imageName;
        }

        $user = auth()->user();
 
        $registo->user_id = $user->id;
  
        $registo->save();

        return redirect('/Aniversariantes/aniversariante')->with('msg', 'Registado com sucesso');
    }

    public function showOneUser()
    {
        $user = auth()->user();
        $aniversariantes = $user->aniversariantes;
        return view('Aniversariantes.aniversariante', ['aniversariantes' => $aniversariantes]);
    }
    public function apagar($id)
    {

        aniversariantes::findOrFail($id)->delete();
        return redirect('/Aniversariantes/aniversariante')->with('msg', 'Apagado com sucesso');
    }
    public function editar($id)
    {
        $editar = aniversariantes::findOrFail($id);
        // 
        return view('Aniversariantes.editar', ['editar' => $editar]);
    }
    public function update(Request $update)
    {

        $data = $update->all();

        if ($update->hasFile('image') && $update->file('image')->isValid()) {
            $requestImage = $update->image;

            $extension = $requestImage->extension();

            $imageName = md5($requestImage->getClientOriginalName() . strtok('now') . "." . $extension);

            $requestImage->move(public_path('img/foto_aniversario'), $imageName);

            $data['image'] = $imageName;
        }

        aniversariantes::findOrFail($update->id)->update($data);

        return redirect('/Aniversariantes/aniversariante')->with('msg', 'Editado com sucesso');
    }


    // pesquidaDATA aniversario

    public function filtrar(Request $request)
    {
    
      
            $dataInicio = $request->dataInicio;
            $dataFim = $request->dataFim;

            $aniversariantes = aniversariantes::whereDate('data_aniversario', '>=', $dataInicio)
                ->whereDate('data_aniversario', '<=', $dataFim)
                ->get();

        
        return view('/Total/aniversariantes', ['aniversariantes' => $aniversariantes]);
    }
}
