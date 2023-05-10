<section id="project" class="flex flex-row h-[38rem]">
    <div class=" bg-building bg-no-repeat bg-contain bg-fixed md:basis-2/4 relative z-10"></div>

    <div class="bg-textureLeft bg-contain bg-no-repeat absolute h-[38rem] w-4/6 left-96"></div>
    <div class="flex flex-col justify-around ">
        <div class=" text-center items-start ">
            <h1 class="text-5xl text-primary font-medium ">Proyecto</h1>
        </div>

        <div class="flex self-center justify-self-center justify-center flex-col md:w-4/6 ">
            <h1 class="text-4xl text-primary font-semibold text-center mb-5">Antilia 96</h1>
            <p class=" font-normal text-lg ">Antilia 96, es un novedoso proyecto que llega con nueva conceptualización de
                vivienda a Cartagena, un concepto que busca satisfacer todas las necesidades que presentan las familias
                hoy en día, quienes podrán disfrutar de distintas actividades sin salir del condominio.</p>
        </div>
        <div class="text-center z-10">

            @include('components.partials._button', ['text' => '¡Adquierelo ahora!'])
        </div>
        <div class="self-end p-7 fixed bottom-0 z-10">
            <a href="#progress">
                <img src="{{ asset('assets/img/sello.png') }}" alt="">
            </a>
        </div>
    </div>
</section>
