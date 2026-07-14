{{-- <x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

{{--Tela modificada--}}

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Conta - StockController</title>
    <!-- Tailwind via CDN para renderização imediata -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-slate-900 text-slate-100 font-sans antialiased flex items-center justify-center min-h-screen relative overflow-hidden">

    <!-- Efeito de Luz de Fundo (Blur) idêntico ao do Login/Welcome -->
    <div class="absolute top-0 left-1/2 -translate-x-1/2 w-[500px] h-[500px] bg-indigo-500/10 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-md w-full px-6 py-10 bg-slate-800/50 backdrop-blur-xl border border-slate-700/50 rounded-2xl shadow-2xl relative z-10 my-8">
        
        <!-- Ícone / Logo Simbólica -->
        <div class="text-center mb-6">
            <div class="inline-flex items-center justify-center w-14 h-14 rounded-xl bg-indigo-600 text-white mb-4 shadow-lg shadow-indigo-600/30">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" />
                </svg>
            </div>
            <h1 class="text-2xl font-bold text-white">Criar Conta Gratuita</h1>
            <p class="text-slate-400 text-xs mt-1">Cadastre-se para começar a gerenciar seu estoque</p>
        </div>

        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf

            <!-- Nome -->
            <div>
                <label for="name" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">
                    {{ __('Nome Completo') }}
                </label>
                <input id="name" 
                       class="block w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-200" 
                       type="text" 
                       name="name" 
                       value="{{ old('name') }}" 
                       required 
                       autofocus 
                       autocomplete="name" 
                       placeholder="Seu nome" />
                <x-input-error :messages="$errors->get('name')" class="mt-1.5 text-xs text-rose-400" />
            </div>

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
                       autocomplete="username" 
                       placeholder="exemplo@email.com" />
                <x-input-error :messages="$errors->get('email')" class="mt-1.5 text-xs text-rose-400" />
            </div>

            <!-- Senha -->
            <div>
                <label for="password" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">
                    {{ __('Senha') }}
                </label>
                <input id="password" 
                       class="block w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-200" 
                       type="password" 
                       name="password" 
                       required 
                       autocomplete="new-password" 
                       placeholder="••••••••" />
                <x-input-error :messages="$errors->get('password')" class="mt-1.5 text-xs text-rose-400" />
            </div>

            <!-- Confirmar Senha -->
            <div>
                <label for="password_confirmation" class="block text-xs font-semibold text-slate-400 uppercase tracking-wider mb-1">
                    {{ __('Confirmar Senha') }}
                </label>
                <input id="password_confirmation" 
                       class="block w-full px-4 py-3 rounded-xl bg-slate-900/60 border border-slate-700 text-slate-100 placeholder-slate-500 focus:outline-none focus:border-indigo-500 focus:ring-1 focus:ring-indigo-500 transition-all duration-200" 
                       type="password" 
                       name="password_confirmation" 
                       required 
                       autocomplete="new-password" 
                       placeholder="••••••••" />
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1.5 text-xs text-rose-400" />
            </div>

            <!-- Botão de Cadastro -->
            <div class="pt-2">
                <button type="submit" class="w-full flex items-center justify-center bg-indigo-600 hover:bg-indigo-500 text-white font-medium py-3 px-4 rounded-xl shadow-lg shadow-indigo-600/20 transition-all duration-200 transform active:scale-[0.98]">
                    {{ __('Criar Conta') }}
                </button>
            </div>
        </form>

        <!-- Link para Login -->
        <div class="mt-6 pt-6 border-t border-slate-700/40 text-center">
            <span class="text-xs text-slate-500">Já tem uma conta?</span>
            <a href="{{ route('login') }}" class="ms-1 text-xs font-semibold text-indigo-400 hover:text-indigo-300 transition-colors">
                Fazer Login
            </a>
        </div>
    </div>

</body>
</html>