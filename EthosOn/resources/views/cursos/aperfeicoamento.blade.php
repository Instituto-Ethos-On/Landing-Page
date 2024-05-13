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
        Destaque-se em sua carreira!
        Aprimore suas habilidades e conhecimentos em sua área de atuação no Ethos On!
    </x-slot>
    <x-slot name="meta_keywords">
        cursos de aperfeicoamento
    </x-slot>
    <x-slot name="title">
        Cursos de Pós Graduação - Ethos On
    </x-slot>
    {{-- banner --}}
    <x-banner class="-mt-20">
        {{-- caminho para a imagem sempre começando de images/ --}}
        <x-slot name="image1">
            {{ asset('images/banner/cursos/aperfeicoamento/aperf.jpeg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/cursos/aperfeicoamento/aperf.jpeg') }}
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5">
                <div class="rounded-full text-sm text-gray-700 border-1 border-teal-300 border shadow-teal-200 shadow w-fit p-2 mb-5 max-[768px]:mt-44">
                    <p>Cursos de Aperfeiçoamento</p>
                </div>
                <h1 class="text-4xl font-bold pb-3">Destaque-se em sua carreira!</h1>
                <p class="text-2xl font-semibold pb-3">Aprimore suas habilidades e conhecimentos em sua área de atuação no <span class="text-teal-400">Ethos On.</span></p>
                <x-button>
                    {{-- TODO: links? --}}
                    <x-slot name="linkCurso">
                        {{ $whatsapp_num }}
                    </x-slot>
                    escolha sua área
                </x-button>
            </div>
        </x-slot>
        <x-slot name="addons">
            lg:bg-white max-[640px]:h-fit max-[640px]:mx-0 max-[640px]:ml-3
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>

    {{-- search bar --}}
    <div class="max-[400px]:pt-10 sm:pt-44 md:pt-44 lg:pt-0 pt-10 max-[768px]:mt-96"></div>
    <div class="flex justify-center">
        <div class="lg:w-1/2 max-[768px]:w-12/12 max-[768px]:flex pt-5">
            {{-- caminho para qual pagina vai os parametros do form --}}
            <x-search>/cursos-de-aperfeicoamento</x-search>
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
        {{ $cursos->appends(['search' => request()->query('search')], ['page' => request()->input('review', 1)])->links() }}
    </div>

    {{-- <div class="lg:p-20 p-5 testimonial-data">@include('partials.testimonial')</div> --}}
    <div class="w-full pb-96 mb-96 pt-12 lg:px-32">@include('partials.carousel-review')</div>

</x-layout>

