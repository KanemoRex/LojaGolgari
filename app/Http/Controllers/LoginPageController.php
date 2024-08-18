<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginPageController extends Controller
{
    // Método para exibir o formulário de login
    public function showLoginForm()
    {
        return view('login');
    }

    // Método para lidar com o processo de login
    public function login(Request $request)
    {
        // Validação dos dados de entrada
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Tentativa de autenticação
        if (Auth::attempt($credentials)) {
            // Autenticação bem-sucedida
            $request->session()->regenerate();  // Previne ataques de fixação de sessão
            return redirect()->route('welcome');  // Redireciona para a rota desejada após o login
        } else {
            // Autenticação falhou
            return back()->withErrors(['email' => 'Credenciais inválidas']);
        }
    }

    // Método para fazer logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
