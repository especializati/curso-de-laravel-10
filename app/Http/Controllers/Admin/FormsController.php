<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forms;

class FormsController extends Controller
{
    public function formulario(Forms $formu){
        $formul= $formu->all();
        return view('site/formulario', compact('formul'));
    }
   public function cadastro(){
    return view('site/cadastro');
   }
   public function cadastrar(Request $request, Forms $formu){
    $data= $request->all();
    $data['status']='a';
    $formu=$formu->create($data);
    return redirect()->route('formulario.index');

   }
}
