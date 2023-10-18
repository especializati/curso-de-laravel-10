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
    public function novareserva(Calendario $cal,foods $food, string|int $id){
        $food=$food->all();
        $cal=$cal->find($id);
        return view('site/fazerreserva',compact('cal','food'));

    }
    public function inserirreserva(Calendario $cal,foods $food, string|int $id){
         
        $cal=$cal->find($id);
        return view('site/fazerreserva',compact('cal','food'));

    }
}
