<div id="default-carousel" class="relative w-full" data-carousel="static">
    <!-- Carousel wrapper -->
    <div class="relative lg:h-56 h-96 overflow-visible rounded-lg md:h-96">
        <!-- Item 1 -->
        <div class="w-full text-center ">Alunos Ethoson</div>
        @foreach ($reviews as $review)
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <div class="w-full h-fit flex items-center justify-center ">
                    <div class=" max-[768px]:px-5 py-20 lg:w-1/2 h-full relative border-2 border-teal-500">
                        <div class="flex justify-center"><img class="size-36 rounded-full object-cover"
                                src="{{ asset('uploads/' . $review->image) }}" alt="aluno {{ $review->nome }}"></div>
                        <p class="max-[768px]:pb-20 text-center pt-5">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                            Perferendis a ex perspiciatis, quisquam itaque eveniet enim reprehenderit sequi provident
                            unde eum aspernatur, dolor, inventore maiores excepturi ullam nisi aperiam minima?</p>
                        <div class="absolute bottom-0 right-0 text-end">
                            <h2 class="font-bold text-2xl mr-5">{{ $review->nome }}</h2>
                            <h2 class="font-bold text-xl text-teal-400 mr-5 leading-1">{{ $review->curso }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Slider indicators -->

    <!-- Slider controls -->
    <button type="button"
        class="max-[768px]:hidden absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-teal-400 group-hover:bg-white/50 group-focus:ring-4 group-focus:ring-white  group-focus:outline-none">
            <svg class="w-4 h-4 text-black  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="max-[768px]:hidden absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-teal-400  group-hover:bg-white/50  group-focus:ring-4 group-focus:ring-white group-focus:outline-none">
            <svg class="w-4 h-4 text-black  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>
