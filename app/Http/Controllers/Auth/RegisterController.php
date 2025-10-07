<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function store(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'user-email' => 'required|email',
            'user-password' => 'required|min:6',
            'user-password-confirm' => 'required|same:user-password',
        ]);

        // 2. Criação do usuário no banco
        User::create([
            'name' => $request->input('user-name'),
            'email' => $request->input('user-email'),
            'password' => Hash::make($request->input('user-password')),
        ]);

        // 3. Retorno com mensagem de sucesso
        return redirect()->route('login.show')->with('success', 'Usuário cadastrado com sucesso!');
    }
}
