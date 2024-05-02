        <x-layout>
            <x-slot name="meta_descricao">
                O instituto Ethos On é uma instituição de educação
                especializada em
                cursos digitais e híbridos de Pós Graduação lato sensu e na formação de trabalhadores
                para médias e grandes empresas.
            </x-slot>
            <x-slot name="meta_keywords">
                cursos EAD, pós graduação, educação
            </x-slot>
            <x-slot name="title">
                Ethos On | Instituto de Ensino a Distância
            </x-slot>
            @include('partials.carousel')
            <!-- Cards dos cursos -->
            {{-- desktop --}}
            <div class="desktop-dropdown py-20 max-[768px]:hidden">
                <div class="w-10/12 flex justify-end text-3xl font-bold text-teal-400 drop-shadow trigger_scroll_right">Áreas
                    de Pós-Graduação</div>
                <div class="w-10/12 flex justify-end px-20 py-10">@include('partials.dropdown-curso')</div>
            </div>
            {{-- mobile --}}
            <div class="min-[768px]:hidden pt-52">@include('partials.dropdown-curso-mobile')</div>
           
            <div class="md:pt-96 lg:pt-0"></div>
            <!-- Cards Educação Corporativa -->
            <div class="bg-gray-100  pb-5">
                <div class="w-full text-center mt-10">
                    <h1 class="text-teal-600 p-5 font-bold text-3xl">Educação Corporativa</h1>
                    <div class="pb-5"></div>
                </div>
                <div class="w-full flex justify-center">
                    @include('partials.ec-card')
                </div>
                <div class="pt-10"></div>
                <x-button class="justify-center">
                    <x-slot name="linkCurso">
                        /educacao-corporativa
                    </x-slot>
                    <p>Acessar áreas de Educação corporativa</p>
                </x-button>
            </div>
            {{-- quem somos --}}
            <div class="max-[768px]:hidden w-full h-full flex items-center justify-center">
                <div class="max-[768px]:hidden mx-auto flex rounded-xl  w-10/12 h-96"
                    style="background-image: url('{{ asset('images/banner/quem-somos.jpg') }}'); background-size: cover; background-position: center;"
                    alt="quem somos">
                    <div class="w-1/2"></div>
                    <div class="w-1/2 text-white flex justify-center my-auto">
                        <div class="w-96">
                            <h1 class="drop-shadow text-3xl font-bold pb-5">Apresentação <span
                                    class=" text-teal-500">Ethos ON</span>
                            </h1>
                            <p
                                class="inset-x-2/3 quem-somos transition-opacity duration-200 right-1/2 drop-shadow font-semibold trigger_scroll_right">
                                O instituto Ethos On é uma instituição de educação
                                especializada em
                                cursos digitais e híbridos de Pós Graduação lato sensu e na formação de
                                trabalhadores
                                para médias e grandes empresas.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="lg:p-20 p-5 testimonial-data">@include('partials.testimonial')</div>
            {{-- mobile --}}
            <div class="mb-20 min-[768px]:hidden flex flex-col rounded-xl bg-center bg-cover mx-3 w-12/12 h-4/6"
                style="background-image: url('{{ asset('images/banner/quem-somos-mb.jpg') }}')">
                <div class="h-1/2"></div>
                <div class="h-1/2 w-full text-white my-auto">
                    <div class="p-10 w-full h-5/6 flex flex-col justify-end mt-12">
                        <h1 class="drop-shadow text-3xl font-bold pb-5">Apresentação <span class="text-teal-500">Ethos
                                ON</span></h1>
                        <p class="trigger_scroll_right transition-opacity duration-200 drop-shadow font-semibold">
                            O instituto Ethos On é uma instituição de
                            educação
                            especializada em cursos digitais e híbridos de Pós Graduação lato sensu e na
                            formação de trabalhadores para médias e grandes empresas.</p>
                    </div>
        </x-layout>
