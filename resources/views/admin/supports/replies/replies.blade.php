@extends('admin.layouts.app')

@section('title', "Detalhes da Dúvida {$support->subject}")

@section('content')
<!-- component -->
<div class="flex justify-center min-h-screen">
    <div class="md:w-3/5 w-3/4 px-10 flex flex-col gap-2 p-5">
        <div class="flex justify-between">
            <h1 class="text-lg">Detalhes da Dúvida <b>{{ $support->subject }}</b></h1>
            <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                @csrf()
                @method('DELETE')
                <button type="submit" class="bg-red-500 hover:bg-red-400 text-white font-bold py-2 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
            </form>
        </div>
        <ul>
            <li>Status: <x-status-support :status="$support->status"/></li>
            <li>Descrição: {{ $support->body }}</li>
        </ul>

        <!-- Item Container -->
        <div class="flex flex-col gap-3 text-white">
            <div class="flex flex-col gap-4 dark:bg-gray-900 rounded p-4">
                <!-- Profile and Rating -->
                <div class="flex justify justify-between">
                    <div class="flex gap-2">
                        <div class="w-7 h-7 text-center rounded-full bg-red-500">CF</div>
                        <span>Nome do Usuário</span>
                    </div>
                </div>

                <div>
                    Algum texto de resposta aqui
                </div>

                <div class="flex justify-between">
                    <span>d/m/Y</span>
                </div>
            </div>

            <div class="flex flex-col gap-4 dark:bg-gray-900 rounded p-4">
                <!-- Profile and Rating -->
                <div class="flex justify justify-between">
                    <div class="flex gap-2">
                        <div class="w-7 h-7 text-center rounded-full bg-red-500">CF</div>
                        <span>Nome do Usuário</span>
                    </div>
                </div>

                <div>
                    Algum texto de resposta aqui
                </div>

                <div class="flex justify-between">
                    <span>d/m/Y</span>
                    <form action="{{ route('supports.destroy', $support->id) }}" method="post">
                        @csrf()
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-400 text-white py-1 px-4 border-b-4 border-red-700 hover:border-red-500 rounded">Deletar</button>
                    </form>
                </div>
            </div>

            <div class="py-4">
                <textarea
                    rows="2"
                    name="message"
                    placeholder="Sua resposta"
                    class="w-full resize-none rounded-md border border-[#e0e0e0] bg-white py-3 px-6 text-base font-medium text-[#6B7280] outline-none focus:border-[#6A64F1] focus:shadow-md"></textarea>
                    <button type="submit" class="hover:shadow-form rounded-md bg-[#6A64F1] py-3 px-8 text-base font-semibold text-white outline-none">
                    Enviar
                  </button>
            </div>


        </div>
    </div>
</div>

@endsection
