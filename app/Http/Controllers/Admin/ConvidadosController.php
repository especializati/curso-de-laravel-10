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
       
        foreach($request->input('nome_convidado') as $key=>$value){
            convidados::create([
                'nome_convidado' => $request->input('nome_convidado')[$key],
                'id_festa'=>$request->input('id_festa')[$key],
                'idade'=>$request->input('idade')[$key],
                'CPF'=>$request->input('CPF')[$key],
                'status'=>'confirmado',

                // etc
            ]);
        }

       
        
        return view('site/convidados') ;
    }
    public function verconvidados(string|int $id, reservas $res, convidados $cos,Request $request){
        $cos=$cos->where('id_festa',$id)->get();
        return view('site/verconvidados',compact('cos')) ;
    }
    public function deleteconvidado(string|int $id,string|int $id_festa, convidados $cos){
        $cos=$cos->where('id',$id)->first();
        $cos->delete();
        $cos=$cos->where('id_festa',$id_festa)->get();
        return view('site/verconvidados',compact('cos')) ;
    }
    public function convidadosoperacional(string|int $id, convidados $cos, reservas $res){
        $cos=$cos->where('id_festa',$id)->get();
        $res=$res->where('id',$id)->get();
        return view('site/verconvidadosoperacional',compact('cos','res')) ;
    }
    public function aprovarconvidado(string|int $id,string|int $id_festa, convidados $cos, reservas $res){
        $cos=$cos->where('id',$id)->first();
        $cos['status']='presente';
        $cos->update();
        $cos=$cos->where('id_festa',$id_festa)->get();
        return view('site/verconvidadosoperacional',compact('cos')) ;
    }
}
