<?php

namespace App\Http\Controllers;

use App\Http\Requests\storeEventRequest;
use App\Http\Requests\updateEventRequest;
use Illuminate\Console\Scheduling\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): ?View{
        return view(view:'index');
    }
    public function create():View{
        return view('cadastrar_evento');
    }
    public function store(storeEventRequest $request):RedirectResponse{ 
        $validated = $request->validated();                  // valida os dados conforme regras em storeEventRequest
        // Todo- Salvar os dados no banco de dados             // aqui será implementado o insert no banco
        return back()->with(['success','Evento cadastrado com sucesso!!!']); // redireciona de volta com mensagem de sucesso
    }
    public function show(int $code):?View{ // Método show recebe um código (id do evento) e pode retornar uma View ou null
        $event = Event::find($code);       // Busca no banco de dados o evento pelo código fornecido
        if(!$event){                       // Se não encontrar nenhum evento com esse código
            return null;                    // Retorna null (ou poderia lançar um erro 404)
        }
        return  view ('mostrar_evento',[    // Retorna a view 'mostrar_evento' passando o objeto $evento
            'event' =>$event]);                // A variável 'evento' ficará disponível na view
        
    }
    public function edit(int $code):?View{
        return view(view:'edit'); 
    }
    public function update(updateEventRequest $request):RedirectResponse{ 
         $validated = $request->validated();                
        // Todo- Salvar os dados no banco de dados             
        return back()->with(['success','Evento atualizado com sucesso!!!']); // redireciona de volta com mensagem de sucesso
    }
    public function destroy(int $code):?RedirectResponse{
        $event = Event::find($code);
        if(!$event){ 
            return back()->withErrors(['Evento não encontrado.']);
        }
         $event->delete();
         return redirect()->route('events.index')
         ->with(['success','Evento excluido com sucesso']);

    }
    public function filter(Request $request): ?View{         
        return view('filter');                           
    }
}                        
                  
        
    

