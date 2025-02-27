<section id="departments">
    <div class="container mx-auto pt-16 lg:pt-24 px-4 lg:px-6 relative z-10">
        <h2 class="font-bold text-3xl lg:text-5xl text-primary lg:text-center mb-8 lg:mb-16">Our services</h2>

        <div class="grid grid-cols-1 gap-12">
            @foreach (config('angy.departments') as $card)
                <div class="flex flex-col gap-12">
                    <div class="grid lg:grid-cols-2 gap-6 lg:gap-12">
                        @if ($loop->odd)
                            <img src="{{ $card['image']  ?? 'img/departamentos/DD05s.png' }}" alt="{{ $card['title'] }}" class="object-cover aspect-video size-full rounded-2xl" />
                        @endif

                        <div class="flex items-center">
                            <div>
                                <h2 class="font-bold text-2xl md:text-3xl text-primary mb-2 lg:mb-4">{{ $card['title'] }}</h2>
                                <p class="text-gray-500 lg:text-lg">{{ $card['description'] }}</p>
                            </div>
                        </div>

                        @if ($loop->even)
                            <img src="{{ $card['image'] ?? 'img/departamentos/DD05s.png' }}" alt="{{ $card['title'] }}" class="order-first lg:order-last aspect-video object-cover size-full rounded-2xl" />
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
