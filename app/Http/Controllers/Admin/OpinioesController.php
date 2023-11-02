<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\convidados;
use App\Models\reservas;
use App\Models\opinioes;


class OpinioesController extends Controller
{
    public function novaopiniao(string|int $id, reservas $res, Request $request){
        $data=$request->all();
        if($data['opiniao']=='opiniao'){
        $res=$res->where('id',$id)->first();
        return view('site/novaopiniao', compact('res'));
    }
    }
    public function novaopiniaopost( reservas $res, Request $request, opinioes $op){
        $data=$request->all();
        $op=$op->create($data);
        return view('site/obrigado');
    }
    
}
