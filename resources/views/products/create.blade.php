<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Novo Produto</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .bg-cyber {
            background-color: #0b0f19;
            background-image: 
                radial-gradient(at 80% 10%, rgba(29, 78, 216, 0.15) 0px, transparent 50%),
                radial-gradient(at 20% 80%, rgba(13, 148, 136, 0.1) 0px, transparent 40%);
        }
        .glass-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05), 0 20px 40px -15px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="bg-cyber text-slate-100 font-sans antialiased min-h-screen flex">

    <!-- MENU LATERAL FIXO (Mantendo o padrão da imagem) -->
    <aside class="w-64 bg-slate-900/40 backdrop-blur-md border-r border-slate-800/80 p-6 flex flex-col justify-between hidden md:flex h-screen sticky top-0">
        <div class="space-y-8">
            <div class="flex items-center gap-3 pl-2">
                <span class="text-2xl text-blue-500">📚</span>
                <span class="font-black uppercase tracking-wider text-white text-lg">StockMaster</span>
            </div>

            <nav class="space-y-1.5">
                <!-- Link Dashboard (Agora inativo nesta tela) -->
                <a href="{{ route('dashboard') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">📊</span>
                    Dashboard
                </a>
                
                <!-- Link Produtos (Ativo/Em foco) -->
                <a href="{{ route('products.index') }}" class="flex items-center gap-3 px-4 py-3 bg-slate-800/80 text-white font-semibold rounded-xl border border-slate-700/50 shadow-xs transition-all text-sm">
                    <span class="text-base opacity-90">📦</span>
                    Produtos
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">🗂️</span>
                    Categorias
                </a>

                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">📈</span>
                    Relatórios
                </a>
            </nav>
        </div>

        <div class="border-t border-slate-800/60 pt-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="w-full text-center py-2 bg-red-950/20 hover:bg-red-900/40 text-red-400 border border-red-900/30 rounded-xl text-xs font-bold transition cursor-pointer">
                    Sair do Sistema
                </button>
            </form>
        </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL (FORMULÁRIO DE CADASTRO) -->
    <main class="flex-1 p-4 md:p-8 overflow-y-auto h-screen">
        <div class="max-w-3xl mx-auto space-y-8">
            
            <!-- HEADER DA TELA -->
            <div class="flex items-center justify-between border-b border-slate-800/60 pb-6">
                <div>
                    <span class="text-xs font-bold uppercase tracking-widest text-blue-400">Gerenciamento de Estoque</span>
                    <h1 class="text-3xl font-black tracking-tight text-white mt-1">
                        Cadastrar Novo Produto
                    </h1>
                </div>
                <a href="{{ route('products.index') }}" class="text-xs bg-slate-900 border border-slate-800 px-4 py-2 rounded-xl text-slate-400 hover:text-white transition font-semibold">
                    ← Voltar para Lista
                </a>
            </div>

            <!-- CARD DO FORMULÁRIO -->
            <div class="glass-card rounded-2xl p-6 md:p-8">
                
                <!-- Exibição de Erros de Validação do Laravel -->
                @if ($errors->any())
                    <div class="mb-6 p-4 bg-red-950/40 border border-red-900/50 rounded-xl text-sm text-red-400">
                        <strong class="font-bold">Atenção!</strong> Verifique os campos abaixo:
                        <ul class="list-disc list-inside mt-2 text-xs space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <!-- Formulário Apontando para o Método Store -->
                <form action="{{ route('products.store') }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Nome do Produto -->
                    <div class="space-y-2">
                        <label for="name" class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Nome do Produto</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}" placeholder="Ex: Paracetamol 500mg Caixa" required
                               class="w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-3.5 text-slate-100 text-sm focus:outline-hidden focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition font-medium placeholder:text-slate-600">
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Quantidade em Estoque -->
                        <div class="space-y-2">
                            <label for="quantity" class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Quantidade Inicial</label>
                            <input type="number" id="quantity" name="quantity" value="{{ old('quantity', 0) }}" min="0" required
                                   class="w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-3.5 text-slate-100 text-sm focus:outline-hidden focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition font-medium font-mono">
                        </div>

                        <!-- Preço Estimado / Custo (Opcional dependendo da sua migration) -->
                        <div class="space-y-2">
                            <label for="price" class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Preço de Custo (R$)</label>
                            <input type="number" step="0.01" id="price" name="price" value="{{ old('price') }}" placeholder="0,00"
                                   class="w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-3.5 text-slate-100 text-sm focus:outline-hidden focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition font-medium font-mono placeholder:text-slate-600">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                        <!-- Data de Fabricação -->
                        <div class="space-y-2">
                            <label for="manufacturing_date" class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Data de Fabricação</label>
                            <input type="date" id="manufacturing_date" name="manufacturing_date" value="{{ old('manufacturing_date') }}" required
                                   class="w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-3.5 text-slate-100 text-sm focus:outline-hidden focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition font-medium text-slate-400 focus:text-slate-100">
                        </div>

                        <!-- Data de Vencimento -->
                        <div class="space-y-2">
                            <label for="expiration_date" class="text-xs font-bold uppercase tracking-wider text-slate-400 block">Data de Vencimento</label>
                            <input type="date" id="expiration_date" name="expiration_date" value="{{ old('expiration_date') }}" required
                                   class="w-full bg-slate-950/60 border border-slate-800 rounded-xl px-4 py-3.5 text-slate-100 text-sm focus:outline-hidden focus:border-blue-500 focus:ring-1 focus:ring-blue-500 transition font-medium text-slate-400 focus:text-slate-100">
                        </div>
                    </div>

                    <!-- Botões de Ação do Formulário -->
                    <div class="border-t border-slate-800/60 pt-6 flex flex-col-reverse sm:flex-row justify-end gap-3">
                        <button type="reset" class="px-5 py-3.5 bg-slate-900 hover:bg-slate-800 text-slate-400 hover:text-white rounded-xl text-sm font-bold transition cursor-pointer text-center">
                            Limpar Campos
                        </button>
                        <button type="submit" class="px-6 py-3.5 bg-blue-600 hover:bg-blue-500 text-white font-bold rounded-xl text-sm transition shadow-[0_0_20px_rgba(37,99,235,0.3)] hover:shadow-[0_0_25px_rgba(37,99,235,0.5)] cursor-pointer text-center">
                            Gravar Produto no Sistema →
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </main>

</body>
</html>