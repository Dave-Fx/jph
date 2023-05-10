<footer class="relative z-20">
        <div id="footer-text" class=" grid sm:grid-cols-6 md:grid-cols-12  gap-1 p-8 md:px-40 sm:p-auto d-flex sm:items-center bg-primary bg-textureLeft bg-no-repeat text-white">
            <div class="col-span-12 md:col-span-7 sm:col-span-12 xs:col-span-12  md:w-1/2 sm:w-auto xs:w-auto">
                <img class="md:w-48 w-full px-10 md:px-0" src="{{ asset('assets/img/logo-blanco.png') }}" alt="Logo de Antilia96 Cartagena">
                <p class="md:mt-5">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit sit aliquam animi est earum impedit et optio distinctio vero? Aut reiciendis commodi ipsam! Distinctio impedit quaerat itaque, porro doloremque velit.</p>
            </div>
            <div class="col-span-12 md:col-span-5 sm:col-span-12">
                <ul class="text-lg">
                    <li class="my-8 flex items-center">
                        <img class="inline-block mr-5" src="{{ asset('assets/img/icons/correo.svg') }}" width="35px" alt="">
                        <div class="inline-block">
                            <p class="my-3"><a href="mailto:info@antilia96cartagena.com">info@antilia96cartagena.com</a></p>
                            <p class="my-3"><a href="mailto:ventas@antilia96cartagena.com">ventas@antilia96cartagena.com</a></p>
                            <p class="my-3"><a href="mailto:ventas2@antilia96cartagena.com">ventas2@antilia96cartagena.com</a></p>
                        </div>
                    </li>
                    <li class="my-8 flex items-center">
                        <img class="inline-block mr-5" src="{{ asset('assets/img/icons/contacto.svg') }}" width="35px" alt="">
                        <div class="inline-block">
                            <p class="my-3"><a href="tel:573222670742">(+57) 322 2670742</a></p>
                            <p class="my-3"><a href="tel:573222670743">(+57) 322 2670743</a></p>
                        </div>
                    </li>
                    <li class="my-8 flex items-center">
                        <img class="inline-block mr-5" src="{{ asset('assets/img/icons/ubicacion.svg') }}" width="35px" alt="">
                        <a class="inline-block" href="">Sala de Negocios: Marbella, Cra 3 No 47-56 Edf. Laguna 46</a>
                    </li>
                </ul>
            </div>
    </div>
    <div id="copy-bav" class="text-center text-primary bg-secondary p-3">
        <p>{{ date('Y') }} &copy; Diseñado y desarrollado por <a href="https://www.bavpublicidad.com/" target="_blank"><img class="inline-block" src="{{ asset('assets/img/logo-bavpublicidad.svg') }}" width="100px" alt="Logo de Bavpublicidad"></a></p>
    </div>
</footer>