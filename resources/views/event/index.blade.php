@extends('layouts.app')

@section('content')
<div class="max-w-6xl mx-auto p-6">



    {{-- MENSAGEM DE SUCESSO --}}
    @if (session('success'))
        <div class="bg-green-500 text-white p-3 rounded mb-4 text-center font-semibold">
            {{ session('success') }}
        </div>
    @endif

    {{-- TÍTULO E BOTÃO --}}
    <div class="flex justify-between items-center mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Eventos Cadastrados</h1>
        <a href="{{ route('event.create') }}" 
           class="bg-blue-600 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded shadow">
            + Novo Evento
        </a>
    </div>

    {{-- TABELA DE EVENTOS --}}
    <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100 dark:bg-gray-700 text-gray-800 dark:text-gray-200">
                <tr>
                    <th class="px-4 py-2 text-left">Nome</th>
                    <th class="px-4 py-2 text-left">Local</th>
                    <th class="px-4 py-2 text-left">Início</th>
                    <th class="px-4 py-2 text-left">Fim</th>
                    <th class="px-4 py-2 text-center w-32">Ações</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($events as $event)
                    <tr class="border-t hover:bg-gray-50 dark:hover:bg-gray-700">
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-100">{{ $event->name }}</td>
                        <td class="px-4 py-2 text-gray-800 dark:text-gray-100">{{ $event->location }}</td>
                        <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                            {{ \Carbon\Carbon::parse($event->startDate)->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-2 text-gray-600 dark:text-gray-300">
                            {{ \Carbon\Carbon::parse($event->endDate)->format('d/m/Y') }}
                        </td>
                        <td class="px-4 py-2 text-center flex justify-center gap-2">
                            {{-- EDITAR --}}
                            <a href="{{ route('event.edit', $event->code) }}" 
                               class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-1 rounded text-sm font-medium">
                                Editar
                            </a>

                            {{-- EXCLUIR --}}
                            <form action="{{ route('event.destroy', $event->code) }}" method="POST"
                                  onsubmit="return confirm('Tem certeza que deseja excluir este evento?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        class="bg-red-600 hover:bg-red-700 text-white px-3 py-1 rounded text-sm font-medium">
                                    Excluir
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-4 py-4 text-center text-gray-500 dark:text-gray-300">
                            Nenhum evento cadastrado.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
