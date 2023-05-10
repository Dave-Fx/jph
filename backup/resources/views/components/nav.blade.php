{{-- Navegacion --}}
<nav class="bg-primary flex items-center justify-around h-28 bg-texture bg-center">
    {{-- Dropmenu sidebar --}}
    <div class="">
        <button id="btnSidebarToggler" type="button" class="py-4 text-2xl top-0 z-40 text-secondary"
            data-drawer-target="drawer-navigation" data-drawer-show="drawer-navigation" aria-controls="drawer-navigation">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class=" h-16 w-16">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </button>

        <!-- drawer component -->
        <div id="drawer-navigation" class="fixed z-40 h-screen p-4 overflow-y-auto bg-secondary w-80 " tabindex="-1"
            aria-labelledby="drawer-navigation-label">
            <a href="" id="drawer-navigation-label" class="text-base font-semibold text-primary uppercase ">
                <img class="w-11 ml-[2.4rem]" src="{{ asset('assets/img/monograma.png') }}" alt="">
            </a>
            <button type="button" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                class="text-primary bg-transparent  rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center hover:bg-secondary">
                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                    xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
                <span class="sr-only">Close menu</span>
            </button>
            <div class="py-4 overflow-y-auto flex justify-center">
                <ul class="space-y-2">
                    <li>
                        <a href="#project" data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-2 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Proyeto</span>
                        </a>
                    </li>
                    <li>
                        <a href="#amenities"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Amenidades</span>
                        </a>
                    </li>
                    <li>
                        <a href="#apartment"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Apartamentos</span>
                        </a>
                    </li>
                    <li>
                        <a href="#tour"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Tour 360°</span>
                        </a>
                    </li>
                    <li>
                        <a href="#galery"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Galería</span>
                        </a>
                    </li>
                    <li>
                        <a href="#progress"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Avance de obra</span>
                        </a>
                    </li>
                    <li>
                        <a href="#location"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Ubicación</span>
                        </a>
                    </li>
                   {{--  <li>
                        <a href="#contact"  data-drawer-dismiss="drawer-navigation" aria-controls="drawer-navigation"
                            class="flex items-center p-3 text-2xl font-normal text-white  bg-primary hover:bg-primary/80 ">

                            <span class="ml-3">Contacto</span>
                        </a>
                    </li> --}}

                </ul>
            </div>
        </div>

    </div>

    {{-- Logo --}}
    <img class=" py-3 w-48" src="{{ asset('assets/img/logo.webp') }}" alt="">
    {{-- Redes Sociales --}}
    <div class=" flex gap-4">
        <a href="https://www.facebook.com/Antilia96Ctg" target="_blank"><img class=" w-10" src="{{ asset('assets/img/social/facebook.svg') }}" alt=""></a>
        <a href="https://www.instagram.com/antilia96ctg/" target="_blank"><img class=" w-10" src="{{ asset('assets/img/social/instagram.svg') }}" alt=""></a>
    </div>
</nav>
