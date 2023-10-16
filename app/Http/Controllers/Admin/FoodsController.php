<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\foods;

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
}
