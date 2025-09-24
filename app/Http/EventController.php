<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(Request $request): View{
        return view(view:'index');
    }
    public function create():View{
        return view('cadastrar_login');
    }
    public function show(string $isbn):View{
        return view(view: 'dashboard');
    }
    public function createEvento(string $isbn):View{
        return view(view:'cadastrar_evento'); 
    }
    public function showListagem(string $isbn):View{
        return view(view:'listagem'); 
    }
    public function showDetalhes(string $isbn):View{
        return view(view:'detalhes'); 
    }
}