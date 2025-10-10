@extends('layouts.app')

@section('content')
<div class="max-w-5xl mx-auto mt-10 p-8 bg-neutral-800 text-white rounded-lg shadow-lg">

    <h1 class="text-3xl font-bold text-red-500 text-center mb-8">Editar Evento</h1>

    {{-- Mensagem de erro de validação --}}
    @if ($errors->any())
        <div class="bg-red-600 text-white p-4 rounded mb-6">
            <ul class="list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li class="text-sm">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('event.update', $event->code) }}" method="POST" class="space-y-6">
        @csrf
        @method('PUT')

        {{-- Nome do Evento --}}
        <div>
            <label class="block font-bold text-red-500 mb-1">Nome do Evento</label>
            <input type="text" name="name" value="{{ old('name', $event->name) }}" required
                class="w-full p-2 rounded bg-neutral-700 border border-neutral-600 focus:ring focus:ring-red-500">
        </div>

        {{-- Local --}}
        <div>
            <label class="block font-bold text-red-500 mb-1">Local</label>
            <input type="text" name="location" value="{{ old('location', $event->location) }}" required
                class="w-full p-2 rounded bg-neutral-700 border border-neutral-600 focus:ring focus:ring-red-500">
        </div>

        {{-- Datas --}}
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block font-bold text-red-500 mb-1">Data Inicial</label>
                <input type="date" name="startDate" value="{{ old('startDate', $event->startDate) }}" required
                    class="w-full p-2 rounded bg-neutral-700 border border-neutral-600 focus:ring focus:ring-red-500">
            </div>
            <div>
                <label class="block font-bold text-red-500 mb-1">Data Final</label>
                <input type="date" name="endDate" value="{{ old('endDate', $event->endDate) }}" required
                    class="w-full p-2 rounded bg-neutral-700 border border-neutral-600 focus:ring focus:ring-red-500">
            </div>
        </div>

        {{-- Descrição --}}
        <div>
            <label class="block font-bold text-red-500 mb-1">Descrição</label>
            <textarea name="description" rows="5"
                class="w-full p-2 rounded bg-neutral-700 border border-neutral-600 focus:ring focus:ring-red-500">{{ old('description', $event->description) }}</textarea>
        </div>

        {{-- Botões --}}
        <div class="flex space-x-4 mt-6">
            <button type="submit"
                class="bg-green-600 hover:bg-green-700 px-6 py-2 rounded font-bold transition duration-200">
                Salvar Alterações
            </button>

            <a href="{{ route('event.index') }}"
                class="bg-gray-600 hover:bg-gray-700 px-6 py-2 rounded font-bold transition duration-200">
                Cancelar
            </a>
        </div>
    </form>
</div>
@endsection
