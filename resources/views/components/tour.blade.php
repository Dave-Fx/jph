<section id="tour" class="bg-primary bg-textureRight bg-contain bg-right bg-repeat-y pb-11 px-5 mb:px-28 w-full text-center" id="tour-virtual">

    <div class="w-full flex justify-center pt-11 z-[1]" id="tour-360">
        <a target="_blank" href="{{ route('tour-360') }}" class="relative w-100 h-100">
            <div class="w-full h-auto relative flex justify-center items-center">
                <img loading="lazy" class="w-full  md:max-w-[1200px] h-[400px] object-cover md:h-auto rounded-[30px]" src="{{ asset('assets/img/tour/cover.webp') }}" alt="" onmouseover="changeToTour()">
                <img loading="lazy" class="absolute animate-bounce p-3" src="{{ asset('assets/img/tour/boton.webp') }}" alt="">
            </div>
        </a>
    </div>
</section>