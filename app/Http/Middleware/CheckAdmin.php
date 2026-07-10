<?php

namespace App\Http\Middleware; // Ajuste para App\Middleware se o seu arquivo estiver direto na pasta app/Middleware

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // <-- IMPORTANTE: Esta linha avisa o VS Code de onde vem o Auth
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    public function handle(Request $request, Closure $next): Response
    {
        // 1. Verifica se o usuário NÃO está logado usando a Facade oficial
        if (!Auth::check()) {
            return redirect()->route('login');
        }

        // 2. Pega o usuário logado de forma explícita
        $user = Auth::user();

        // 3. Verifica o nível de acesso
        if (!isset($user->role) || $user->role !== 'admin') {
            abort(403, 'Acesso negado. Esta área é exclusiva para Administradores.');
        }

        return $next($request);
    }
}