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
      return view('products.create');
    }

    public function store(Request $request)
    {
       // 1. Validação rigorosa dos dados enviados pelo formulário
        $validatedData = $request->validate([
            'name'               => 'required|string|max:255',
            'quantity'           => 'required|integer|min:0',
            'price'              => 'nullable|numeric|min:0',
            'manufacturing_date' => 'required|date',
            // Garante que a data de vencimento seja posterior à de fabricação
            'expiration_date'    => 'required|date|after_or_equal:manufacturing_date',
        ], [
            // Mensagens personalizadas em português para a banca do TCC
            'name.required'               => 'O nome do produto é obrigatório.',
            'quantity.required'           => 'A quantidade inicial não pode ficar vazia.',
            'quantity.integer'            => 'A quantidade deve ser um número inteiro.',
            'manufacturing_date.required' => 'A data de fabricação é obrigatória.',
            'expiration_date.required'    => 'A data de vencimento é obrigatória.',
            'expiration_date.after_or_equal' => 'A data de vencimento não pode ser anterior à data de fabricação.',
        ]);

        // 2. Gravação do registro no Banco de Dados
        Product::create($validatedData);

        // 3. Redirecionamento com mensagem de sucesso na sessão
        return redirect()->route('products.index')
            ->with('success', 'Produto cadastrado com sucesso no StockMaster!'); // Próximo passo: salvar no banco
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