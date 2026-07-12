<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Total de itens em estoque (soma das quantidades de todos os produtos)
        $totalItens = Product::sum('quantity');

        // 2. Alertas de Estoque Baixo (ex: quantidade menor ou igual ao estoque mínimo)
        // Certifique-se de que sua tabela tem a coluna 'minimum_stock' ou mude para um valor fixo (ex: <= 5)
        $estoqueBaixo = Product::whereRaw('quantity <= minimum_stock')->count();

        // 3. FOCO DO TCC: Alertas de Vencimento (Produtos vencendo nos próximos 30 dias ou já vencidos)
        // Certifique-se de que sua tabela tem a coluna 'expiration_date'
        $hoje = Carbon::today();
        $proximos30Dias = Carbon::today()->addDays(30);

        $produtosVencidos = Product::where('expiration_date', '<', $hoje)->count();
        $produtosA_Vencer = Product::whereBetween('expiration_date', [$hoje, $proximos30Dias])->count();

        return view('dashboard', compact('totalItens', 'estoqueBaixo', 'produtosVencidos', 'produtosA_Vencer'));
    }
}



// namespace App\Http\Controllers;

// use Illuminate\Http\Request;

// class DashboardController extends Controller
// {
//     public function index()
//     {
//         // Valores zerados temporariamente para não quebrar a tela antes das migrations
//         $totalItens = 0;
//         $estoqueBaixo = 0;
//         $produtosVencidos = 0;
//         $produtosA_Vencer = 0;

//         return view('dashboard', compact('totalItens', 'estoqueBaixo', 'produtosVencidos', 'produtosA_Vencer'));
//     }
// }