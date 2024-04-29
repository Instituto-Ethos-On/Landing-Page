<div id="default-carousel" class="z-0 relative lg:w-10/12 lg:mx-auto" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div
        class="rounded-t-2xl py-5 text-center font-bold text-2xl text-white bg-gradient-to-r from-teal-400 to-teal-500">
        Alunos Ethos on
    </div>
    <div class="relative shadow overflow-hidden rounded-lg">
        <!-- Item 1 -->
        @foreach ($reviews as $review)
            <div class="relative hidden duration-700 ease-in-out lg:p-10 p-6 h-full" data-carousel-item>
                <div class="flex items-center flex-col ">
                    <img src="{{ asset('uploads/' . $review->image) }}" alt="imagem do aluno {{ $review->nome }}"
                        class="rounded-full size-32 object-cover">
                    <div class="text-semibold text-lg text-justify w-9/12 overflow-hidden h-fit relative">
                        {!! $review->descricao !!}
                    </div>
                </div>
                <div class="absolute bottom-0 right-0 lg:mr-20 lg:mb-10 mb-5 text-end">
                    <h2 class="text-2xl font-bold">{{ $review->nome }}</h2>
                    <h2 class="text-xl text-teal-400 font-smibold">{{ $review->curso }}</h2>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
        @php
            $count = $reviews->count();
        @endphp
        @for ($i = 0; $i < $count; $i++)
            <button type="button" class="bg-teal-400/60 drop-shadow-lg w-3 h-3 rounded-full" aria-current="true"
                aria-label="Slide {{ $i + 1 }}" data-carousel-slide-to="{{ $i }}"></button>
        @endfor
    </div>
    <div class="rounded-b-2xl py-2 bg-gradient-to-r from-teal-400 to-teal-500 mb-10">
    </div>
     <!-- Slider controls -->
     <button type="button"
     class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
     data-carousel-prev>
     <span
         class="inline-flex items-center justify-center size-10 rounded-full bg-teal-400  group-hover:group-hover:bg-teal-500  group-focus:ring-4 group-focus:ring-teal-400  group-focus:outline-none">
         <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 6 10">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="M5 1 1 5l4 4" />
         </svg>
         <span class="sr-only">Previous</span>
     </span>
 </button>
 <button type="button"
     class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
     data-carousel-next>
     <span
         class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-teal-400  group-hover:bg-teal-500  group-focus:ring-4 group-focus:ring-teal-400 group-focus:outline-none">
         <svg class="w-4 h-4 text-white  rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
             fill="none" viewBox="0 0 6 10">
             <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                 d="m1 9 4-4-4-4" />
         </svg>
         <span class="sr-only">Next</span>
     </span>
 </button>
</div>

