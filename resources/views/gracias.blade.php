@extends('layouts.layout', ['title' => 'Gracias'])

@section('content')
    @if(session('medium'))
        @push('head')
            @if (session('medium') == "Contacto WHATSAPP")
                <script>
                    // Script que envía el dato a Google Analytics
                    window.open("https://api.whatsapp.com/send?phone=573017344642&text=%C2%A1Hola%20Antilia%2096%20Cartagena!%20soy%20{{ session('name') }}%2C%20puedes%20darme%20m%C3%A1s%20informaci%C3%B3n%20sobre%20el%20proyecto%3F", "_self")
                </script>
            @endif
        @endpush
    @endif
    <section class="flex justify-center flex-col items-center relative  bg-header  bg-cover bg-no-repeat h-screen z-20">
        <div class="bg-black opacity-50 bg-cover bg-no-repeat  w-full h-screen absolute"></div>
        <div class="z-10 absolute bottom-[-5rem] flex justify-center flex-col items-center bg-cover bg-no-repeat group  w-4/5 h-3/4 ">
            <div class="group-hover:opacity-0 transition-opacity ease-in duration-700 opacity-100  ">
                <h1 class=" text-white text-center font-canvas text-3xl md:text-7xl  ">Gracias por contactarnos</h1>
                <p class="text-white text-2xl mt-4 text-center">Pronto un asesor te contactará.</p>
            </div>
            <div class=" mt-14">
                <div class="flex justify-center mt-6 py-8">
                    <a type="button" href="{{ route('index') }}" class="text-3xl font-bold bg-secondary text-white rounded-full px-7 py-2">Volver al inicio</a>
                </div>
            </div>
        </div>
    </section>
@endsection