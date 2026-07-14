<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-[#0b0f19] text-slate-100 min-h-screen">
        <div class="min-h-screen bg-[#0b0f19]">
            <!-- Menu de Navegação do Breeze adaptado para o modo escuro -->
            <div class="bg-slate-900/50 backdrop-blur-md border-b border-slate-800/80">
                @include('layouts.navigation')
            </div>

            <!-- Cabeçalho da Página (Se houver) -->
            @if (isset($header))
                <header class="bg-slate-900/30 border-b border-slate-800/50">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Conteúdo Principal do Dashboard -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
