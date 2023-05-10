<section id="apartment">
    <div class="bg-textureLeft bg-contain absolute h-[44rem] w-4/6 bg-repeat-y"></div>
    <h1 class="text-5xl text-center text-primary font-medium pt-5 mb-11 ">Apartamentos</h1>
    <div>

        <div class="carousel" data-flickity='{ "wrapAround": true }'>
            <div class="carousel-cell shadow-2xl">
                <img src="{{ asset('assets/img/apartments/apartamento_tipo_3.jpg') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img src="{{ asset('assets/img/apartments/apartamento_tipo_3.jpg') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img src="{{ asset('assets/img/apartments/apartamento_tipo_3.jpg') }}" />
            </div>
            <div class="carousel-cell shadow-2xl">
                <img src="{{ asset('assets/img/apartments/apartamento_tipo_3.jpg') }}" />
            </div>
        </div>

        <div class="text-center pb-[2.35rem] relative z-10">
            @include('components.partials._button', ['text' => '¡Apartamentos  disponibles!'])
        </div>
    </div>

</section>
