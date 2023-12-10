<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote;

class PacoteController extends Controller
{
    protected $pacote;

    public function __construct(Pacote $pacote) 
    {
        $this->pacote = $pacote;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pacotes = $this->pacote->all();
        return view('pacotes', ['pacotes' => $pacotes]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        return view('pacotes_edit',['pacote' => $this->pacote->find($id)]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $updated = $this->pacote->where('id',$id)->update($request->except(['_token','_method']));

        if($updated){
            return redirect()->route('pacotes.index');
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
        //
    }
}