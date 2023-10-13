<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
    $data['senha'] = Hash::make($data['senha']);
    $formu=$formu->create($data);
    return redirect()->route('formulario.index');

   }
   public function fazerlogin(Request $request, Forms $formu ){
    $formu= $formu->all();
    $data= $request->all();
    foreach($formu as $forms){
        if($data['nome']==$forms->nome && Hash::check($data['senha'],$forms->senha) ){
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
   public function RespostasAdmin(Request $request){
    $data= $request->all();
    if ($data['NovaAgenda']==='Agenda'){
        return view('site/novocalendario');
    }
    else{
        return redirect()->route('fazerlogin.index');
    }
   }
   
   public function login(){
    return view('site/login');
   }
}
