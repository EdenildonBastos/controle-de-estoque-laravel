{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session('status') == 'verification-link-sent')
        <div class="mb-4 font-medium text-sm text-green-600">
            {{ __('A new verification link has been sent to the email address you provided during registration.') }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route('verification.send') }}">
            @csrf

            <div>
                <x-primary-button>
                    {{ __('Resend Verification Email') }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route('logout') }}">
            @csrf

            <button type="submit" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                {{ __('Log Out') }}
            </button>
        </form>
    </div>
</x-guest-layout> --}}



<!-- Substituímos o <x-guest-layout> por divs controláveis e mantivemos a compatibilidade do layout -->
<div class="min-h-screen flex flex-col justify-center items-center bg-gradient-to-br from-slate-50 to-slate-100 dark:from-zinc-950 dark:to-zinc-900 px-6 py-12">
    
    <!-- Card Principal Moderno -->
    <div class="w-full sm:max-w-md bg-white dark:bg-zinc-900/80 dark:backdrop-blur-md p-8 rounded-2xl border border-slate-100 dark:border-zinc-800/80 shadow-xl shadow-slate-200/50 dark:shadow-none transition-all duration-300">
        
        <!-- Ícone e Cabeçalho Modernos -->
        <div class="mb-6 text-center">
            <div class="inline-flex items-center justify-center w-12 h-12 rounded-2xl bg-indigo-50 dark:bg-zinc-800 text-indigo-600 dark:text-indigo-400 mb-4">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 19v-8.93a2 2 0 01.89-1.664l8-5.333a2 2 0 012.22 0l8 5.333A2 2 0 0121 10.07V19M3 19a2 2 0 002 2h14a2 2 0 002-2M3 19l6.75-4.5M21 19l-6.75-4.5M3 10l6.75 4.5M21 10l-6.75 4.5m0 0l-2.25-1.5a2 2 0 00-2.22 0l-2.25 1.5" />
                </svg>
            </div>
            <h2 class="text-2xl font-bold tracking-tight text-slate-900 dark:text-white">
                {{ __('Verifique seu e-mail') }}
            </h2>
        </div>

        <!-- Texto Informativo -->
        <div class="mb-6 text-sm text-center leading-relaxed text-slate-500 dark:text-zinc-400">
            {{ __('Obrigado por se cadastrar! Antes de começar, por favor, confirme seu endereço de e-mail clicando no link que acabamos de enviar para você. Se não recebeu o e-mail, podemos enviar outro com prazer.') }}
        </div>

        <!-- Status da Sessão (Link Enviado) -->
        @if (session('status') == 'verification-link-sent')
            <div class="mb-6 p-4 rounded-xl bg-emerald-50 dark:bg-emerald-950/30 border border-emerald-100 dark:border-emerald-900/30 text-emerald-700 dark:text-emerald-400 text-sm font-medium">
                {{ __('Um novo link de verificação foi enviado para o endereço de e-mail fornecido no cadastro.') }}
            </div>
        @endif

        <!-- Ações do Formulário -->
        <div class="mt-6 flex flex-col sm:flex-row items-center justify-between gap-4">
            <form method="POST" action="{{ route('verification.send') }}" class="w-full sm:w-auto">
                @csrf
                <x-primary-button class="w-full sm:w-auto justify-center px-5 py-2.5 rounded-xl bg-indigo-600 hover:bg-indigo-500 active:bg-indigo-700 focus:ring-indigo-500 transition-all duration-150 transform active:scale-95">
                    {{ __('Reenviar E-mail de Verificação') }}
                </x-primary-button>
            </form>

            <form method="POST" action="{{ route('logout') }}" class="w-full sm:w-auto text-center">
                @csrf
                <button type="submit" class="underline text-sm text-slate-500 hover:text-slate-900 dark:text-zinc-400 dark:hover:text-zinc-200 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 transition-colors">
                    {{ __('Sair da Conta') }}
                </button>
            </form>
        </div>

    </div>
</div>


