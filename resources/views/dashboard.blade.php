{{--Terceiro modelo--}}

<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockController - Dashboard Premium</title>
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
            background: linear-gradient(135deg,rgba(30, 41, 59, 0.7) 0%, rgba(15, 23, 42, 0.8) 100%);
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
                {{-- <span class="text-2xl text-blue-500">📚</span> --}}
                <span class="font-black uppercase tracking-wider text-white text-lg">StockController</span>
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
                        StockController - Dashboard Geral
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

