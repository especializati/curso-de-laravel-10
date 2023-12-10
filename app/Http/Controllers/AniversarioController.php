<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aniversario;

class AniversarioController extends Controller
{
    protected $aniversario;

    
    public function confirmarAniversario(Aniversario $aniversario)
    {
        // Lógica para confirmar o aniversário (por exemplo, definir um campo 'confirmado' no modelo)
        $aniversario->confirmado = true;
        $aniversario->save();

        return redirect()->route('aniversarios.index')->with('success', 'Aniversário confirmado com sucesso!');
    }



    
    public function __construct(Aniversario $aniversario) 
    {
        $this->aniversario = $aniversario;
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
        return view('aniversarios_create');
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
    public function update(Request $request, Aniversario $aniversario)
    {
        // Implement the logic to update a specific Aniversario instance

        $updated = $this->aniversario->where('id_festa',$id)->update($request);
        $aniversario->update($data);

        // Redirect to the index or show page with a success message
        return redirect()->back();
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






