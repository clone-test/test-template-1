<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="{{ config('angy.template.preferences.bg_color_preference') === 'dark' ? 'dark' : 'light' }} scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Cache-control" content="public">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('angy.brand.name') }}</title>
    <link rel="icon" type="image/x-icon" href="./img/logos/logo-icon.ico">

    @include('components.custom.theme')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @if (config('app.env') === 'production' && config('app.analytics.code'))
        <script src="https://cdn.usefathom.com/script.js" data-site="{{ config('app.analytics.code') }}" data-spa="auto" defer></script>
    @endif
    @livewireStyles
</head>
<body class="antialiased min-h-screen font-sans">
    <main class="relative">
        {{ $slot }}
    </main>

    <script>
        document.querySelectorAll('.js-custom-logo').forEach(item => {
            item.src = document.body.classList.contains('dark') ? '{{ config('angy.images.logo_dark') }}' : '{{ config('angy.images.logo') }}';
        });
        window.addEventListener('load', (event) => {
            document.querySelectorAll('.link-event').forEach(item => {
                item.addEventListener('click', event => {
                    let fileName = item.getAttribute('href');
                    fathom.trackEvent(`link-clicked: ${fileName}`);
                });
            });
        });
    </script>

    @livewireScripts
</body>
</html>
