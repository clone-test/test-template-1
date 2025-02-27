<section id="faqs">
    <div class="container mx-auto pt-16 lg:pt-24 px-4 lg:px-6 relative z-10">
        <h2 class="font-bold text-3xl lg:text-5xl text-primary lg:text-center mb-4 lg:mb-8">FAQs</h2>

        <div class="divide-y divide-gray-200 w-full">
            @foreach (config('angy.faqs') as $faq)
                <div x-data="{ open: false }">
                    <div x-on:click="open = !open" class="flex justify-between py-6 cursor-pointer select-none">
                        <div class="font-extrabold text-primary">{{ $faq['question'] }}</div>
                        <button class="text-2xl">
                            <svg x-show="!open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-primary"><path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" /></svg>

                            <svg x-show="open" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-secondary"><path stroke-linecap="round" stroke-linejoin="round" d="M5 12h14" /></svg>
                        </button>
                    </div>
                    <div x-show="open" class="pb-4 divide-y text-gray-600">
                        {{ $faq['answer'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
