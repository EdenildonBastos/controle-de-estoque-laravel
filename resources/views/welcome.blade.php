<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StockController- Gestão de Estoque Inteligente</title>
    <!-- Tailwind via CDN para renderização imediata -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased flex items-center justify-center min-h-screen relative overflow-hidden">

    <!-- Efeito de Luz de Fundo (Blur) -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-md w-full px-6 py-12 bg-slate-800/50 backdrop-blur-xl border border-slate-700/50 rounded-2xl shadow-2xl text-center relative z-10">
        
        <!-- Ícone / Logo Simbólica -->
        <div class="inline-flex items-center justify-center w-16 h-16 rounded-xl bg-indigo-600 text-white mb-6 shadow-lg shadow-indigo-600/30">

                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke-width="1.5"  stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.242 5.992h12m-12 6.003H20.24m-12 5.999h12M4.117 7.495v-3.75H2.99m1.125 3.75H2.99m1.125 0H5.24m-1.92 2.577a1.125 1.125 0 1 1 1.591 1.59l-1.83 1.83h2.16M2.99 15.745h1.125a1.125 1.125 0 0 1 0 2.25H3.74m0-.002h.375a1.125 1.125 0 0 1 0 2.25H2.99" />
                </svg>
            

        </div>

        <!-- Título e Subtítulo -->
        <h1 class="text-4xl font-extrabold tracking-tight text-white mb-2">
             <span class="text-indigo-400">Bem-</span>vindo ao
        </h1>
        <h2 class="text-3xl font-extrabold tracking-tight text-white mb-2">
            Stock<span class="text-indigo-400">Controller</span>
        </h2>
        <p class="text-slate-400 text-sm mb-8 max-w-sm mx-auto">
            Controle e gerenciamento de produtos em um só lugar.
        </p>

        <!-- Ações de Autenticação -->
        <div class="space-y-3">
            @if (Route::has('login'))
                @auth
                    <a href="{{ url('/dashboard') }}" class="flex items-center justify-center w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/20 transition-all duration-200 group">
                        Acessar Painel
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-4 h-4 ml-2 transform group-hover:translate-x-1 transition-transform">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                        </svg>
                    </a>
                @else
                    <a href="{{ route('login') }}" class="block w-full bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/20 transition-all duration-200">
                        Entrar no Sistema
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="block w-full bg-slate-700/60 hover:bg-slate-700 text-slate-200 font-medium py-3 px-4 rounded-xl border border-slate-600/40 transition-all duration-200">
                            Criar Conta Gratuita
                        </a>
                    @endif
                @endauth
            @endif
        </div>

        <!-- Rodapé do Card -->
        <div class="mt-8 text-xs text-slate-500">
            &copy; {{ date('Y') }} StockController. Todos os direitos reservados.
        </div>
    </div>

</body>
</html>