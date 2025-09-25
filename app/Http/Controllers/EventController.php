<?php


namespace App\Http\Controllers;

use App\Http\Requests\storeEventRequest;
use App\Http\Requests\updateEventRequest;
use App\Models\Event;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(): View{
        $eventos = Event::all();
        return view('listagem', compact('eventos'));
    }
    public function create():View{
        return view('cadastrar_evento');
    }
    public function store(storeEventRequest $request):RedirectResponse{ 
        $validated = $request->validated(); 
        Event::create($validated);               
        // Todo- Salvar os dados no banco de dados             
        return redirect()->route('event.index')
                         ->with('success','Evento cadastrado com sucesso!!!'); // redireciona de volta com mensagem de sucesso
    }
    public function show(int $code):?View{ // Método show recebe um código (id do evento) e pode retornar uma View ou null
        $event = Event::find($code);       // Busca no banco de dados o evento pelo código fornecido
        if(!$event){
            abort(404, 'Evento não encontrado');
        }
        return  view ('detalhes',[ 'event' =>$event]);   // Retorna a view 'detalhes' passando o objeto $evento                // A variável 'evento' ficará disponível na view
        
    }
    public function edit(int $code):?View{
        $event = Event::find($code);
        if(!$event){ abort(404);
        }    
        return view('cadastrar_evento',['event' => $event]); 
    }
    public function update(updateEventRequest $request, int $id):RedirectResponse{ 
         $validated = $request->validated();  
         $event =Event::find($id);  
         if(!$event){ 
            return back()->withErrors(['Evento não encontrado.']);
        }
        $event->update($validated);            
        // Todo- Salvar os dados no banco de dados             
        return redirect()->route('event.index')
                         ->with('success','Evento atualizado com sucesso!!!'); // redireciona de volta com mensagem de sucesso
    }
    public function destroy(int $code):RedirectResponse{
        $event = Event::find($code); //busca o evento pelo ID
        if(!$event){                // se não encontrar
            return back()->withErrors('Evento não encontrado.');
        }
         $event->delete();              // exclui o evento do banco
         return redirect()->route('event.index')
         ->with(['success','Evento excluido com sucesso']);

    }
    public function filter(Request $request): View{   
        // captura parametros de filtro da requisição
        $titulo = $request->input( 'titulo');//exemplo: titulo ou reuniao
        $data   = $request->input('data')   ; //exemplo: data =2025-09-23
        
        $query = Event::query();

        if($titulo){
            $query->where('titulo', 'like', "%$titulo%");
        }
        if($data){
            $query->whereDate("data", $data);
        }
        
        $eventos = $query->get();
        // retorna view passando os eventos filtrados
        return view('filter', compact('eventos'));                           
    }
}                        
                  
        
    

