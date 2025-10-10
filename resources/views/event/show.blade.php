@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 p-8 bg-neutral-800 text-white rounded-lg shadow-lg">

    <h1 class="text-3xl font-bold text-red-500 text-center mb-8">Detalhes do Evento</h1>

    {{-- Mensagem caso não exista evento --}}
    @if (!$event)
        <div class="bg-red-600 text-white p-4 rounded mb-6">
            Evento não encontrado.
        </div>
    @endif

    {{-- Informações do evento --}}
    <div class="space-y-6">

        <div>
            <p class="font-bold text-red-500 mb-1">Nome do Evento:</p>
            <p class="bg-neutral-700 p-2 rounded border border-neutral-600">{{ $event->name }}</p>
        </div>

        <div>
            <p class="font-bold text-red-500 mb-1">Local:</p>
            <p class="bg-neutral-700 p-2 rounded border border-neutral-600">{{ $event->location }}</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <p class="font-bold text-red-500 mb-1">Data Inicial:</p>
                <p class="bg-neutral-700 p-2 rounded border border-neutral-600">{{ \Carbon\Carbon::parse($event->startDate)->format('d/m/Y') }}</p>
            </div>
            <div>
                <p class="font-bold text-red-500 mb-1">Data Final:</p>
                <p class="bg-neutral-700 p-2 rounded border border-neutral-600">{{ \Carbon\Carbon::parse($event->endDate)->format('d/m/Y') }}</p>
            </div>
        </div>

        <div>
            <p class="font-bold text-red-500 mb-1">Descrição:</p>
            <p class="bg-neutral-700 p-4 rounded border border-neutral-600">{{ $event->description }}</p>
        </div>

        <div>
            <p class="font-bold text-red-500 mb-1">Status:</p>
            <p class="bg-neutral-700 p-2 rounded border border-neutral-600">{{ $event->status ?? 'Agendado' }}</p>
        </div>

        {{-- Botões --}}
        <div class="flex space-x-4 mt-6">
            <a href="{{ route('event.index') }}"
                class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded font-bold transition duration-200">
                Voltar
            </a>
           
        </div>

    </div>

</div>
@endsection
