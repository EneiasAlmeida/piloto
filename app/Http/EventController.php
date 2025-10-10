<?php

namespace App\Http\Controllers;

use App\Http\Repositories\EventRepository;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Event;                       // <<--- IMPORTAÇÃO NECESSÁRIA
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function __construct(private EventRepository $repository) {}

    /**
     * Lista eventos (com filtros opcionais)
     */
    public function index(Request $request): View
    {
        $query = Event::query();

        if ($request->filled('name')) {
            $query->where('name', 'like', '%' . $request->name . '%');
        }

        if ($request->filled('location')) {
            $query->where('location', 'like', '%' . $request->location . '%');
        }

        if ($request->filled('startDate')) {
            $query->whereDate('startDate', '>=', $request->startDate);
        }

        if ($request->filled('endDate')) {
            $query->whereDate('endDate', '<=', $request->endDate);
        }

        $events = $query->orderBy('startDate', 'asc')->get();

        return view('event.index', compact('events')); // certifique-se que resources/views/event/index.blade.php existe
    }

    /**
     * Alias / reutilização para listagem (se ainda usar essa rota)
     */
    public function listagem(Request $request): View
    {
        return $this->index($request);
    }

    /**
     * Formulário de criação
     */
    public function create(): View
    {
        return view('event.create');
    }

    /**
     * Salvar novo evento
     */
    public function store(StoreEventRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        // Tenta via repository; se não, cria direto com o Model
        $event = $this->repository->register($validated) ?? Event::create($validated);

        if ($event) {
            return redirect()->route('event.index')->with('success', 'Evento cadastrado com sucesso!!!');
        }

        return back()->withErrors(['error' => 'Falha ao cadastrar o evento.']);
    }

    /**
     * Formulário de edição
     */
    public function edit(string $code): View
    {
        $event = Event::findOrFail($code);
        return view('event.edit', compact('event'));
    }

    /**
     * Atualizar evento
     */
    public function update(UpdateEventRequest $request, string $code): RedirectResponse
    {
        $event = Event::findOrFail($code);
        $validated = $request->validated();
        $event->update($validated);

        return redirect()->route('event.index')->with('success', 'Evento atualizado com sucesso!');
    }

    /**
     * Excluir evento
     */
    public function destroy(string $code): RedirectResponse
    {
        $event = Event::findOrFail($code);
        $event->delete();

        return redirect()->route('event.index')->with('success', 'Evento excluído com sucesso!');
    }

    /**
     * Exibir detalhes
     */
    public function show(string $code): View
    {
        $event = Event::findOrFail($code);
        return view('event.show', compact('event'));
    }

    /**
     * Método search — reaproveita a lógica do index (mantive caso tenha rota /events/search)
     */
    public function search(Request $request): View
    {
        return $this->index($request);
    }
}
