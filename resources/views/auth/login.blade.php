{{-- <x-guest-layout>
    <div class="min-h-screen bg-slate-950">
        <div class="relative overflow-hidden">
            <div class="absolute inset-0 bg-[radial-gradient(circle_at_top,_rgba(99,102,241,0.25),_transparent_35%),radial-gradient(circle_at_bottom_right,_rgba(14,165,233,0.18),_transparent_25%)]"></div>
            <div class="relative min-h-screen flex items-center justify-center px-4 py-10 sm:px-6 lg:px-8">
                <div class="grid w-full max-w-6xl gap-8 lg:grid-cols-[1.2fr_1fr]">
                    <div class="hidden lg:flex flex-col justify-center rounded-[2rem] bg-slate-900/85 p-10 text-white shadow-2xl shadow-slate-950/40 backdrop-blur-xl">
                        <div class="mb-8">
                            <span class="inline-flex items-center gap-2 rounded-full bg-indigo-500/15 px-4 py-2 text-sm font-semibold tracking-wide text-indigo-200">
                                <span class="h-2.5 w-2.5 rounded-full bg-indigo-400"></span>
                                Controle de Estoque
                            </span>
                        </div>
                        <h1 class="text-4xl font-extrabold leading-tight tracking-tight">Acompanhe seu estoque com simplicidade.</h1>
                        <p class="mt-6 max-w-xl text-slate-300">Acesse relatórios inteligentes, controle produtos e receba alertas de reposição em uma interface moderna e segura.</p>

                        <div class="mt-10 grid gap-4">
                            <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Painel</p>
                                <p class="mt-2 text-lg font-semibold text-white">Visão clara dos seus produtos.</p>
                            </div>
                            <div class="rounded-3xl border border-white/10 bg-white/5 p-5">
                                <p class="text-xs uppercase tracking-[0.24em] text-slate-400">Segurança</p>
                                <p class="mt-2 text-lg font-semibold text-white">Acesso protegido e rápido.</p>
                            </div>
                        </div>
                    </div>

                    <div class="relative rounded-[2rem] bg-white/95 p-8 shadow-2xl shadow-slate-950/20 ring-1 ring-slate-900/5 backdrop-blur-xl sm:p-10">
                        <div class="mb-8 text-center">
                            <h2 class="text-3xl font-bold tracking-tight text-slate-950">Faça login</h2>
                            <p class="mt-2 text-sm text-slate-500">Use suas credenciais para continuar no painel.</p>
                        </div>

                        <x-auth-session-status class="mb-6 text-sm font-medium text-emerald-600" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}" class="space-y-6">
                            @csrf

                            <div class="space-y-2">
                                <label for="email" class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-500">E-mail</label>
                                <x-text-input id="email"
                                    class="block w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-950 transition focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                                    type="email"
                                    name="email"
                                    :value="old('email')"
                                    required
                                    autofocus
                                    autocomplete="username"
                                    placeholder="seu@email.com" />
                                <x-input-error :messages="$errors->get('email')" class="text-sm text-rose-500" />
                            </div>

                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <label for="password" class="text-sm font-semibold uppercase tracking-[0.18em] text-slate-500">Senha</label>
                                    @if (Route::has('password.request'))
                                        <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Esqueceu a senha?</a>
                                    @endif
                                </div>
                                <x-text-input id="password"
                                    class="block w-full rounded-3xl border border-slate-200 bg-slate-50 px-4 py-3 text-slate-950 transition focus:border-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-500/20"
                                    type="password"
                                    name="password"
                                    required
                                    autocomplete="current-password"
                                    placeholder="••••••••" />
                                <x-input-error :messages="$errors->get('password')" class="text-sm text-rose-500" />
                            </div>

                            <div class="flex items-center justify-between">
                                <label for="remember_me" class="inline-flex items-center gap-2 text-sm text-slate-600">
                                    <input id="remember_me" type="checkbox" name="remember" class="h-4 w-4 rounded border-slate-300 text-indigo-600 focus:ring-indigo-500" />
                                    Lembrar de mim
                                </label>
                            </div>

                            <button type="submit" class="w-full rounded-3xl bg-gradient-to-r from-indigo-600 to-sky-600 px-5 py-3 text-sm font-semibold text-white shadow-lg shadow-sky-500/20 transition hover:shadow-sky-500/30 focus:outline-none focus:ring-2 focus:ring-indigo-500/30">
                                Entrar Agora
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout> --}}


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar - StockController</title>
    <!-- Tailwind via CDN para renderização imediata -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased flex items-center justify-center min-h-screen relative overflow-hidden">

    <!-- Efeito de Luz de Fundo (Blur) idêntico ao da Welcome -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-md w-full px-6 py-10 bg-slate-800/50 backdrop-blur-xl border border-slate-700/50 rounded-2xl shadow-2xl relative z-10">
        
        <!-- Ícone / Logo Simbólica -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-indigo-600 text-white mb-4 shadow-lg shadow-indigo-600/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-white">Acesse sua Conta</h1>
            <p class="text-slate-400 text-xs mt-1">Insira suas credenciais para gerenciar seu estoque</p>
        </div>

        <!-- Status da Sessão -->
        <x-auth-session-status class="mb-4 text-sm font-medium text-green-400" :status="session('status')" />

        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            <!-- Endereço de E-mail -->
            <div>
                <label for="email" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">
                    {{ __('Email') }}
                </label>
                <input id="email" 
                       class="block w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-200" 
                       type="email" 
                       name="email" 
                       value="{{ old('email') }}" 
                       required 
                       autofocus 
                       autocomplete="username" 
                       placeholder="exemplo@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs text-rose-400" />
            </div>

            <!-- Senha -->
            <div>
                <div class="flex items-center justify-between mb-1">
                    <label for="password" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider">
                        {{ __('Senha') }}
                    </label>
                    @if (Route::has('password.request'))
                        <a class="text-xs font-medium text-indigo-400 hover:text-indigo-300 transition-colors" href="{{ route('password.request') }}">
                            {{ __('Esqueceu a senha?') }}
                        </a>
                    @endif
                </div>
                <input id="password" 
                       class="block w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-200" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="current-password" 
                       placeholder="••••••••" />
                <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs text-rose-400" />
            </div>

            <!-- Lembrar-me -->
            <div class="block">
                <label for="remember_me" class="inline-flex items-center cursor-pointer group">
                    <input id="remember_me" type="checkbox" class="w-4 h-4 rounded border-slate-700 bg-slate-900/60 text-indigo-600 shadow-sm focus:ring-indigo-500 focus:ring-offset-slate-900 cursor-pointer" name="remember">
                    <span class="ms-2 text-sm text-slate-400 group-hover:text-slate-200 transition-colors select-none">{{ __('Lembrar de mim') }}</span>
                </label>
            </div>

            <!-- Ações -->
            <div class="pt-2">
                <button type="submit" class="w-full flex items-center justify-center bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/20 transition-all duration-200 transform active:scale-[0.98]">
                    {{ __('Entrar no Sistema') }}
                </button>
            </div>
        </form>

        <!-- Cadastro Alternativo -->
        @if (Route::has('register'))
            <div class="mt-6 pt-6 border-t border-slate-700/40 text-center">
                <span class="text-xs text-slate-500">Não tem uma conta?</span>
                <a href="{{ route('register') }}" class="ms-1 text-xs font-semibold text-indigo-400 hover:text-indigo-300 transition-colors">
                    Criar Conta Gratuita
                </a>
            </div>
        @endif
    </div>

</body>
</html>

