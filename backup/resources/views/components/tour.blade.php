<section id="tour" class="bg-primary bg-textureRight bg-contain bg-right bg-repeat-y pb-28 px-5 mb:px-28 w-full text-center" id="tour-virtual">
    <div class="text-center text-white relative w-full top-[110px] z-[2]">
        <h1 class="text-5xl text-center text-white font-medium mt-5 mb-11 ">Tour 360</h1>
    </div>
    <div class="w-full flex justify-center z-[1]" id="tour-360">
        <a href="{{ route('tour-360') }}" class="relative w-100 h-100">
            <div class="w-full h-auto relative flex justify-center items-center group">
                <img class="w-full md:max-w-[1200px] h-[400px] object-cover md:h-auto rounded-[30px]" src="{{ asset('assets/img/tour/cover.jpg') }}" alt="" onmouseover="changeToTour()">
                <img class="absolute p-3 duration-700 ease-in-out animate-bounce group-hover:scale-105" src="{{ asset('assets/img/tour/boton.png') }}" alt="">
            </div>
        </a>
    </div>
</section>