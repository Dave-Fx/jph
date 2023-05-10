<!DOCTYPE html>
<html class="scroll-smooth" lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Antilia 96 &#8211; {{ $title }}</title>

    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" defer></script>

    <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
    <!-- Styles -->

    @vite(['resources/css/app.css', 'resources/js/app.js'])
	@livewireStyles

	@stack('head')
</head>

<body class="antialiased" x-data="{ modelOpen: false }">
    @include('components.nav')

    @yield('content')

    @include('components.footer')
    @include('components.modal')
	@include('components.whatsapp')

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

	@stack('js')
	@livewireScripts
</body>

</html>
