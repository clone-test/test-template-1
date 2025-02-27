<header x-data="{ responsiveMenuIsOpen: false }">
    <nav class="flex items-center fixed z-50 w-full shadow-md h-22 text-gray-900 bg-white">
        <div class="container flex items-center justify-between mx-auto px-4 lg:px-6">
            <a href="#">
                <img src="{{ config('angy.images.logo') }}" alt="{{ config('angy.brand.name') }} logo" class="js-custom-logo h-16 shrink-0" />
            </a>

            <div :class="responsiveMenuIsOpen ? 'flex flex-col gap-6 w-full absolute top-20 left-0 bg-white py-8 z-10' : 'hidden lg:flex gap-6'">
                <div :class="responsiveMenuIsOpen ? 'container mx-auto flex flex-col gap-6 px-4 lg:px-6' : 'hidden lg:flex gap-6'">
                    <a href="#hero" class="cursor-pointer hover:font-bold hover:underline hover:underline-offset-4 transition-all">Home</a>
                    <a href="#about" class="cursor-pointer hover:font-bold hover:underline hover:underline-offset-4 transition-all">About us</a>
                    <a href="#departments" class="cursor-pointer hover:font-bold hover:underline hover:underline-offset-4 transition-all">Services</a>
                    <a href="#reviews" class="cursor-pointer hover:font-bold hover:underline hover:underline-offset-4 transition-all">Reviews</a>
                    <a href="#contact" class="cursor-pointer hover:font-bold hover:underline hover:underline-offset-4 transition-all">Contact</a>
                </div>
            </div>

            <div class="flex items-center">
                <a href="tel:{{ config('angy.brand.phone') }}" class="cursor-pointer bg-secondary hover:bg-secondary/90 transition flex items-center space-x-1 rounded-full py-2 px-3.5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-5 text-white/50"><path fill-rule="evenodd" d="M1.5 4.5a3 3 0 0 1 3-3h1.372c.86 0 1.61.586 1.819 1.42l1.105 4.423a1.875 1.875 0 0 1-.694 1.955l-1.293.97c-.135.101-.164.249-.126.352a11.285 11.285 0 0 0 6.697 6.697c.103.038.25.009.352-.126l.97-1.293a1.875 1.875 0 0 1 1.955-.694l4.423 1.105c.834.209 1.42.959 1.42 1.82V19.5a3 3 0 0 1-3 3h-2.25C8.552 22.5 1.5 15.448 1.5 6.75V4.5Z" clip-rule="evenodd" /></svg>
                    <span class="text-nowrap font-medium text-white text-sm">{{ config('angy.brand.phone') }}</span>
                </a>

                <button x-on:click="responsiveMenuIsOpen = !responsiveMenuIsOpen" class="lg:hidden ml-4 bg-primary text-white rounded-full size-12 flex items-center justify-center cursor-pointer">
                    <svg x-show="!responsiveMenuIsOpen" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="size-6.5"><path fill-rule="evenodd" d="M3 9a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75A.75.75 0 0 1 3 9Zm0 6.75a.75.75 0 0 1 .75-.75h16.5a.75.75 0 0 1 0 1.5H3.75a.75.75 0 0 1-.75-.75Z" clip-rule="evenodd" /></svg>

                    <svg x-show="responsiveMenuIsOpen" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6.5"><path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" /></svg>
                </button>
            </div>
        </div>
    </nav>
</header>
