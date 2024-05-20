<div class="relative w-full lg:mb-32
    @if(Request::path() == 'direito')
        max-[768px]:mt-60
    @else
        max-[768px]:mt-20
    @endif {{ $newAttr }}">
    <!-- banner wrapper -->
    <div class="relative h-56 md:h-96">
        <div class="">
            <img  srcset="{{ $image1 }} 2400w, {{ $image2 }} 700w, {{ $image2 }} 300w"
            {{ $attributes->merge(['class' => 'object-bottom block absolute z-0 top-1/2 left-1/2 w-full -translate-x-1/2 -translate-y-1/2']) }}alt="...">
        </div>
        <div class="absolute overflow-hidden sm:mb-5 md:mb-5  lg:mb-0 md:bottom-0 lg:bottom-0 lg:top-0 md:mx-auto lg:w-5/12 md:w-11/12 max-[640px]:w-11/12 sm:w-10/12 h-fit max-[640px]:h-4/6 max-[768px]:mx-10 max-[640px]:mx-5  rounded-xl mt-20 max-[768px]:-mt-5 lg:mt-10 {{ $addons }}
        @if(Request::path() == 'direito')
            sm:top-3/4
            lg:ml-20
        @elseif(Request::path() == 'quem-somos')
            right-0
            lg:mr-10
        @else
            lg:ml-20
            sm:-mt-14
            sm:top-0
        @endif
        ">
            <div class="">{{ $description }}</div>
        </div>
    </div>
</div>
