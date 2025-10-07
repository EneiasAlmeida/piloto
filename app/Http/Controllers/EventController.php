<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class EventController extends Controller
{
    // LISTAGEM DE EVENTOS
    public function index(): View
    {
        $events = Event::orderBy('startDate', 'asc')->get();
        return view('event.index', compact('events'));
    }

    // FORMULÁRIO DE CRIAÇÃO
    public function create(): View
    {
        return view('event.create');
    }

    // SALVAR NOVO EVENTO
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:events,name',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
        ]);

        // Cria o evento com UUID automático
        Event::create($validated);

        // Redireciona para a listagem de eventos
        return redirect()
            ->route('event.index')
            ->with('success', 'Evento criado com sucesso!');
    }

    // FORMULÁRIO DE EDIÇÃO
    public function edit(string $code): View
    {
        $event = Event::findOrFail($code);
        return view('event.edit', compact('event'));
    }

    // ATUALIZAR EVENTO
    public function update(Request $request, string $code): RedirectResponse
    {
        $event = Event::findOrFail($code);

        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:events,name,' . $event->code . ',code',
            'location' => 'required|string|max:255',
            'description' => 'nullable|string|max:500',
            'startDate' => 'required|date',
            'endDate' => 'required|date|after_or_equal:startDate',
        ]);

        $event->update($validated);

        return redirect()
            ->route('event.index')
            ->with('success', 'Evento atualizado com sucesso!');
    }

    // EXCLUIR EVENTO
    public function destroy(string $code): RedirectResponse
    {
        $event = Event::findOrFail($code);
        $event->delete();

        return redirect()
            ->route('event.index')
            ->with('success', 'Evento excluído com sucesso!');
    }

    // FILTRAR EVENTOS
    public function filter(Request $request): View
    {
        $query = Event::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', "%{$request->name}%");
        }

        if ($request->filled('startDate')) {
            $query->whereDate('startDate', $request->startDate);
        }

        $events = $query->orderBy('startDate', 'asc')->get();

        return view('event.index', compact('events'));
    }

    // EXIBIR DETALHES DE UM EVENTO (opcional)
    public function show(string $code): View
    {
        $event = Event::findOrFail($code);
        return view('event.show', compact('event'));
    }
}
