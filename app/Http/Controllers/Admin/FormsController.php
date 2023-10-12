<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Forms;

class FormsController extends Controller
{

    public function formulario(Forms $formu){
        $formu= $formu->all();
        return view('site/formulario', compact('formu'));
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
   public function fazerlogin(Request $request, Forms $formu ){
    $formu= $formu->all();
    $data= $request->all();
    foreach($formu as $forms){
        if($data['nome']===$forms->nome && $data['senha']===$forms->senha ){
            if($forms->status==='a'){
            return view('site/pagina1', compact ('forms'));
    
        }
            if($forms->status==='d'){
                return view('site/admnistrativo');

            }
        
        }
       
    }
   
        return redirect()->route('login.index');
     
}
   
   
   public function login(){
    return view('site/login');
   }
}
