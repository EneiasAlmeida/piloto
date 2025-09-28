<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use App\Http\Requests\storeLoginRequest;

class LoginController extends Controller
{
    public function index():View{
        return view('index');
    }

    public function create():View{
        return view('cadastrar_login');
    }
    public function store(StoreLoginRequest $request):RedirectResponse{
        $validated = $request->validated();
        return redirect()->route('event.dashboard');
    }

}
