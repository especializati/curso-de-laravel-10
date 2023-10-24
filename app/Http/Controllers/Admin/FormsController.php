<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Models\Forms;
use App\Models\foods;
use App\Models\Calendario;
use App\Models\reservas;

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
   public function RespostasAdmin(Request $request, Calendario $forms){
    $data= $request->all();
    $forms=$forms->all();
    if ($data['NovaAgenda']==='Agenda'){
        return view('site/agendaCRUD', compact('forms'));
    }
    else{
        return redirect()->route('fazerlogin.index');
    }
   }
   public function RespostasAdmin1(Request $request){
    $data= $request->all();
    if ($data['food']==='food'){
        return view('site/food');
    }
    else{
        return redirect()->route('fazerlogin.index');
    }
   }
   public function RespostasAdmin2(Request $request, reservas $res){
    $data= $request->all();
    $res=$res->all();
    if ($data['reservas']==='reservas'){
        return view('site/reservasadm',compact('res'));
    }
    else{
        return redirect()->route('fazerlogin.index');
    }
   }
   public function RespostasAniver(Request $request){
    $data= $request->all();
    if ($data['food']==='food'){
        return view('site/foodview');
    }
    else{
        return redirect()->route('fazerlogin.index');
    }
   }
   public function editdate(Request $request , Calendario $form, string|int $id){
    $form=$form->find($id);
    return view('site/editdate',compact('form'));
   }
   public function editaragenda(Request $request , Calendario $forms, string|int $id){
    $forms=$forms->where('id',$id)->first();
    $forms->update($request->only(['data','hora_inicial','hora_final']));
    $forms=$forms->all();
    return view('site/agendaCRUD',compact('forms'));

   }
   public function deleteagenda(Request $request , Calendario $forms, string|int $id){
    $forms=$forms->where('id',$id)->first();
    $forms->delete();
    $forms=$forms->all();
    return view('site/agendaCRUD',compact('forms'));

   }
   public function deletefood(Request $request , foods $forms, string|int $id){
    $forms=$forms->where('id',$id)->first();
    $forms->delete();
    $forms=$forms->all();
    return view('site/foodview',compact('forms'));

   }
   public function editfood(Request $request , foods $form, string|int $id){
    $form=$form->find($id);
    return view('site/editfood',compact('form'));
   }
   public function editarfood(Request $request , foods $forms, string|int $id){
    $forms=$forms->where('id',$id)->first();
    $data=$request->only(['Foto1','Foto2','Foto3']);
    $imageName1 = $request->titulo.'1.'.$request->Foto1->extension();
    $imageName2 = $request->titulo.'2.'.$request->Foto2->extension();
    $imageName3 = $request->titulo.'3.'.$request->Foto3->extension();

    // Public Folder
    $imagepath1=$request->file('Foto1')->storeAs('products', $imageName1);
    $imagepath2=$request->file('Foto2')->storeAs('products', $imageName2);
    $imagepath3=$request->file('Foto3')->storeAs('products', $imageName3);
    $data['Foto1']= $imagepath1;
    $data['Foto2']= $imagepath2;
    $data['Foto3']= $imagepath3;
    $forms->update($data);
    $forms->update($request->only(['titulo','lista_comidas','lista_bebidas','preço']));
    $forms=$forms->all();
    return view('site/foodview',compact('forms'));

   }
   
   public function login(){
    return view('site/login');
   }
   public function paginapublica(){
    return view('site/paginainicial');
   }
}
