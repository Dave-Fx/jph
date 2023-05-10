<section id="apartment">
    <div class="bg-textureLeft bg-contain absolute md:h-[44rem] h-[32rem] w-4/6 bg-repeat-y"></div>
    <h1 class="text-5xl text-center text-primary font-medium pt-5 mb-11 ">Apartamentos</h1>
    <div>
        <div class="carousel" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_1.webp') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_2.webp') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_3.webp') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_4.webp') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_5.webp') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img  src="{{ asset('assets/img/apartments/APTO_6.webp') }}" />
            </div>
        </div>
        <div class="text-center pb-[2.35rem] relative z-10">
            @include('components.partials._button', ['text' => '¡Apartamentos  disponibles!'])
        </div>
    </div>
</section>
