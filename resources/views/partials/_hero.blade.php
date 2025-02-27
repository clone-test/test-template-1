<section id="hero" class="flex h-screen bg-cover pt-22 relative" style="background-image:url({{ config('angy.images.banner-desktop') }})">
    <div class="w-full bg-gradient-to-b from-white/0 to-black/50 z-0 absolute inset-0"></div>

    <div class="container flex items-end mx-auto px-4 lg:px-6 relative z-10">
        <div class="pb-24">
            <h1 class="text-white text-5xl lg:text-6xl font-black mb-4">{{ config('angy.hero.title') }}</h1>
            <p class="text-lg lg:text-2xl font-medium text-gray-100 mb-8">{{ config('angy.hero.subtitle') }}</p>
            <a href="#contact" class="bg-primary hover:scale-105 shadow-sm hover:shadow-2xl transition text-white py-2 lg:py-3 px-4 lg:px-5 lg:text-base text-sm font-bold rounded-full text-center inline-flex">{{ config('angy.hero.contact-us') }}</a>
        </div>
    </div>
</section>
