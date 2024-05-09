@push('styles')
<style>
    .card-content > p {
        overflow: hidden !important;
        display: -webkit-box !important;
        -webkit-box-orient: vertical !important;
        -webkit-line-clamp: 2 !important;
    }
</style>
@endpush
<x-layout>
    <x-slot name="meta_descricao">
        Aumente em 3x as chances do seu sucesso no mercado de trabalho!
        Faça sua pós-graduação em direito na Ethos On.
    </x-slot>
    <x-slot name="meta_keywords">
        direito
    </x-slot>
    <x-slot name="title">
        Cursos de Direito - Ethos On
    </x-slot>
    {{-- banner --}}
    <x-banner>
        {{-- caminho para a imagem sempre começando de images/ --}}
        <x-slot name="image1">
            {{ asset('images/banner/cursos/direito/direito.jpg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/cursos/direito/direito-mb.jpg') }}
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5">
                <p class="pb-5 font-bold text-4xl max-[430px]:text-lg">Aumente em 3x as chances do seu sucesso no mercado de trabalho!
                <p class="font-semibold text-3xl">Faça sua pós-graduação em direito na <span class="text-teal-400">Ethos On.</span></p></p>
            </div>
        </x-slot>
        <x-slot name="addons">
            shadow-xl bg-white max-[640px]:h-fit max-[640px]:mx-0 max-[640px]:ml-3
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>
    <div class="xl:pt-32"></div>

    @include('partials.seuCurso')

    {{-- search bar --}}
    <div class="max-[400px]:pt-10 sm:pt-44 md:pt-44 lg:pt-0 pt-10"></div>
    <div class="flex justify-center">
        <div class="lg:w-1/2 max-[768px]:w-12/12 max-[768px]:flex pt-5">
            {{-- caminho para qual pagina vai os parametros do form --}}
            <x-search>/direito</x-search>
        </div>
    </div>

    {{-- cards dos cursos --}}
    <div>
        @foreach ($cursos as $curso)
        <div class="w-full px-2 mb-10 flex justify-center gap-2">
            <x-dynamic-card class="" :curso="$curso" />
        </div>
        @endforeach
        <div class="lg:px-72 w-full max-[768px]:pb-20 max-[768px]:px-10">
            {{ $cursos->appends(['search' => request()->query('search')])->links() }}
        </div>
    </div>
    {{-- <div class="lg:p-20 p-5 testimonial-data">@include('partials.testimonial')</div> --}}
    <div class="w-full pb-96 mb-96 pt-12 lg:px-32">@include('partials.carousel-review')</div>

</x-layout>
