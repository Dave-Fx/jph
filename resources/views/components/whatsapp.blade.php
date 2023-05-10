<div id="hover" class="w-[250px] fixed bottom-5 left-5 z-30">
    <a target="_blank" class='flotante'>
        <img loading="lazy" src='{{ asset('assets/img/whatsapp.webp') }}' width="65"/>
    </a>
    <div id="popup" class="absolute bottom-0 bg-primary bg-texture bg-cover bg-no-repeat h-auto transition-all px-4 py-3 rounded-md border-2 border-secondary hidden">
        <p id="cerrar-popup" class="hover:cursor-pointer absolute top-2 right-2 text-white">&#x2715;</p>
        <div class="mt-5"></div>
        @livewire('form-validation', ['medium' => 'Contacto WHATSAPP'])
    </div>
</div>

 <!-- script whatsapp -->
 <script>
    document.querySelector('#hover').onmouseover = function(){
        document.querySelector('#popup').classList.remove("hidden");
        document.querySelector('#popup').classList.add("block");
    }
    document.querySelector('#cerrar-popup').onclick = function(){
        document.querySelector('#popup').classList.remove("block");
        document.querySelector('#popup').classList.add("hidden");
    }
</script>
<!-- en script whatsapp -->