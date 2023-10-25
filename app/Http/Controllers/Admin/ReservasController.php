<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Forms;
use App\Models\foods;
use App\Models\Calendario;
use App\Models\reservas;

class ReservasController extends Controller
{
    public function novareserva(Calendario $cal,foods $food, string|int $id,string|int $nome, Forms $usu){
        $food=$food->all();
        $usu=$usu->where('nome',$nome)->first();
        $cal=$cal->find($id);
        return view('site/fazerreserva',compact('cal','food','usu'));

    }
    public function inserirreserva(Calendario $cal,foods $food, string|int $id, reservas $res, Request $request,string|int $nome, Forms $usu){
        $cal=$cal->where('id',$id)->first();
        $cal=$cal->only(['data','hora_inicial','hora_final']);
        $foods=$request->only(['titulocomida']);
        $data= $request->only(['status']);
        $data['status']='pendente';
        $forms= $request->only(['login','titulocomida','idadeaniversariante','nomeaniversariante','numeroconvidados']);
        $res=$res->create(array_merge($forms,$cal,$data));
        $res=$res->where('login',$nome)->get();
        return view('site/verreservas',compact('res'));
       

    }
    public function aprovar(reservas $res,string|int $id, Calendario $cal){
       $res=$res->where('id',$id)->first();
       $res['status']='aprovado';
       $res->update();
       $cal=$cal->all();
       foreach($cal as $cal){
        if($cal->data===$res['data'] && $cal->hora_inicial===$res['hora_inicial'] && $cal->hora_final===$res['hora_final']){
            $cal->delete();
        }
       }
       $res=$res->all();
       return view('site/reservasadm',compact('res'));
    }
    public function negar(reservas $res, string|int $id){
        $res=$res->where('id',$id)->first();
       $res['status']='negado';
       $res->update();
       $res=$res->all();
       return view('site/reservasadm',compact('res'));
      
        
 
     }
     public function verreserva(string|int $nome,reservas $res){
        $res=$res->where('login',$nome)->get();
        return view('site/verreservas',compact('res'));
     }
}
