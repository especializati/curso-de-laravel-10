<?php
// app/Http/Controllers/OperacionalController.php
use Illuminate\Support\Facades\DB;
use App\Models\Aniversario;
use App\Models\Convidado;

class OperacionalController extends Controller
{
    protected $convidado;

    public function __construct(Convidado $convidado) 
    {
        $this->convidado = $convidado;
    }


    public function entradaFesta()
    {
        $convidados = $this->convidado->all();

        return view('operacional.entrada_festa', ['convidados' => $convidados]);
    }

    public function confirmarChegada(Request $request ,string $id){
        $updated = $this->convidado->where('id',$id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->back();
        }

        else{
            return redirect()->back()->with('msg','Error');
        }

    }


    public function proximasFestas()
    {
        $proximasFestas = Reserva::where('data', '>=', now()->format('Y-m-d'))
            ->orderBy('data', 'asc')
            ->orderBy('hora', 'asc')
            ->get();

        return view('operacional.proximas_festas', compact('proximasFestas'));
    }







}

