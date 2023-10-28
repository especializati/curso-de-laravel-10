<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\convidados;
use App\Models\reservas;

class ConvidadosController extends Controller
{
    public function novoconvidado(string|int $id, reservas $res){
        $res=$res->where('id',$id)->first();
        return view('site/novoconvidado',compact('res')) ;
    }
    public function novosconvidados(string|int $id, reservas $res, convidados $cos,Request $request){
        $data=$request->all();
        dd($data);
        $cos=$cos->create($data);
        
        return view('site/convidados',compact('cos')) ;
    }
    public function verconvidados(string|int $id, reservas $res, convidados $cos,Request $request){
        $cos=$cos->where('id_festa',$id)->get();
        return view('site/verconvidados',compact('cos')) ;
    }
}
