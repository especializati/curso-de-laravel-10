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
        $forms=$forms->all();
        return view('site/agendaCRUD',compact('forms'));
    
 
    }
    public function agendaCRUD(Calendario $forms, Request $request){
    
        $forms=$forms->all();
        return view('site/agendaCRUD',compact('forms'));
    
 
    }
    public function agenda(Calendario $forms){
        $forms=$forms->all();
        return view('site/agenda',compact('forms'));
    }
    public function novaagenda(Calendario $forms, Request $request){
        $data=$request->all();
        $forms=$forms->all();
        if($data['Agenda']==='Agenda'){
        return view('site/novocalendario');}
        else{
            return back();
        }
    }
    public function calendarioreserva(Calendario $forms, Request $request){
       
        $forms=$forms->all();
        return view('site/agendareserva',compact('forms'));
       
    }
}
