<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>JPH &#8211; {{ $title }}</title>

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">

    <script defer src="https://unpkg.com/alpinejs@3.10.5/dist/cdn.min.js"></script>
    

    <!-- Styles -->
    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">

    @vite(['resources/css/app.css','resources/js/jquery.js', 'resources/js/app.js', 'resources/js/fslightbox.js'])

    @livewireStyles

    @stack('head')
</head>

<body class="antialiased" x-data="{ modelOpen: false }">
    @include('components.nav')

    @yield('content')

    @include('components.footer')
    @include('components.modal')
    {{-- @include('components.popup') --}}
    @include('components.whatsapp')

    @stack('js')
    @livewireScripts

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>

    <script>
        document.querySelector('#hover button').setAttribute("id", "btn-enviar-ws");

        window.onload = () => {
            document.getElementById('drawer-navigation').classList.remove('hidden');
            document.getElementById('modal-form').classList.remove('hidden');
        }
    </script>



</body>

</html>
