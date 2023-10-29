<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\foods;
use App\Models\reservas;

class FoodsController extends Controller
{
    public function foodintro(Request $request, foods $forms){
        $data=$request->all();
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
        $forms=$forms->create($data);
        $forms=$forms->all();
        return view('site/foodview', compact('forms'));
    }

    public function foodsview(foods $forms , Request $request){
        $forms=$forms->all();
        $data= $request->all();
        if ($data['food']==='food'){
            return view('site/foodview',compact('forms')); 
        }
        else{
            return redirect()->route('fazerlogin.index');
        }
    }
    public function foodaniversariante(foods $forms , Request $request){
        $forms=$forms->all();
        $data= $request->all();
        if ($data['food']==='food'){
            return view('site/foodaniversariante',compact('forms')); 
        }
        else{
            return redirect()->route('fazerlogin.index');
        }
    }
    public function verpacotedecomida(foods $food, string|int $id, reservas $res){
        $res=$res->where('id',$id)->first();
        $food=$food->where('titulo', $res['titulocomida'])->first();
        return view('site/verpacotedecomida', compact('food','res'));
    }
    public function mudarcomida(foods $food, string|int $id,string|int $titulo,reservas $res){
        $data1=$food->where('titulo',$titulo)->first();
        $data2=$food->all();
        $data3= $res->where('id',$id)->first();
        return view('site/mudarcomida',compact('data1','data2','data3'));
    }
    public function alterarcomida(foods $food, string|int $id,string|int $titulo,reservas $res, Request $request){
        $res=$res->where('id',$id)->first();
        $food=$food->where('titulo',$titulo)->first();
        $res['titulocomida']=$food['titulo'];
        $res->update();
        $food=$food->where('titulo', $res['titulocomida'])->first();
        return view('site/verpacotedecomida', compact('food','res'));
}}
