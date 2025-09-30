<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class EventController extends Controller
{
    public function index(Request $request): View
    {
        return view(view: 'index');
    }
    public function listagem(Request $request): View
    {
        return view(view: 'listagem');
    }
    public function show(string $id): View
    {
        return view(view: 'detalhes');
    }
    public function create(): View
    {
        return view('cadastrar_login');
    }
    public function edit(string $id): View
    {
        return view('editar');
    }
    public function createEvento(string $id): View
    {
        return view(view: 'cadastrar_evento');
    }
}
