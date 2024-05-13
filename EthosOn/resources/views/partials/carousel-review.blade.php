<div id="default-carousel" class="z-0 relative " data-carousel="slide">
    <!-- Carousel wrapper -->
    <div
        class=" rounded-t-2xl py-5 text-center font-bold text-2xl text-white bg-gradient-to-r from-teal-400 to-teal-500">
        Alunos Ethos on
    </div>
    <div class="shadow rounded-lg relative overflow-visible h-fit">
        <!-- Item 1 -->
        @foreach ($reviews as $review)
            <div class="hidden duration-700 ease-in-out pt-10" data-carousel-item>
                <div class="flex items-center flex-col">
                    <img src="{{ asset('uploads/' . $review->image) }}" alt="imagem do aluno {{ $review->nome }}"
                        class="rounded-full size-32 object-cover ">
                    <div class="text-semibold text-lg text-justify w-9/12 overflow-hidden leading-1 h-fit relative pt-5">
                        {!! $review->descricao !!}
                        <h2 class="text-2xl font-bold text-end">{{ $review->nome }}</h2>
                        <h2 class="text-xl text-teal-400 font-smibold text-end">{{ $review->curso }}</h2>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
   
    <div class="rounded-b-2xl py-2 bg-gradient-to-r from-teal-400 to-teal-500 mb-10">
    </div>
     <!-- Slider controls -->
     <button type="button"
     class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
     data-carousel-prev>
     <span
         class="inline-flex items-center justify-center size-10 rounded-full bg-teal-400  group-hover:group-hover:bg-teal-500  group-focus:ring-4 group-focus:ring-teal-500  group-focus:outline-none">
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

