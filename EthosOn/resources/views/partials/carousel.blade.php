<div id="controls-carousel" class="relative z-0 w-full mb-32" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="overflow-visible relative h-56 md:h-96">
        <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img srcset="{{ asset('images/banner/2.WEBP') }} 2400w, {{ asset('images/banner/2.WEBP') }} 700w"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <div id="description-pop"
                class="absolute overflow-hidden sm:mb-5 md:mb-5 lg:ml-20 lg:mb-0 md:bottom-0 lg:bottom-0 md:mx-auto lg:w-5/12 md:w-11/12 max-[640px]:w-11/12 sm:w-11/12 h-fit max-[768px]:overflow-visible max-[768px]:mx-10 max-[640px]:mx-5 rounded-xl sm:top-0 index-10 lg:mt-20  max-[400px]:mt-0">
                <div class="sm:p-10 pt-56"><h1 class="drop-shadow font-semibold text-teal-400 text-2xl lg:text-4xl">Gestão de Negócios ou Tecnologia!</h1>
                    <div class="pb-3"></div>
                    <h2 class="drop-shadow sm:text-white text-black font-bold text-2xl">
                        <quote>Alavanque sua carreira, especialize-se e atenda as novas demandas do mercado.  Faça sua especialização no Ethos On.</quote>
                    </h2>
                    <div class="pb-2"></div>
                    <x-button>
                        <x-slot name="linkCurso">
                            {{ $whatsapp_num }}
                        </x-slot>
                        <p>Matricule-se agora</p>
                    </x-button>
                    </div>
            </div>
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img srcset="{{ asset('images/banner/1.WEBP') }} 2400w, {{ asset('images/banner/1.WEBP') }} 700w"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <div
                class="absolute overflow-hidden sm:mb-5 md:mb-5 lg:ml-20 lg:mb-0 md:bottom-0 lg:bottom-0 md:mx-auto lg:w-5/12 md:w-11/12 max-[640px]:w-11/12 sm:w-11/12 h-fit max-[768px]:overflow-visible max-[768px]:mx-10 max-[640px]:mx-5 rounded-xl sm:top-0 index-10 lg:mt-20  max-[400px]:mt-0">
                <div class="sm:p-10 pt-56"><h1 class="drop-shadow font-semibold text-teal-400 text-2xl lg:text-4xl">Torne-se uma especialista requisitada na sua  área de atuação!</h1>
                    <div class="pb-3"></div>
                    <h2 class="font-bold text-xl line-clamp-3 drop-shadow">
                        Fazendo a sua pós-graduação no Ethos On você se destaca no mercado de trabalho, garantindo um currículo de excelência.
                    </h2>
                    <div class="pb-2"></div>
                    <x-button>
                        <x-slot name="linkCurso">
                            {{ $whatsapp_num }}
                        </x-slot>
                        <p>Matricule-se agora</p>
                    </x-button>
                    </div>
            </div>
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img srcset="{{ asset('images/banner/3.WEBP') }} 2400w, {{ asset('images/banner/3.WEBP') }} 700w"
                class="block absolute top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2" alt="...">
                <div id="description-pop"
                class="absolute overflow-hidden sm:mb-5 md:mb-5 lg:ml-20 lg:mb-0 md:bottom-0 lg:bottom-0 md:mx-auto lg:w-5/12 md:w-11/12 max-[640px]:w-11/12 sm:w-11/12 h-fit max-[768px]:overflow-visible max-[768px]:mx-10 max-[640px]:mx-5 rounded-xl sm:top-0 index-10 lg:mt-20  max-[400px]:mt-0">
                <div class="sm:p-10 pt-56"><h1 class="drop-shadow font-semibold text-teal-400 text-2xl lg:text-4xl">Desenvolva novas habilidades e atenda  as principais demandas da sua área.</h1>
                    <div class="pb-2"></div>
                    <h2 class="drop-shadow font-bold text-xl">
                        <quote>Fique um passo à frente da concorrência, conquiste sua promoção através de um currículo de excelência.</quote>
                    </h2>
                    <div class="pb-2"></div>
                    <x-button>
                        <x-slot name="linkCurso">
                            {{ $whatsapp_num }}
                        </x-slot>
                        <p>Matricule-se agora</p>
                    </x-button>
                    </div>
            </div>
        </div>
    </div>
    <!-- Slider controls -->
    <button type="button"
        class="flex absolute top-0 z-30 justify-center items-center px-4 h-full cursor-pointer focus:outline-none start-0 group"
        data-carousel-prev>
        <span
            class="shadow inline-flex justify-center items-center w-10 h-10 rounded-full group-focus:ring-4 group-focus:ring-white group-focus:outline-none bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-hover:bg-white/50">
            <svg class="w-4 h-4 text-gray-800 dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="flex absolute top-0 z-30 justify-center items-center px-4 h-full cursor-pointer focus:outline-none end-0 group"
        data-carousel-next>
        <span
            class="shadow inline-flex justify-center items-center w-10 h-10 rounded-full group-focus:ring-4 group-focus:ring-white group-focus:outline-none bg-white/30 dark:bg-gray-800/30 dark:group-hover:bg-gray-800/60 dark:group-focus:ring-gray-800/70 group-hover:bg-white/50">
            <svg class="w-4 h-4 text-gray-800  dark:text-gray-800 rtl:rotate-180" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
