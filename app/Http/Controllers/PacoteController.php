<?php
// app/Http/Controllers/PacoteController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pacote; // Certifique-se de importar o modelo Pacote ou o modelo que você está utilizando

class PacoteController extends Controller
{
    // Método para exibir a visualização dos pacotes
    public function visualizarPacotes()
    {
        // Recupere todos os pacotes do banco de dados
        $pacote = Pacote::find($id);

        // Retorne a view com os pacotes
        return view('visualizar_pacotes', compact('pacotes'));
    }

    // Método para exibir o formulário de edição de um pacote específico
    public function editarPacote($id)
    {
        // Recupere o pacote do banco de dados com base no ID
        $pacote = Pacote::findOrFail($id);

        // Retorne a view com o pacote a ser editado
        return view('editar_pacote', compact('pacote'));
    }

    // Método para processar a atualização do pacote no banco de dados
    public function atualizarPacote(Request $request, $id)
    {
        // Valide os dados do formulário
        $request->validate([
            'campo1' => 'required',
            'campo2' => 'required',
            // Adicione outras regras de validação conforme necessário
        ]);

        // Atualize o pacote no banco de dados com base no ID
        $pacote = Pacote::findOrFail($id);
        $pacote->campo1 = $request->input('campo1');
        $pacote->campo2 = $request->input('campo2');
        // Atualize outros campos conforme necessário
        $pacote->save();

        // Redirecione de volta à visualização dos pacotes
        return redirect()->route('visualizar_pacotes')->with('success', 'Pacote atualizado com sucesso!');
    }

    // Método para excluir efetivamente o pacote do banco de dados
    public function excluir($id)
    {
        $pacote = Pacote::find($id);

        if ($pacote) {
            $pacote->delete();
            // Pode adicionar uma mensagem de sucesso se desejar
        } else {
            // Pode adicionar uma mensagem de erro se o pacote não for encontrado
        }

        // Redirecionar de volta à página de visualização de pacotes
        return redirect()->route('visualizar_pacotes');
    }
}


