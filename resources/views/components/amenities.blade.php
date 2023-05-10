<section id="amenities" class="bg-primary md:h-[38rem] flex flex-col md:justify-around relative">

    <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Amenidades</h1>

    {{-- bg escritorio --}}

    <div class="bg-textureRight bg-contain absolute h-[38rem] w-full bg-right bg-no-repeat hidden md:block"></div>


    {{-- bg movil --}}
    <div class="bg-textureRight bg-contain absolute h-full w-4/6 -right-[0.01rem] bg-repeat-y md:hidden"></div>

    <div class="flex flex-col-reverse items-center relative z-10 gap-8">
        <div class="grid grid-cols-3 md:grid-cols-5 w-3/5 place-content-center gap-8 md:gap-14">
            <div class="flex items-center  flex-col hover:scale-125 hover:fade-in-out hover:duration-300 ">
                <img loading="lazy" class="h-24 w-24 md:mb-5  " src="{{ asset('assets/img/amenities/gimnasio.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Gimnasio</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/pet_spa.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl ">Pet spa</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/yoga_en_terraza.svg') }}"
                    alt="">
                <span class="text-white text-center text-sm md:text-xl">Yoga en terraza</span>
            </div>
            <div class="flex  items-center  flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 ml-[4.75rem] md:ml-0 w-24  md:mb-5" src="{{ asset('assets/img/amenities/spa.svg') }}" alt="">
                <span class="text-white ml-[4.75rem] md:ml-0 text-center text-sm md:text-xl">Spa</span>
            </div>
            <div class="flex items-center  flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class=" ml-[4.75rem] md:ml-0 h-24 w-11 md:w-24 md:mb-5" src="{{ asset('assets/img/amenities/bbq.svg') }}" alt="">
                <span class="text-white ml-[4.75rem] md:ml-0 text-center text-sm md:text-xl">BBQ</span>
            </div>
        </div>
        <div class=" grid grid-cols-3 md:grid-cols-6 w-3/5 place-content-center gap-8 md:gap-14">
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/cine.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Cine</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/salon_de_fiesta.svg') }}"
                    alt="">
                <span class="text-white text-center text-sm md:text-xl">Salón de fiesta</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/sala_de_juntas.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Sala de juntas</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/guarderia.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Guardería</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/piscina.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Piscina</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img loading="lazy" class="h-24 w-24 md:mb-5" src="{{ asset('assets/img/amenities/coworking.svg') }}" alt="">
                <span class="text-white text-center text-sm md:text-xl">Coworking</span>
            </div>
        </div>
    </div>
    </div>
    <div class="text-center mt-11 mb-11 z-10">
        @include('components.partials._button', ['text' => '¡Adquierelo ahora!'])
    </div>
</section>
