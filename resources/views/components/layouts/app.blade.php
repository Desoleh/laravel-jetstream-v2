<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Human Resource Administration' }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css">
        <script src="https://kit.fontawesome.com/420b7a132b.js" crossorigin="anonymous"></script>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <script src="{{ asset('js/dark-mode.js') }}"></script>
        <!-- Styles -->
        @livewireStyles

    </head>
    <body class="font-sans antialiased" x-data="themeSwitcher()" :class="{ 'dark': switchOn }">
        {{-- <x-layouts.frontpage/> --}}
        @include('components.layouts.frontpage')
        {{-- <script src="https://unpkg.com/@popperjs/core@2"></script> --}}
        <script src="{{ asset('js/script.js') }}"></script>
        {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
        @stack('modals')
        @livewireScripts
        <wireui:scripts />


    </body>
</html>
