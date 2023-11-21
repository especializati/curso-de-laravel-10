<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Convidado;

class ConvidadosController extends Controller
{
    protected $convidado;

    public function __construct(Convidado $convidado) {
        $this->convidado = $convidado;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $convidados = $this->convidado->all();
        return view('convidados', ['convidados' => $convidados]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('convidados_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $created = $this->convidado->create([
            'name' => $request->input('name'),
            'cpf' => $request->input('cpf'),
            'idade' => $request->input('idade'),
            'id_festa' => $request->input('id_festa'),

        ]);

        if($created){
            return redirect()->route('convidados.index');
        }
            return redirect()->back()->with('message','Error');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->convidado->where('id', $id)->delete();

        return redirect()->back()->with('message', 'Removido');
    }
}
