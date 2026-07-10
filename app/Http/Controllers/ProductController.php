<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ProductController extends Controller
{
    public function index()
    {
        // Busca os produtos trazendo junto a categoria (Evita múltiplas consultas ao banco)
        $products = Product::with('category')->get();
        
        // Pegamos a data de hoje para enviar para a tela
        $today = Carbon::today();

        // Retorna a view que vamos criar em seguida
        return view('products.index', compact('products', 'today'));
    }

    public function create()
    {
        // Próximo passo: tela de cadastro
    }

    public function store(Request $request)
    {
        // Próximo passo: salvar no banco
    }

    public function edit(Product $product)
    {
        // Próximo passo: tela de edição
    }

    public function update(Request $request, Product $product)
    {
        // Próximo passo: atualizar dados
    }

    public function destroy(Product $product)
    {
        // Próximo passo: excluir produto
    }
}