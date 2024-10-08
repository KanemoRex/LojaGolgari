<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function authenticate(Request $request) : RedirectResponse
    {
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ]; // Adicionando parêntese para fechar o array

        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida, redireciona para a página inicial
            return redirect()->intended('/dashboard');
        }

        // Autenticação falhou, redireciona de volta para a página de login com mensagem de erro
        return back()->withErrors(['email' => 'Credenciais inválidas']);
    }
}
