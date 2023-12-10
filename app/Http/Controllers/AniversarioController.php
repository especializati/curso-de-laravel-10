<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aniversario;
use App\Models\Pacote;

class AniversarioController extends Controller
{
    protected $aniversario;
    protected $pacote;





    
    public function __construct(Aniversario $aniversario, Pacote $pacote) 
    {
        $this->aniversario = $aniversario;
        $this->pacote = $pacote;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $aniversarios = $this->aniversario->all();
        return view('aniversarios', ['aniversarios' => $aniversarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pacotes = $this->pacote->all();
        return view('aniversarios_create',['pacotes'=>$pacotes]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->aniversario->create([
            'idade_aniversariante' => $request->input('idade_aniversariante'),
            'nome_aniversariante' => $request->input('nome_aniversariante'),
            'n_convidados' => $request->input('n_convidados'),
            'pedido' => $request->input('pedido'),
            'id_festa' => $request->input('id_festa'),
            'data' => $request->input('data'),

        ]);

        if($created){
            return redirect()->route('aniversarios.index');
        }
            return redirect()->back()->with('message','Error');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Implement the logic to show a specific Aniversario instance
        $aniversario = $this->aniversario->findOrFail($id);
        return view('aniversario_show', ['aniversario' => $aniversario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        // Implement the logic to show the edit form for a specific Aniversario instance
        $aniversario = $this->aniversario->findOrFail($id);
        return view('aniversario_edit', ['aniversario' => $aniversario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->aniversario->where('id',$id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('aniversarios.index');
        }

        else{
            return redirect()->back()->with('msg','Error');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // Implement the logic to delete a specific Aniversario instance
        $aniversario = $this->aniversario->findOrFail($id);
        $aniversario->delete();

        // Redirect to the index page with a success message
        return redirect()->route('aniversarios.index')->with('success', 'Aniversario deleted successfully');
    }



    public function lista()
    {
        // Exemplo: Obtendo dados da reserva (ajuste conforme sua lógica)
        $reserva = Reserva::find(1); // Substitua 1 pelo ID da reserva que você deseja exibir

        // Lógica para obter dados da lista de satisfação, se necessário
        $dadosSatisfacao = [
            // Aqui você pode carregar os dados da lista de satisfação do seu modelo ou serviço
            // Exemplo: $dadosSatisfacao = Satisfacao::all();
        ];

        // Passando a variável $reserva para a view
        return view('pesquisa_satisfacao', compact('dadosSatisfacao', 'reserva'));
    }

}






