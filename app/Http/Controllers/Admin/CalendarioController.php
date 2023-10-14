<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Calendario;
class CalendarioController extends Controller
{
    public function inseriragenda(Calendario $forms, Request $request){
        $data=$request->all();
        $forms=$forms->create($data);
        return redirect()->route('formulario.index');
 
    }
    public function agenda(Calendario $forms){
        $forms=$forms->all();
        return view('site/agenda',compact('forms'));
    }
}
