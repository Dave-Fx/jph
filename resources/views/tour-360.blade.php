@extends('layouts.layout', ['title' => 'Tour 360'])

@section('content')
    <section
        class="bg-primary bg-500 bg-left-20 bg-left bg-top-[-12px] bg-repeat-y pb-28 px-5 mb:px-28 mt-[-20px] w-full text-center"
        id="tour-virtual">
        <div class="text-center text-white relative w-full top-[36px] md:top-[110px]">
            <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Tour 360</h1>
        </div>
        <div class="w-full flex justify-center" id="tour-360">
            {{-- <img class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()"> --}}
            <iframe class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]"
                src="https://www.antilia96cartagena.com/modelo/APTOTRESALCOBASV1/" frameborder="1" scrolling="yes"
                loading="lazy"></iframe>
        </div>
        <div class="text-center mt-11 mb-11 z-10">
            @include('components.partials._button', ['text' => '¡Adquierelo ahora!'])
        </div>
    </section>
    <section class="bg-primary bg-500 bg-left-20 bg-left bg-top-[-12px] bg-repeat-y pb-[1px] px-5 mb:px-28 mt-[-20px] w-full text-center" id="tour-virtual">
        <div class="text-center text-white relative w-full top-[36px] md:top-[110px]">
            <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Apartamento Modelo 1 Alcoba</h1>
        </div>
        <div class="w-full flex justify-center" id="tour-360">
            {{-- <img class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()"> --}}
            <iframe class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="https://www.antilia96cartagena.com/modelo/APTODOSALCOBASV3/" frameborder="1" scrolling="yes" loading="lazy"></iframe>
        </div>
        <div class="text-center mt-11 mb-11 z-10">
            @include('components.partials._button', ['text' => '!Adquierelo ahora!'])
        </div>
    </section>
    <section class="bg-primary  bg-500 bg-left-20 bg-left bg-top-[-12px] bg-repeat-y pb-[1px] px-5 mb:px-28 mt-[-20px] w-full text-center" id="tour-virtual">
        <div class="text-center text-white relative w-full top-[36px] md:top-[110px]">
            <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Apartamento Modelo 2 Alcobas</h1>
        </div>
        <div class="w-full flex justify-center" id="tour-360">
            {{-- <img class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()"> --}}
            <iframe class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="https://www.antilia96cartagena.com/modelo/APTODOSALCOBASV2/" frameborder="1" scrolling="yes" loading="lazy"></iframe>
        </div>
        <div class="text-center mt-11 mb-11 z-10">
            @include('components.partials._button', ['text' => '!Adquierelo ahora!'])
        </div>
    </section>
    <section class="bg-primary  bg-500 bg-left-20 bg-left bg-top-[-12px] bg-repeat-y pb-[1px] px-5 mb:px-28 mt-[-20px] w-full text-center" id="tour-virtual">
        <div class="text-center text-white relative w-full top-[36px] md:top-[110px]">
            <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Apartamento Modelo 3 Alcobas</h1>
        </div>
        <div class="w-full flex justify-center" id="tour-360">
            {{-- <img class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()"> --}}
            <iframe class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="https://www.antilia96cartagena.com/modelo/APTOTRESALCOBASV1/" frameborder="1" scrolling="yes" loading="lazy"></iframe>
        </div>
        <div class="text-center mt-11 mb-11 z-10">
            @include('components.partials._button', ['text' => '!Adquierelo ahora!'])
        </div>
    </section>
    <section class="bg-primary  bg-500 bg-left-20 bg-left bg-top-[-12px] bg-repeat-y pb-[1px] px-5 mb:px-28 mt-[-20px] w-full text-center" id="tour-virtual">
        <div class="text-center text-white relative w-full top-[36px] md:top-[110px]">
            <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Apartamento Modelo Penthouse​</h1>
        </div>
        <div class="w-full flex justify-center" id="tour-360">
            {{-- <img class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()"> --}}
            <iframe class="w-full md:max-w-[1200px] h-[600px] rounded-[30px]" src="https://www.antilia96cartagena.com/modelo/PENTHOUSE/" frameborder="1" scrolling="yes" loading="lazy"></iframe>
        </div>
        <div class="text-center mt-11 mb-11 z-10">
            @include('components.partials._button', ['text' => '!Adquierelo ahora!'])
        </div>
    </section>
@endsection
