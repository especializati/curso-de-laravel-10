@extends('master')

@section('content')
    <div class="p-8">
        <h1 class="text-3xl font-bold mb-6">Entrada na Festa</h1>
        

        <div class="mb-8">
            <h2 class="text-xl font-semibold mb-4">Lista de Convidados Confirmados</h2>
            <ul class="list-disc pl-6">
                @forelse($convidados as $convidado)
                @if($convidado->id_festa == $id)
                    <li class="mb-2">
                        <span class="text-gray-800">{{ $convidado->nome }}</span>
                        @if($convidado->presenca == true)
                            <span class="text-green-500 ml-2">(Chegou)</span>
                        @else
                            <form action="{{ route('convidados.update', ['id' => $convidado->id]) }}" method="post">
                                @csrf
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="presenca" value='1'>
                                <button type="submit" class="bg-blue-500 text-white px-3 py-1 rounded hover:bg-blue-700">Confirmar Chegada</button>
                            </form>
                        @endif
                    </li>
                @endif
                @empty
                    <li class="text-gray-600">Nenhum convidado confirmado.</li>
                @endforelse
            </ul>
        </div>

        <div>
            <h2 class="text-xl font-semibold mb-4">Resumo</h2>
            <p class="text-gray-800">Qtd. Chegaram: {{ $resumo['qtd_chegaram'] }} / Qtd. Confirmados: {{ $resumo['qtd_confirmados'] }}</p>
            <p class="text-gray-800">Pacote de Comida Escolhido: {{ $resumo['pacote_comida'] }}</p>
        </div>
    </div>
@endsection
