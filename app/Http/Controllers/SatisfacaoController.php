<?php
// app/Http/Controllers/SatisfacaoController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SatisfacaoController extends Controller
{
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
