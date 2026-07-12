{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout> --}}
{{-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Estoque - Dashboard</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-gray-100 font-sans flex h-screen">

    <!-- Menu Lateral de Navegação -->
    <aside class="w-64 bg-slate-800 text-white flex flex-col justify-between hidden md:flex">
        <div class="p-5">
            <h1 class="text-xl font-bold tracking-wider mb-8">StockMaster</h1>
            <nav class="space-y-2">
                <a href="{{ url('/') }}" class="block px-4 py-2.5 rounded bg-slate-700 font-medium">Início / Dashboard</a>
                <a href="#" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Produtos</a>
                <a href="#" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Movimentações</a>
                <a href="#" class="block px-4 py-2.5 rounded hover:bg-slate-700 transition">Fornecedores</a>
            </nav>
        </div>
        <div class="p-5 border-t border-slate-700 text-sm text-slate-400">
            v1.0.0
        </div>
    </aside>

    <!-- Conteúdo Principal -->
    <main class="flex-1 p-6 md:p-10 overflow-y-auto">
        <header class="mb-8">
            <h2 class="text-3xl font-bold text-gray-800">Painel Geral</h2>
            <p class="text-gray-600">Bem-vindo ao seu controle de estoque. Veja o resumo de hoje.</p>
        </header>

        <!-- Seção de Ações Rápidas -->
        <section class="mb-10">
            <h3 class="text-sm font-semibold text-gray-500 uppercase tracking-wider mb-4">Ações Rápidas</h3>
            <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                <button class="p-4 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow-xs cursor-pointer transition">
                    + Nova Entrada
                </button>
                <button class="p-4 bg-orange-600 hover:bg-orange-700 text-white font-medium rounded-lg shadow-xs cursor-pointer transition">
                    - Nova Saída
                </button>
                <button class="p-4 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg shadow-xs cursor-pointer transition">
                    📦 Cadastrar Produto
                </button>
            </div>
        </section>

        <!-- Indicadores / Cards de Resumo (Dados estáticos por enquanto) -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
            <div class="p-6 bg-white rounded-xl shadow-xs border border-gray-200">
                <span class="text-gray-500 text-sm font-medium">Total de Itens Cadastrados</span>
                <div class="text-3xl font-bold text-gray-800 mt-1">0</div>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-xs border border-gray-200">
                <span class="text-gray-500 text-sm font-medium">Produtos com Estoque Baixo</span>
                <div class="text-3xl font-bold text-red-600 mt-1">0</div>
            </div>
            <div class="p-6 bg-white rounded-xl shadow-xs border border-gray-200">
                <span class="text-gray-500 text-sm font-medium">Movimentações (Este Mês)</span>
                <div class="text-3xl font-bold text-gray-800 mt-1">0</div>
            </div>
        </section>
    </main>

</body>
</html> --}}
{{-- <x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Painel Geral de Controle de Estoque') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            
            <!-- SEÇÃO: Resumos e Indicadores -->
            <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
                
                <!-- Card 1: Total em Estoque -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 p-6">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total de Itens</div>
                    <div class="mt-2 text-3xl font-bold text-gray-900">{{ $totalItens }}</div>
                    <div class="text-xs text-gray-400 mt-1">Unidades físicas armazenadas</div>
                </div>

                <!-- Card 2: Estoque Baixo -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 p-6">
                    <div class="text-sm font-medium text-gray-500 uppercase tracking-wider">Estoque Crítico</div>
                    <div class="mt-2 text-3xl font-bold {{ $estoqueBaixo > 0 ? 'text-amber-600' : 'text-gray-900' }}">
                        {{ $estoqueBaixo }}
                    </div>
                    <div class="text-xs text-gray-400 mt-1">Produtos abaixo do limite mínimo</div>
                </div>

                <!-- Card 3: Produtos Próximos do Vencimento (Destaque TCC) -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 p-6">
                    <div class="text-sm font-medium text-amber-700 uppercase tracking-wider">⚠️ A Vencer (30 dias)</div>
                    <div class="mt-2 text-3xl font-bold {{ $produtosA_Vencer > 0 ? 'text-amber-500' : 'text-gray-900' }}">
                        {{ $produtosA_Vencer }}
                    </div>
                    <div class="text-xs text-gray-400 mt-1">Atenção ao prazo de validade</div>
                </div>

                <!-- Card 4: Produtos Vencidos (Destaque TCC) -->
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border border-gray-200 p-6">
                    <div class="text-sm font-medium text-red-700 uppercase tracking-wider">🚨 Produtos Vencidos</div>
                    <div class="mt-2 text-3xl font-bold {{ $produtosVencidos > 0 ? 'text-red-600 animate-pulse' : 'text-gray-900' }}">
                        {{ $produtosVencidos }}
                    </div>
                    <div class="text-xs text-gray-400 mt-1">Necessitam descarte imediato</div>
                </div>

            </div>

            <!-- SEÇÃO: Atalhos Rápidos com base nas Permissões (role) -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 border border-gray-200">
                <h3 class="text-lg font-medium text-gray-900 mb-4">Ações Rápidas</h3>
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    
                    <!-- Acessível por Admin e Operador -->
                    <a href="{{ route('products.index') }}" class="inline-flex justify-center items-center p-4 bg-slate-800 hover:bg-slate-700 text-white font-medium rounded-lg shadow-xs transition text-center">
                        📋 Ver Listagem de Produtos
                    </a>

                    <!-- Visível apenas para Administradores (usando a coluna role) -->
                    @if(Auth::user()->role === 'admin')
                        <a href="#" class="inline-flex justify-center items-center p-4 bg-blue-600 hover:bg-blue-500 text-white font-medium rounded-lg shadow-xs transition text-center">
                            📦 Cadastrar Novo Produto
                        </a>
                        <a href="#" class="inline-flex justify-center items-center p-4 bg-emerald-600 hover:bg-emerald-500 text-white font-medium rounded-lg shadow-xs transition text-center">
                            ➕ Adicionar Nova Categoria
                        </a>
                    @else
                        <!-- Atalhos restritos para o Operador -->
                        <div class="p-4 bg-gray-100 text-gray-500 rounded-lg text-center flex items-center justify-center text-sm border border-dashed border-gray-300">
                            🔒 Cadastro restrito ao Administrador
                        </div>
                        <div class="p-4 bg-gray-100 text-gray-500 rounded-lg text-center flex items-center justify-center text-sm border border-dashed border-gray-300">
                            🔒 Configurações restritas
                        </div>
                    @endif

                </div>
            </div>

        </div>
    </div>
</x-app-layout> --}}

