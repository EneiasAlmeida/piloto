<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreLoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    // Exibir tela de login
    public function show()
    {
        return view('login'); // resources/views/login.blade.php
    }

    // Processar login
    public function store(StoreLoginRequest $request)
    {
        $data = $request->validated();

        $user = User::where('email', $request->email)->first();

        
        if ($user && Hash::check($request->password, $user->password)){
            session(['user' => $user->email]); 
            // login ok
        
            return redirect()->route('dashboard');
        }

        return back()->with('error', 'Credenciais inválidas!');
    }

    // Exibir tela de cadastro
    public function create()
    {
        return view('cadastrar_login'); // resources/views/cadastrar_login.blade.php
    }

    // Registrar usuário (simulação)
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6|confirmed',
        ]);

        // Apenas salva em sessão (sem banco)
        session(['user' => $request->email]);

        return redirect()->route('dashboard');
    }

    // Tela após login
    public function dashboard()
    {
        return view('dashboard', ['user' => session('user')]);
    }

    // Logout
    public function logout()
    {
        session()->forget('user');
        return redirect()->route('login.show');
    }
}
