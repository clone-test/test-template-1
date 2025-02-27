<section id="reviews">
    <div class="container mx-auto pt-16 lg:pt-24 px-4 lg:px-6 relative z-10">
        <div class="flex flex-wrap">
            <div class="flex flex-col md:w-1/2">
                <h2 class="font-bold text-3xl lg:text-5xl text-primary mb-4 lg:mb-8">Contact us</h2>

                <div class="flex flex-col gap-6 w-full text-gray-900 mb-12 md:mb-0">
                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" /></svg>
                        <a href="mailto:{{ config('angy.brand.email') }}" class="underline break-all text-secondary">{{ config('angy.brand.email') }}</a>
                    </div>

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 0 0 2.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 0 1-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 0 0-1.091-.852H4.5A2.25 2.25 0 0 0 2.25 4.5v2.25Z" /></svg>

                        <a href="tel:{{ config('angy.brand.phone') }}" class="underline text-secondary">{{ config('angy.brand.phone') }}</a>
                    </div>

                    <div class="flex items-center gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-5 text-gray-500"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" /></svg>

                        <p><strong>{{ config('angy.contact.subtitle') }}</strong> {{ config('angy.contact.hours') }}</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-4 w-full md:w-1/2 md:pl-10">
                @include('partials._forms')
            </div>
        </div>
    </div>
</section>
