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
        Pós-graduação no Ethos on!
    </x-slot>
    <x-slot name="meta_keywords">
        pós graduação
    </x-slot>
    <x-slot name="title">
        Cursos de Pós Graduação - Ethos On
    </x-slot>
    {{-- banner --}}
    <x-banner class="scale-[2]">
        {{-- caminho para a imagem sempre começando de images/ --}}
        <x-slot name="image1">
            {{ asset('images/banner/cursos/posgraduacoes/posgraduacoes.jpeg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/cursos/posgraduacoes/posgraduacoes.jpeg') }}
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5">
                <h1 class="font-bold text-4xl text-white py-20 w-72">Pós-graduação no <span class="text-teal-400">Ethos ON</span></h1>
            </div>
        </x-slot>
        <x-slot name="addons">
            bg-transparent max-[640px]:h-fit max-[640px]:mx-0 max-[640px]:ml-3
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>

    {{-- search bar --}}
    <div class="max-[400px]:pt-10 sm:pt-44 md:pt-44 lg:pt-0 pt-10"></div>
    <div class="flex justify-center">
        <div class="lg:w-1/2 max-[768px]:w-12/12 max-[768px]:flex pt-5">
            {{-- caminho para qual pagina vai os parametros do form --}}
            <x-search>/pos-graduacoes</x-search>
        </div>
    </div>

    {{-- cards dos cursos --}}
    <div>
        @forelse ($cursos as $curso)
        <div class="w-full px-2 mb-10 flex justify-center gap-2">
            <x-dynamic-card class="" :curso="$curso" />
        </div>
        @empty
        <div class="text-center p-5">Nenhum curso encontrado</div>
        @endforelse
    </div>
    <div class="lg:px-72 w-full max-[768px]:pb-20 max-[768px]:px-10">
        {{ $cursos->appends(['search' => request()->query('search')])->links() }}
    </div>

    {{-- <div class="lg:p-20 p-5 testimonial-data">@include('partials.testimonial')</div> --}}
    <div class="w-full pb-96 mb-96 pt-12 lg:px-32">@include('partials.carousel-review')</div>


</x-layout>