{{-- <x-app-layout>
    <x-slot name="header">
        <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4">
            <div>
                <h2 class="font-bold text-2xl text-slate-800 leading-tight">
                    {{ __('Painel de Controle') }}
                </h2>
                <p class="text-sm text-slate-500 mt-0.5">Visão geral do inventário e alertas de validade.</p>
            </div>
            <div class="text-sm font-medium text-slate-500 bg-slate-100 px-3 py-1.5 rounded-lg border border-slate-200 w-fit">
                🗓️ {{ \Carbon\Carbon::now()->translatedFormat('d \d\e F \d\e Y') }}
            </div>
        </div>
    </x-slot>

    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            
            <!-- SEÇÃO: Cards de Indicadores Modernos -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card: Total em Estoque -->
                <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total de Itens</span>
                            <span class="p-2 bg-blue-50 text-blue-600 rounded-xl text-lg">📦</span>
                        </div>
                        <div class="mt-4 text-4xl font-extrabold text-slate-900 tracking-tight">{{ $totalItens }}</div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-50 flex items-center text-xs text-slate-500">
                        <span>Unidades físicas ativas</span>
                    </div>
                </div>

                <!-- Card: Estoque Crítico -->
                <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Estoque Crítico</span>
                            <span class="p-2 {{ $estoqueBaixo > 0 ? 'bg-orange-50 text-orange-600' : 'bg-slate-50 text-slate-400' }} rounded-xl text-lg">📉</span>
                        </div>
                        <div class="mt-4 text-4xl font-extrabold tracking-tight {{ $estoqueBaixo > 0 ? 'text-orange-600' : 'text-slate-900' }}">
                            {{ $estoqueBaixo }}
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-50 flex items-center text-xs {{ $estoqueBaixo > 0 ? 'text-orange-600 font-medium' : 'text-slate-500' }}">
                        <span>{{ $estoqueBaixo > 0 ? 'Reabastecimento necessário' : 'Nenhum item abaixo do mínimo' }}</span>
                    </div>
                </div>

                <!-- Card: A Vencer (Destaque TCC) -->
                <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">A Vencer (30 dias)</span>
                            <span class="p-2 {{ $produtosA_Vencer > 0 ? 'bg-amber-50 text-amber-600' : 'bg-slate-50 text-slate-400' }} rounded-xl text-lg">⏳</span>
                        </div>
                        <div class="mt-4 text-4xl font-extrabold tracking-tight {{ $produtosA_Vencer > 0 ? 'text-amber-500' : 'text-slate-900' }}">
                            {{ $produtosA_Vencer }}
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-50 flex items-center text-xs {{ $produtosA_Vencer > 0 ? 'text-amber-600 font-medium' : 'text-slate-500' }}">
                        <span>{{ $produtosA_Vencer > 0 ? 'Atenção ao fluxo de saída' : 'Lotes com validade segura' }}</span>
                    </div>
                </div>

                <!-- Card: Produtos Vencidos (Destaque TCC) -->
                <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm hover:shadow-md transition-all duration-300 flex flex-col justify-between">
                    <div>
                        <div class="flex justify-between items-start">
                            <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">🚨 Vencidos</span>
                            <span class="p-2 {{ $produtosVencidos > 0 ? 'bg-red-50 text-red-600 animate-pulse' : 'bg-slate-50 text-slate-400' }} rounded-xl text-lg">🛑</span>
                        </div>
                        <div class="mt-4 text-4xl font-extrabold tracking-tight {{ $produtosVencidos > 0 ? 'text-red-600' : 'text-slate-900' }}">
                            {{ $produtosVencidos }}
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t border-slate-50 flex items-center text-xs {{ $produtosVencidos > 0 ? 'text-red-600 font-bold' : 'text-slate-500' }}">
                        <span>{{ $produtosVencidos > 0 ? 'Retirar imediatamente do estoque' : 'Nenhum item vencido' }}</span>
                    </div>
                </div>

            </div>

            <!-- SEÇÃO: Atalhos Rápidos e Nível de Acesso -->
            <div class="bg-white rounded-2xl border border-slate-100 p-6 shadow-sm">
                <div class="flex items-center justify-between mb-6">
                    <div>
                        <h3 class="text-lg font-bold text-slate-800">Ações do Sistema</h3>
                        <p class="text-xs text-slate-500">Operações rápidas baseadas no seu perfil ({{ auth()->user()->role }}).</p>
                    </div>
                </div>
                
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                    <!-- Atalho Geral -->
                    <a href="{{ route('products.index') }}" class="group p-4 bg-slate-50 hover:bg-slate-900 hover:text-white rounded-xl border border-slate-200/60 transition-all duration-300 flex items-center justify-between">
                        <div class="flex items-center gap-3">
                            <span class="p-2.5 bg-white group-hover:bg-slate-800 rounded-lg text-base shadow-xs">📋</span>
                            <span class="text-sm font-semibold tracking-wide">Inventário Completo</span>
                        </div>
                        <span class="text-slate-400 group-hover:text-white transition-colors text-sm">→</span>
                    </a>

                    <!-- Atalhos Condicionais do Admin -->
                    @if(Auth::user()->role === 'admin')
                        <a href="#" class="group p-4 bg-blue-50/50 hover:bg-blue-600 hover:text-white rounded-xl border border-blue-100 transition-all duration-300 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="p-2.5 bg-white group-hover:bg-blue-700 rounded-lg text-base shadow-xs">📦</span>
                                <span class="text-sm font-semibold tracking-wide">Cadastrar Produto</span>
                            </div>
                            <span class="text-blue-400 group-hover:text-white transition-colors text-sm">+</span>
                        </a>

                        <a href="#" class="group p-4 bg-emerald-50/50 hover:bg-emerald-600 hover:text-white rounded-xl border border-emerald-100 transition-all duration-300 flex items-center justify-between">
                            <div class="flex items-center gap-3">
                                <span class="p-2.5 bg-white group-hover:bg-emerald-700 rounded-lg text-base shadow-xs">🏷️</span>
                                <span class="text-sm font-semibold tracking-wide">Nova Categoria</span>
                            </div>
                            <span class="text-emerald-400 group-hover:text-white transition-colors text-sm">+</span>
                        </a>
                    @else
                        <!-- Mensagem informativa para Operadores -->
                        <div class="sm:col-span-2 p-4 bg-slate-50 text-slate-500 rounded-xl text-center flex items-center justify-center text-xs font-medium border border-dashed border-slate-200 gap-2">
                            <span>🔒</span> Operações de cadastro e configurações do sistema são restritas ao Administrador.
                        </div>
                    @endif
                </div>
            </div>

        </div>
    </div>
</x-app-layout> --}}

