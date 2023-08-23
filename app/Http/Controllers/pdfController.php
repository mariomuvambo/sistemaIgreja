<?php

namespace App\Http\Controllers;

use App\Models\dizimos;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\DB;

class pdfController extends Controller
{
    //
    public function viewImpresao(){
         $imprimirDizimo = dizimos::all();

        return view('/imprimir/imprimirDizimo',['imprimirDizimo'=>$imprimirDizimo]);
    }

    public function generateImpresao(){
       $imprimirDizimo = DB::table('dizimos')->get();
        $pdf = Pdf::loadView('/imprimir/gerarDizimo', ['imprimirDizimo'=>$imprimirDizimo]);
        return $pdf->stream();
    }


}
