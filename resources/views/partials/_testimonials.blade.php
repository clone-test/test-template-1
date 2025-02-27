<section id="reviews">
    <div class="container mx-auto pt-16 lg:pt-24 px-4 lg:px-6 relative z-10">
        <h2 class="font-bold text-3xl lg:text-5xl text-primary lg:text-center mb-8 lg:mb-16">Reviews</h2>

        <div class="flex flex-col gap-8 md:flex-row sm:flex-wrap items-center md:items-start w-full justify-between">
            @foreach (config('angy.testimonials') as $testimonial)
                <div class="w-full md:w-[30%] bg-white rounded-3xl p-6 shadow-xl ring ring-gray-100">
                    <div class="flex flex-col items-center gap-4">
                        <img src="{{ $testimonial['image'] }}" alt="{{ $testimonial['name'] }}" class="object-cover size-24 rounded-full" />

                        <div class="flex flex-col items-center text-center gap-4">
                            <blockquote class="text-gray-500"><p>"{{ $testimonial['paragraph'] }}"</p></blockquote>
                            <h4 class="font-semibold text-gray-900">{{ $testimonial['name'] }}</h4>
                            <div class="text-yellow-500 text-2xl flex gap-2">
                                @for ($i = 0; $i < $testimonial['stars']; $i++)
                                    <p>&#9733;</p>
                                @endfor
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
