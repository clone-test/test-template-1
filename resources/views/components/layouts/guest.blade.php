<x-layouts.master>
    @include('partials._header')
    <main class="relative">
        {{ $slot }}
    </main>
    @include('partials._footer')
</x-layouts.master>