{{--antes da mudança--}}

{{-- <x-app-layout>
    <!-- Forçamos o fundo escuro profundo na tela inteira -->
    <div class="bg-[#111827] min-h-screen text-slate-100 p-4 md:p-8 font-sans antialiased">
        <div class="max-w-7xl mx-auto space-y-8">
            
            <!-- HEADER DO PAINEL -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-800 pb-6">
                <div>
                    <h1 class="text-3xl font-extrabold tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-white to-slate-400">
                        StockMaster - Dashboard Geral
                    </h1>
                    <p class="text-sm text-slate-400 mt-1">
                        Bem-vindo, <span class="text-blue-400 font-medium capitalize">{{ auth()->user()->name }}</span> (Perfil: {{ auth()->user()->role }})
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <span class="text-xs bg-slate-800 border border-slate-700 px-3 py-1.5 rounded-full text-slate-400 font-mono">
                        {{ \Carbon\Carbon::now()->format('H:i') }} | {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    </span>
                </div>
            </div>

            <!-- GRID SUPERIOR: CARDS DE METRICAS (GLASSMORPHISM) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Total em Estoque -->
                <div class="bg-slate-900/60 backdrop-blur-md rounded-2xl border border-slate-800/80 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total de Itens em Estoque</span>
                        <span class="text-emerald-500 font-bold text-lg">↑</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight text-white">{{ number_format($totalItens ?? 0, 0, ',', '.') }}</div>
                        <!-- Barras gráficas decorativas simulando a imagem -->
                        <div class="flex items-end gap-1 h-8 mt-4 opacity-40">
                            <div class="w-full bg-slate-700 h-2 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-4 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-3 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-6 rounded-xs"></div>
                            <div class="w-full bg-slate-500 h-5 rounded-xs"></div>
                            <div class="w-full bg-blue-500 h-8 rounded-xs"></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Estoque Baixo -->
                <div class="bg-slate-900/60 backdrop-blur-md rounded-2xl border border-slate-800/80 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Produtos com Estoque Baixo</span>
                        <span class="text-orange-500 text-lg">⚠️</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight {{ ($estoqueBaixo ?? 0) > 0 ? 'text-orange-500' : 'text-white' }}">
                            {{ $estoqueBaixo ?? 0 }}
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Itens atingiram o estoque mínimo</p>
                    </div>
                </div>

                <!-- Card 3: A Vencer (Foco do TCC) -->
                <div class="bg-slate-900/60 backdrop-blur-md rounded-2xl border border-slate-800/80 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Alertas de Vencimento (30 dias)</span>
                        <span class="text-blue-400 text-lg">⏳</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="text-4xl font-black tracking-tight text-white">{{ $produtosA_Vencer ?? 0 }}</div>
                        <!-- Círculo simulando o gráfico de progresso da imagem -->
                        <div class="relative w-12 h-12 rounded-full border-4 border-slate-800 border-t-blue-500 flex items-center justify-center text-[10px] text-slate-400 font-bold">
                            30d
                        </div>
                    </div>
                </div>

                <!-- Card 4: Vencidos (Crítico - Foco do TCC) -->
                <div class="bg-slate-900/60 backdrop-blur-md rounded-2xl border border-red-950/50 p-6 flex flex-col justify-between shadow-lg relative overflow-hidden">
                    <!-- Efeito de brilho de fundo vermelho se houver vencidos -->
                    @if(($produtosVencidos ?? 0) > 0)
                        <div class="absolute -right-4 -bottom-4 w-24 h-24 bg-red-600/10 blur-xl rounded-full"></div>
                    @endif
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-red-400 uppercase tracking-wider">Produtos Vencidos</span>
                        <span class="text-red-500 text-lg">❌</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight {{ ($produtosVencidos ?? 0) > 0 ? 'text-red-500' : 'text-white' }}">
                            {{ $produtosVencidos ?? 0 }}
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Dispor e retirar imediatamente</p>
                    </div>
                </div>

            </div>

            <!-- INFERIOR: AÇÕES RÁPIDAS E LISTAGEM DE ALERTAS -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                
                <!-- Coluna da Esquerda: Ações Rápidas (Tamanho 2) -->
                <div class="lg:col-span-2 bg-slate-900/45 rounded-2xl border border-slate-800/80 p-6 space-y-4">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-2">Ações Rápidas</h3>
                    
                    <div class="grid grid-cols-1 gap-3">
                        <!-- Botão Entrada -->
                        <button class="w-full p-4 bg-emerald-950/40 hover:bg-emerald-900/60 text-emerald-400 border border-emerald-800/40 font-semibold rounded-xl transition duration-200 text-left flex items-center justify-between cursor-pointer group">
                            <span>+ Nova Entrada</span>
                            <span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </button>

                        <!-- Botão Saída -->
                        <button class="w-full p-4 bg-amber-950/40 hover:bg-amber-900/60 text-amber-400 border border-amber-800/40 font-semibold rounded-xl transition duration-200 text-left flex items-center justify-between cursor-pointer group">
                            <span>— Nova Saída</span>
                            <span class="opacity-0 group-hover:opacity-100 transition-opacity">→</span>
                        </button>

                        <!-- Botão Cadastrar Produto (Restrito a Admin no seu middleware) -->
                        @if(auth()->user()->role === 'admin')
                            <a href="#" class="w-full p-4 bg-blue-950/40 hover:bg-blue-900/60 text-blue-400 border border-blue-800/40 font-semibold rounded-xl transition duration-200 text-left flex items-center justify-between group">
                                <span>📦 Cadastrar Produto</span>
                                <span class="opacity-0 group-hover:opacity-100 transition-opacity">+</span>
                            </a>
                        @else
                            <div class="w-full p-4 bg-slate-900 text-slate-600 border border-slate-800/60 font-semibold rounded-xl text-xs flex items-center gap-2">
                                <span>🔒</span> Cadastro restrito a Administradores
                            </div>
                        @endif
                    </div>
                </div>

                <!-- Coluna da Direita: Painel de Alertas Críticos (Tamanho 3) -->
                <div class="lg:col-span-3 bg-slate-900/45 rounded-2xl border border-slate-800/80 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400">Alertas Críticos de Vencimento</h3>
                        <a href="{{ route('products.index') }}" class="text-xs text-blue-400 hover:underline">Ver tudo</a>
                    </div>

                    <!-- Lista Mockada simulando o design da imagem antes de conectarmos as queries dinâmicas -->
                    <div class="space-y-2.5">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3 bg-slate-900/80 border border-slate-800 rounded-xl gap-2">
                            <div class="flex items-center gap-3">
                                <span class="px-2 py-1 bg-red-950 text-red-400 border border-red-800/30 rounded-md font-mono text-xs font-bold">18/05/26</span>
                                <span class="text-sm font-medium text-slate-200">Produto Exemplo 01</span>
                            </div>
                            <div class="flex gap-2 w-full sm:w-auto justify-end">
                                <span class="px-2.5 py-1 bg-red-900/30 text-red-400 rounded-md text-[11px] font-bold">Disposar</span>
                                <span class="px-2.5 py-1 bg-slate-800 text-slate-400 rounded-md text-[11px] font-bold">Venda</span>
                            </div>
                        </div>

                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3 bg-slate-900/80 border border-slate-800 rounded-xl gap-2">
                            <div class="flex items-center gap-3">
                                <span class="px-2 py-1 bg-amber-950 text-amber-400 border border-amber-800/30 rounded-md font-mono text-xs font-bold">16/06/26</span>
                                <span class="text-sm font-medium text-slate-200">Produto Exemplo 02</span>
                            </div>
                            <div class="flex gap-2 w-full sm:w-auto justify-end">
                                <span class="px-2.5 py-1 bg-red-900/30 text-red-400 rounded-md text-[11px] font-bold">Disposar</span>
                                <span class="px-2.5 py-1 bg-slate-800 text-slate-400 rounded-md text-[11px] font-bold">Venda</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-app-layout> --}}

{{--Para forçar o resultado sem depender de nenhum arquivo externo, vamos colocar o fundo escuro direto dentro do seu dashboard.--}}

{{-- <!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Dashboard Geral</title>
    <!-- Injetamos o Tailwind direto via CDN para garantir que o estilo aplique imediatamente sem depender do Vite -->
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-[#0b0f19] text-slate-100 font-sans antialiased min-h-screen">

    <!-- Forçamos o fundo escuro profundo na tela inteira -->
    <div class="p-4 md:p-8">
        <div class="max-w-7xl mx-auto space-y-8">
            
            <!-- HEADER DO PAINEL -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-800 pb-6">
                <div>
                    <h1 class="text-3xl font-extrabold tracking-tight text-transparent bg-clip-text bg-gradient-to-r from-white to-slate-400">
                        StockMaster - Dashboard Geral
                    </h1>
                    <p class="text-sm text-slate-400 mt-1">
                        Bem-vindo, <span class="text-blue-400 font-medium capitalize">{{ auth()->user()->name }}</span> (Perfil: {{ auth()->user()->role }})
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <!-- Botão para deslogar (já que tiramos o menu provisoriamente para testar o visual) -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-xs bg-red-950/40 hover:bg-red-900 border border-red-900/40 px-3 py-1.5 rounded-lg text-red-400 font-medium transition cursor-pointer">
                            Sair do Sistema
                        </button>
                    </form>
                    <span class="text-xs bg-slate-800 border border-slate-700 px-3 py-1.5 rounded-full text-slate-400 font-mono">
                        {{ \Carbon\Carbon::now()->format('H:i') }} | {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    </span>
                </div>
            </div>

            <!-- GRID SUPERIOR: CARDS DE METRICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Total em Estoque -->
                <div class="bg-slate-900/60 rounded-2xl border border-slate-800 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Total de Itens em Estoque</span>
                        <span class="text-emerald-500 font-bold text-lg">↑</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight text-white">{{ number_format($totalItens ?? 0, 0, ',', '.') }}</div>
                        <div class="flex items-end gap-1 h-8 mt-4 opacity-40">
                            <div class="w-full bg-slate-700 h-2 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-4 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-3 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-6 rounded-xs"></div>
                            <div class="w-full bg-slate-500 h-5 rounded-xs"></div>
                            <div class="w-full bg-blue-500 h-8 rounded-xs"></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Estoque Baixo -->
                <div class="bg-slate-900/60 rounded-2xl border border-slate-800 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Produtos com Estoque Baixo</span>
                        <span class="text-orange-500 text-lg">⚠️</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight {{ ($estoqueBaixo ?? 0) > 0 ? 'text-orange-500' : 'text-white' }}">
                            {{ $estoqueBaixo ?? 0 }}
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Itens atingiram o estoque mínimo</p>
                    </div>
                </div>

                <!-- Card 3: A Vencer -->
                <div class="bg-slate-900/60 rounded-2xl border border-slate-800 p-6 flex flex-col justify-between shadow-lg">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Alertas de Vencimento (30 dias)</span>
                        <span class="text-blue-400 text-lg">⏳</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="text-4xl font-black tracking-tight text-white">{{ $produtosA_Vencer ?? 0 }}</div>
                        <div class="w-12 h-12 rounded-full border-4 border-slate-800 border-t-blue-500 flex items-center justify-center text-[10px] text-slate-400 font-bold">
                            30d
                        </div>
                    </div>
                </div>

                <!-- Card 4: Vencidos -->
                <div class="bg-slate-900/60 rounded-2xl border border-red-950/50 p-6 flex flex-col justify-between shadow-lg relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <span class="text-xs font-bold text-red-400 uppercase tracking-wider">Produtos Vencidos</span>
                        <span class="text-red-500 text-lg">❌</span>
                    </div>
                    <div class="mt-4">
                        <div class="text-4xl font-black tracking-tight {{ ($produtosVencidos ?? 0) > 0 ? 'text-red-500' : 'text-white' }}">
                            {{ $produtosVencidos ?? 0 }}
                        </div>
                        <p class="text-xs text-slate-400 mt-2">Dispor e retirar imediatamente</p>
                    </div>
                </div>

            </div>

            <!-- INFERIOR: AÇÕES RÁPIDAS E LISTAGEM DE ALERTAS -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                
                <div class="lg:col-span-2 bg-slate-900/45 rounded-2xl border border-slate-800 p-6 space-y-4">
                    <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400 mb-2">Ações Rápidas</h3>
                    <div class="grid grid-cols-1 gap-3">
                        <button class="w-full p-4 bg-emerald-950/40 hover:bg-emerald-900/60 text-emerald-400 border border-emerald-800/40 font-semibold rounded-xl transition flex items-center justify-between cursor-pointer group">
                            <span>+ Nova Entrada</span>
                            <span>→</span>
                        </button>
                        <button class="w-full p-4 bg-amber-950/40 hover:bg-amber-900/60 text-amber-400 border border-amber-800/40 font-semibold rounded-xl transition flex items-center justify-between cursor-pointer group">
                            <span>— Nova Saída</span>
                            <span>→</span>
                        </button>
                        @if(auth()->user()->role === 'admin')
                            <a href="#" class="w-full p-4 bg-blue-950/40 hover:bg-blue-900/60 text-blue-400 border border-blue-800/40 font-semibold rounded-xl transition flex items-center justify-between group">
                                <span>📦 Cadastrar Produto</span>
                                <span>+</span>
                            </a>
                        @endif
                    </div>
                </div>

                <div class="lg:col-span-3 bg-slate-900/45 rounded-2xl border border-slate-800 p-6">
                    <div class="flex items-center justify-between mb-4">
                        <h3 class="text-sm font-bold uppercase tracking-wider text-slate-400">Alertas Críticos de Vencimento</h3>
                        <a href="{{ route('products.index') }}" class="text-xs text-blue-400 hover:underline">Ver tudo</a>
                    </div>
                    <div class="space-y-2.5">
                        <div class="flex items-center justify-between p-3 bg-slate-900/80 border border-slate-800 rounded-xl">
                            <div class="flex items-center gap-3">
                                <span class="px-2 py-1 bg-red-950 text-red-400 border border-red-800/30 rounded-md font-mono text-xs font-bold">18/05/26</span>
                                <span class="text-sm font-medium text-slate-200">Produto Exemplo 01</span>
                            </div>
                            <div class="flex gap-2">
                                <span class="px-2.5 py-1 bg-red-900/30 text-red-400 rounded-md text-[11px] font-bold">Disposar</span>
                                <span class="px-2.5 py-1 bg-slate-800 text-slate-400 rounded-md text-[11px] font-bold">Venda</span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html> --}}

{{--segundo modelo--}}

{{-- <!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Dashboard Premium</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        /* Efeito de linhas e brilhos de circuito simulados por gradientes no fundo */
        .bg-cyber {
            background-color: #0b0f19;
            background-image: 
                radial-gradient(at 80% 10%, rgba(29, 78, 216, 0.15) 0px, transparent 50%),
                radial-gradient(at 20% 80%, rgba(13, 148, 136, 0.1) 0px, transparent 40%),
                radial-gradient(at 90% 80%, rgba(220, 38, 38, 0.08) 0px, transparent 40%);
        }
        /* Borda interna brilhante para dar o efeito de vidro da imagem */
        .glass-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05), 0 20px 40px -15px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="bg-cyber text-slate-100 font-sans antialiased min-h-screen">

    <div class="p-4 md:p-8">
        <div class="max-w-7xl mx-auto space-y-8">
            
            <!-- HEADER -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-800/60 pb-6">
                <div>
                    <h1 class="text-3xl font-black uppercase tracking-wider text-white">
                        StockMaster <span class="text-xs font-medium tracking-normal text-slate-500 bg-slate-900 border border-slate-800 px-2 py-1 rounded-md ml-2">Dashboard Geral</span>
                    </h1>
                    <p class="text-xs text-slate-400 mt-1.5">
                        Bem-vindo, <span class="text-blue-400 font-bold capitalize">{{ auth()->user()->name }}</span> | Perfil: <span class="text-slate-300 font-semibold uppercase">{{ auth()->user()->role }}</span>
                    </p>
                </div>
                <div class="flex items-center gap-4">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="text-xs bg-red-950/40 hover:bg-red-900 border border-red-900/40 px-3 py-1.5 rounded-lg text-red-400 font-medium transition cursor-pointer">
                            Sair
                        </button>
                    </form>
                    <span class="text-xs bg-slate-900 border border-slate-800 px-3 py-1.5 rounded-full text-slate-400 font-mono">
                        {{ \Carbon\Carbon::now()->format('H:i') }} | {{ \Carbon\Carbon::now()->format('d/m/Y') }}
                    </span>
                </div>
            </div>

            <!-- GRID SUPERIOR: CARDS DE METRICAS (ESTILO FIDELIDADE) -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Total em Estoque -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Total de Itens em Estoque</span>
                        <span class="text-slate-500 text-xs">⋮</span>
                    </div>
                    <div class="mt-6">
                        <div class="text-5xl font-black tracking-tight text-white flex items-center gap-2">
                            {{ number_format($totalItens ?? 0, 0, ',', '.') }}
                            <span class="text-emerald-500 text-xl font-bold">↑</span>
                        </div>
                        
                        <!-- Barras Gráficas idênticas à imagem -->
                        <div class="flex items-end gap-1.5 h-10 mt-6 opacity-60">
                            <div class="w-full bg-slate-800 h-3 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-6 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-4 rounded-xs"></div>
                            <div class="w-full bg-slate-600 h-8 rounded-xs"></div>
                            <div class="w-full bg-slate-500 h-7 rounded-xs"></div>
                            <div class="w-full bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.5)] h-10 rounded-xs"></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Estoque Baixo -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Produtos com Estoque Baixo</span>
                        <span class="text-orange-500 text-base">⚠️</span>
                    </div>
                    <div class="mt-6">
                        <div class="text-5xl font-black tracking-tight text-orange-400">
                            {{ $estoqueBaixo ?? 0 }}
                        </div>
                        <div class="mt-4 space-y-1 text-[11px] text-slate-500">
                            <div class="flex justify-between"><span>Produto 1 Exemplo</span> <span class="text-orange-400/80">Estoque</span></div>
                            <div class="flex justify-between"><span>Produto 2 Exemplo</span> <span class="text-orange-400/80">Estoque</span></div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: A Vencer -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Alertas de Vencimento</span>
                        <span class="text-slate-500 text-xs">⋮</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <!-- Círculo de Progresso da Imagem -->
                        <div class="relative w-20 h-20 rounded-full border-4 border-slate-800 border-t-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.2)] flex items-center justify-center">
                            <span class="text-2xl font-black text-white">{{ $produtosA_Vencer ?? 0 }}</span>
                        </div>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider text-right">Próximos<br>30 dias</span>
                    </div>
                </div>

                <!-- Card 4: Vencidos (Efeito Alerta Pulsante) -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between border-red-900/30 relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-red-400 uppercase tracking-widest">Produtos Vencidos</span>
                        <span class="text-red-500 bg-red-950/50 border border-red-900/40 w-5 h-5 rounded-full flex items-center justify-center text-[10px] font-bold">✕</span>
                    </div>
                    <div class="mt-4 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-950/30 border border-red-800/40 relative">
                            <!-- Efeito Halo Vermelho -->
                            <div class="absolute inset-0 rounded-full bg-red-600/10 animate-ping opacity-75"></div>
                            <span class="text-3xl font-black text-red-500">{{ $produtosVencidos ?? 0 }}</span>
                        </div>
                        <p class="text-[10px] text-red-400 font-bold uppercase tracking-wider mt-3">Dispor Imediato</p>
                    </div>
                </div>

            </div>

            <!-- INFERIOR -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                
                <!-- Ações Rápidas -->
                <div class="lg:col-span-2 glass-card rounded-2xl p-6 space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Ações Rápidas</h3>
                    
                    <div class="grid grid-cols-1 gap-3.5">
                        <button class="w-full p-5 bg-emerald-950/20 hover:bg-emerald-900/40 text-emerald-400 border border-emerald-900/30 font-bold rounded-xl transition duration-200 text-left flex items-center justify-between group cursor-pointer">
                            <span class="tracking-wide">+ Nova Entrada</span>
                            <span class="text-xs bg-emerald-900/50 px-2 py-0.5 rounded text-[10px]">Green</span>
                        </button>

                        <button class="w-full p-5 bg-orange-950/20 hover:bg-orange-900/40 text-orange-400 border border-orange-900/30 font-bold rounded-xl transition duration-200 text-left flex items-center justify-between group cursor-pointer">
                            <span class="tracking-wide">— Nova Saída</span>
                            <span class="text-xs bg-orange-900/50 px-2 py-0.5 rounded text-[10px]">Orange</span>
                        </button>

                        @if(auth()->user()->role === 'admin')
                            <button class="w-full p-5 bg-teal-950/20 hover:bg-teal-900/40 text-teal-400 border border-teal-900/30 font-bold rounded-xl transition duration-200 text-left flex items-center justify-between group cursor-pointer">
                                <span class="tracking-wide">📦 Cadastrar Produto</span>
                                <span class="text-xs bg-teal-900/50 px-2 py-0.5 rounded text-[10px]">Emerald</span>
                            </button>
                        @endif
                    </div>
                </div>

                <!-- Tabela de Alertas -->
                <div class="lg:col-span-3 glass-card rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400">Alertas Críticos de Vencimento</h3>
                        <a href="{{ route('products.index') }}" class="text-xs text-blue-400 hover:underline tracking-wide">Ver tudo</a>
                    </div>

                    <div class="space-y-3">
                        <!-- Item 1 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3.5 bg-slate-950/40 border border-slate-800/60 rounded-xl gap-3">
                            <div class="flex items-center gap-4">
                                <span class="px-2 py-1 bg-red-950 text-red-400 border border-red-900/30 rounded-md font-mono text-xs font-bold shadow-xs">18/05/26</span>
                                <span class="text-sm font-semibold text-slate-200">Produto Exemplo 01</span>
                            </div>
                            <span class="text-xs text-slate-500">Categoria</span>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 bg-red-950/60 hover:bg-red-900 text-red-400 hover:text-white border border-red-900/40 rounded-lg text-[11px] font-bold transition cursor-pointer">Disposar</button>
                                <button class="px-3 py-1 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg text-[11px] font-bold transition cursor-pointer">Venda</button>
                            </div>
                        </div>

                        <!-- Item 2 -->
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3.5 bg-slate-950/40 border border-slate-800/60 rounded-xl gap-3">
                            <div class="flex items-center gap-4">
                                <span class="px-2 py-1 bg-amber-950 text-amber-400 border border-amber-900/30 rounded-md font-mono text-xs font-bold shadow-xs">16/06/26</span>
                                <span class="text-sm font-semibold text-slate-200">Produto Exemplo 02</span>
                            </div>
                            <span class="text-xs text-slate-500">Categoria</span>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 bg-red-950/60 hover:bg-red-900 text-red-400 hover:text-white border border-red-900/40 rounded-lg text-[11px] font-bold transition cursor-pointer">Disposar</button>
                                <button class="px-3 py-1 bg-slate-800 hover:bg-slate-700 text-slate-300 rounded-lg text-[11px] font-bold transition cursor-pointer">Venda</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

</body>
</html> --}}

{{--Terceiro modelo--}}

<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockMaster - Dashboard Premium</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        .bg-cyber {
            background-color: #0b0f19;
            background-image: 
                radial-gradient(at 80% 10%, rgba(29, 78, 216, 0.15) 0px, transparent 50%),
                radial-gradient(at 20% 80%, rgba(13, 148, 136, 0.1) 0px, transparent 40%),
                radial-gradient(at 90% 80%, rgba(220, 38, 38, 0.08) 0px, transparent 40%);
        }
        .glass-card {
            background: linear-gradient(135deg, rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%);
            border: 1px solid rgba(255, 255, 255, 0.05);
            box-shadow: inset 0 1px 1px rgba(255, 255, 255, 0.05), 0 20px 40px -15px rgba(0,0,0,0.5);
        }
    </style>
</head>
<body class="bg-cyber text-slate-100 font-sans antialiased min-h-screen flex">

    <!-- MENU LATERAL FIXO (Igual ao da imagem) -->
    <aside class="w-64 bg-slate-900/40 backdrop-blur-md border-r border-slate-800/80 p-6 flex flex-col justify-between hidden md:flex h-screen sticky top-0">
        <div class="space-y-8">
            <!-- Logo / Nome do Sistema -->
            <div class="flex items-center gap-3 pl-2">
                <span class="text-2xl text-blue-500">📚</span>
                <span class="font-black uppercase tracking-wider text-white text-lg">StockMaster</span>
            </div>

            <!-- Links de Navegação -->
            <nav class="space-y-1.5">
                <!-- Dashboard (Ativo) -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 bg-slate-800/80 text-white font-semibold rounded-xl border border-slate-700/50 shadow-xs transition-all text-sm">
                    <span class="text-base opacity-90">📊</span>
                    Dashboard
                </a>
                
                <!-- Produtos -->
                <a href="{{ route('products.index') }}" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">📦</span>
                    Produtos
                </a>

                <!-- Categorias -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">🗂️</span>
                    Categorias
                </a>

                <!-- Relatórios -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">📈</span>
                    Relatórios
                </a>

                <!-- Configurações -->
                <a href="#" class="flex items-center gap-3 px-4 py-3 text-slate-400 hover:text-white hover:bg-slate-800/40 rounded-xl transition-all text-sm group">
                    <span class="text-base group-hover:scale-105 transition-transform">⚙️</span>
                    Configurações
                </a>
            </nav>
        </div>

        <!-- Rodapé do Menu Lateral (Data, Hora e Logout) -->
        <div class="border-t border-slate-800/60 pt-4 space-y-3">
            <div class="flex items-center gap-2 text-[11px] text-slate-500 font-mono pl-2">
                <span>📅</span>
                <span>{{ \Carbon\Carbon::now()->format('d M, Y') }}</span>
            </div>
            
        </div>
    </aside>

    <!-- CONTEÚDO PRINCIPAL DA TELA (DIREITA) -->
    <main class="flex-1 p-4 md:p-8 overflow-y-auto h-screen">
        <div class="max-w-7xl mx-auto space-y-8">
            
            <!-- HEADER PRINCIPAL -->
            <div class="flex flex-col md:flex-row md:items-center md:justify-between gap-4 border-b border-slate-800/60 pb-6">
                <div>
                    <h1 class="text-3xl font-black tracking-tight text-white">
                        StockMaster - Dashboard Geral
                    </h1>
                    <p class="text-xs text-slate-400 mt-1.5">
                        Bem-vindo, <span class="text-blue-400 font-bold capitalize">{{ auth()->user()->name }}</span> | Perfil: <span class="text-slate-300 font-semibold uppercase">{{ auth()->user()->role }}</span>
                    </p>
                </div>
                <div class="flex items-center gap-3">
                 <form method="POST" action="{{ route('logout') }}">
                  @csrf
                  <button type="submit" class="w-full text-center py-2 bg-red-950/20 hover:bg-red-900/40 text-red-400 border border-red-900/30 rounded-xl text-xs font-bold transition cursor-pointer">
                    Sair do Sistema
                  </button>
                 </form>
                    <button class="relative p-2 bg-slate-900 border border-slate-800 rounded-xl text-slate-400 hover:text-white transition">
                        <span>🔔</span>
                        <span class="absolute -top-1 -right-1 bg-red-500 text-white font-mono text-[9px] w-4 h-4 rounded-full flex items-center justify-center font-bold">1</span>
                    </button>
                </div>
            </div>

            <!-- GRID SUPERIOR: CARDS DE METRICAS -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <!-- Card 1: Total em Estoque -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Total de Itens em Estoque</span>
                        <span class="text-slate-500 text-xs">⋮</span>
                    </div>
                    <div class="mt-6">
                        <div class="text-5xl font-black tracking-tight text-white flex items-center gap-2">
                            {{ number_format($totalItens ?? 0, 0, ',', '.') }}
                            <span class="text-emerald-500 text-xl font-bold">↑</span>
                        </div>
                        <div class="flex items-end gap-1.5 h-10 mt-6 opacity-60">
                            <div class="w-full bg-slate-800 h-3 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-6 rounded-xs"></div>
                            <div class="w-full bg-slate-700 h-4 rounded-xs"></div>
                            <div class="w-full bg-slate-600 h-8 rounded-xs"></div>
                            <div class="w-full bg-slate-500 h-7 rounded-xs"></div>
                            <div class="w-full bg-blue-500 shadow-[0_0_10px_rgba(59,130,246,0.5)] h-10 rounded-xs"></div>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Estoque Baixo -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Produtos com Estoque Baixo</span>
                        <span class="text-orange-500 text-base">⚠️</span>
                    </div>
                    <div class="mt-6">
                        <div class="text-5xl font-black tracking-tight text-orange-400">
                            {{ $estoqueBaixo ?? 0 }}
                        </div>
                        <div class="mt-4 space-y-1 text-[11px] text-slate-500">
                            <div class="flex justify-between"><span>Produto 1 Estoque ...</span> <span class="text-orange-400/80 font-medium">Estoque</span></div>
                            <div class="flex justify-between"><span>Produto 2 Produto...</span> <span class="text-orange-400/80 font-medium">Estoque</span></div>
                            <div class="flex justify-between"><span>Produto 3 Plantera...</span> <span class="text-orange-400/80 font-medium">Estoque</span></div>
                        </div>
                    </div>
                </div>

                <!-- Card 3: A Vencer -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Alertas de Vencimento</span>
                        <span class="text-slate-500 text-xs">⋮</span>
                    </div>
                    <div class="mt-4 flex items-center justify-between">
                        <div class="relative w-20 h-20 rounded-full border-4 border-slate-800 border-t-blue-500 shadow-[0_0_15px_rgba(59,130,246,0.2)] flex items-center justify-center">
                            <span class="text-2xl font-black text-white">{{ $produtosA_Vencer ?? 0 }}</span>
                        </div>
                        <span class="text-[10px] text-slate-400 font-bold uppercase tracking-wider text-right">Próximos<br>30 dias</span>
                    </div>
                </div>

                <!-- Card 4: Vencidos -->
                <div class="glass-card rounded-2xl p-6 flex flex-col justify-between border-red-900/30 relative overflow-hidden">
                    <div class="flex justify-between items-start">
                        <span class="text-[11px] font-bold text-red-400 uppercase tracking-widest">Produtos Vencidos</span>
                        <span class="text-red-500 bg-red-950/50 border border-red-900/40 w-5 h-5 rounded-full flex items-center justify-center text-[10px] font-bold">✕</span>
                    </div>
                    <div class="mt-4 text-center">
                        <div class="inline-flex items-center justify-center w-16 h-16 rounded-full bg-red-950/30 border border-red-800/40 relative">
                            <div class="absolute inset-0 rounded-full bg-red-600/10 animate-ping opacity-75"></div>
                            <span class="text-3xl font-black text-red-500">{{ $produtosVencidos ?? 0 }}</span>
                        </div>
                        <p class="text-[10px] text-red-400 font-bold uppercase tracking-wider mt-3">Disposar Imediato</p>
                    </div>
                </div>

            </div>

            <!-- INFERIOR: AÇÕES RÁPIDAS E LISTAGEM DE ALERTAS -->
            <div class="grid grid-cols-1 lg:grid-cols-5 gap-6">
                
                <!-- Ações Rápidas -->
                <div class="lg:col-span-2 glass-card rounded-2xl p-6 space-y-4">
                    <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400 mb-4">Ações Rápidas</h3>
                    <div class="grid grid-cols-1 gap-3.5">
                        <button class="w-full p-5 bg-emerald-950/20 hover:bg-emerald-900/40 text-emerald-400 border border-emerald-800/40 font-bold rounded-xl transition flex items-center justify-between cursor-pointer group">
                            <span>+ Nova Entrada</span>
                            <span class="text-[10px] opacity-60 font-normal">(Green)</span>
                        </button>
                        <button class="w-full p-5 bg-orange-950/20 hover:bg-orange-900/40 text-orange-400 border border-orange-800/40 font-bold rounded-xl transition flex items-center justify-between cursor-pointer group">
                            <span>— Nova Saída</span>
                            <span class="text-[10px] opacity-60 font-normal">(Orange)</span>
                        </button>
                        @if(auth()->user()->role === 'admin')
                            <button class="w-full p-5 bg-teal-950/20 hover:bg-teal-900/40 text-teal-400 border border-teal-800/40 font-bold rounded-xl transition flex items-center justify-between cursor-pointer group">
                                <span>📦 Cadastrar Produto</span>
                                <span class="text-[10px] opacity-60 font-normal">(Emerald)</span>
                            </button>
                        @endif
                    </div>
                </div>

                <!-- Tabela de Alertas Críticos -->
                <div class="lg:col-span-3 glass-card rounded-2xl p-6">
                    <div class="flex items-center justify-between mb-5">
                        <h3 class="text-xs font-bold uppercase tracking-widest text-slate-400">Alertas Críticos de Vencimento</h3>
                    </div>
                    <div class="space-y-3">
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3.5 bg-slate-950/40 border border-slate-800/60 rounded-xl gap-3">
                            <div class="flex items-center gap-4">
                                <span class="px-2 py-1 bg-red-950 text-red-400 border border-red-900/30 rounded-md font-mono text-xs font-bold">18/05/24</span>
                                <span class="text-sm font-semibold text-slate-200">Produto 01</span>
                            </div>
                            <span class="text-xs text-slate-500">Categoria</span>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 bg-red-950/60 text-red-400 border border-red-900/40 rounded-lg text-[11px] font-bold">Disposar</button>
                                <button class="px-3 py-1 bg-slate-800 text-slate-300 rounded-lg text-[11px] font-bold">Venda</button>
                            </div>
                        </div>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between p-3.5 bg-slate-950/40 border border-slate-800/60 rounded-xl gap-3">
                            <div class="flex items-center gap-4">
                                <span class="px-2 py-1 bg-amber-950 text-amber-400 border border-amber-900/30 rounded-md font-mono text-xs font-bold">16/06/24</span>
                                <span class="text-sm font-semibold text-slate-200">Produto 02</span>
                            </div>
                            <span class="text-xs text-slate-500">Categoria</span>
                            <div class="flex gap-2">
                                <button class="px-3 py-1 bg-red-950/60 text-red-400 border border-red-900/40 rounded-lg text-[11px] font-bold">Disposar</button>
                                <button class="px-3 py-1 bg-slate-800 text-slate-300 rounded-lg text-[11px] font-bold">Venda</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </main>

</body>
</html>

