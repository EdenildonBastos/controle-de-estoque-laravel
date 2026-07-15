<?php

namespace App\Http\Controllers;
use App\Models\Category;

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
      //return view('products.create');
        // Busca todas as categorias do banco
    $categories = Category::all(); 
    
    // Passa as categorias para a sua view de cadastro
    return view('products.create', compact('categories'));

    }

    // public function store(Request $request)
    // {
    //    // 1. Validação rigorosa dos dados enviados pelo formulário
    //     $validatedData = $request->validate([
    //         'category_id'     => 'required|exists:categories,id',
    //         'name'               => 'required|string|max:255',
    //         'sku'             => 'nullable|string',
    //         'quantity'           => 'required|integer|min:0',
    //         'minimum_stock'   => 'nullable|integer',
    //         'price'              => 'nullable|numeric|min:0',
    //         'manufacturing_date' => 'required|date',
    //         // Garante que a data de vencimento seja posterior à de fabricação
    //         'expiration_date'    => 'required|date|after_or_equal:manufacturing_date',
    //     ], [
    //         // Mensagens personalizadas em português para a banca do TCC
    //         'name.required'               => 'O nome do produto é obrigatório.',
    //         'quantity.required'           => 'A quantidade inicial não pode ficar vazia.',
    //         'quantity.integer'            => 'A quantidade deve ser um número inteiro.',
    //         'manufacturing_date.required' => 'A data de fabricação é obrigatória.',
    //         'expiration_date.required'    => 'A data de vencimento é obrigatória.',
    //         'expiration_date.after_or_equal' => 'A data de vencimento não pode ser anterior à data de fabricação.',
    //     ]);

    //     // 2. Gravação do registro no Banco de Dados
    //     Product::create($validatedData);

    //     // 3. Redirecionamento com mensagem de sucesso na sessão
    //     return redirect()->route('products.index')
    //         ->with('success', 'Produto cadastrado com sucesso no StockMaster!'); // Próximo passo: salvar no banco
    // }

    public function store(Request $request)
{
    // 1. Validamos apenas os campos que você REALMENTE tem no seu formulário
    $dadosValidados = $request->validate([
        'name'            => 'required|string',
        'sku'             => 'nullable|string',
        'quantity'        => 'required|integer',
        'minimum_stock'   => 'nullable|integer',
        'price'           => 'required|numeric',
        'expiration_date' => 'required|date',
    ]);

    // 2. RESOLUÇÃO DO PROBLEMA:
    // Buscamos a primeira categoria no banco. Se não existir nenhuma, o Laravel cria uma chamada "Geral" na hora!
    $categoriaPadrao = \App\Models\Category::firstOrCreate(
        ['name' => 'Geral'],
        ['description' => 'Categoria padrão do sistema']
    );

    // Adicionamos o ID dessa categoria padrão nos dados do produto
    $dadosValidados['category_id'] = $categoriaPadrao->id;

    // 3. Agora salvamos no banco de dados com segurança
    Product::create($dadosValidados);

    // 4. Redireciona de volta com sucesso
    return redirect()->route('products.index')->with('success', 'Produto cadastrado com sucesso!');
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