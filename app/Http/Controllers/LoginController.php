<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class LoginController extends Controller
{
    // Exibir tela de login
    public function show()
    {
        return view('login');
    }

    // Processar login
    public function store(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate(); // protege contra session fixation
            return redirect()->intended('/dashboard');
        }

        return back()->with('error', 'E-mail ou senha incorretos.');
    }

    // Exibir tela de cadastro
    public function create()
    {
        return view('register');
    }

    // Registrar usuário
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        User::create([
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login.show')->with('success', 'Usuário criado com sucesso!');
    }

    // Tela principal
    public function dashboard()
    {
        return view('dashboard');
    }

    // Logout
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login.show');
    }
}
