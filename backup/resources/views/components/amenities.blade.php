<section id="amenities" class="bg-primary md:h-[38rem] flex flex-col md:justify-around relative">

    <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Amenidades</h1>

    {{-- bg escritorio --}}

    <div class="bg-textureRight bg-contain absolute h-[38rem] w-full bg-right bg-no-repeat hidden md:block"></div>


    {{-- bg movil --}}
    <div class="bg-textureRight bg-contain absolute h-full w-4/6 -right-[0.01rem] bg-repeat-y md:hidden"></div>

    <div class="flex flex-col justify-center relative z-10 gap-20">
        <div class="flex flex-wrap justify-center gap-14">
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300 ">
                <img class="h-24 w-24 mb-5  " src="{{ asset('assets/img/amenities/gimnasio.svg') }}" alt="">
                <span class="text-white text-xl">Gimnasio</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/pet_spa.svg') }}" alt="">
                <span class="text-white text-xl">Pet spa</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/yoga_en_terraza.svg') }}"
                    alt="">
                <span class="text-white text-xl">Yoga en terraza</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/spa.svg') }}" alt="">
                <span class="text-white text-xl">Spa</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/bbq.svg') }}" alt="">
                <span class="text-white text-xl">BBQ</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/cine.svg') }}" alt="">
                <span class="text-white text-xl">Cine</span>
            </div>
        </div>
        <div class="flex flex-wrap justify-center gap-14">
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/salon_de_fiesta.svg') }}"
                    alt="">
                <span class="text-white text-xl">Salón de fiesta</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/sala_de_juntas.svg') }}" alt="">
                <span class="text-white text-xl">Sala de juntas</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/guarderia.svg') }}" alt="">
                <span class="text-white text-xl">Guardería</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/piscina.svg') }}" alt="">
                <span class="text-white text-xl">Piscina</span>
            </div>
            <div class="flex items-center flex-col hover:scale-125 hover:fade-in-out hover:duration-300">
                <img class="h-24 w-24 mb-5" src="{{ asset('assets/img/amenities/coworking.svg') }}" alt="">
                <span class="text-white text-xl">Coworking</span>
            </div>
        </div>
    </div>
    <div class="text-center mt-11 mb-11 z-10">
        @include('components.partials._button', ['text' => '¡Adquierelo ahora!'])
    </div>
</section>
