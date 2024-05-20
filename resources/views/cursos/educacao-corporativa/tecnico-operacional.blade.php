<x-layout>
    <x-slot name="meta_descricao">
        Professores experientes nas áreas operacionais de grandes empresas, nossos cursos garantem uma comunicação eficaz e uma aprendizagem significativa.
    </x-slot>
    <x-slot name="meta_keywords">
        tecnico operacional
    </x-slot>
    @push('styles')
        <style>
            .parallax {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/tecnico/tecnico-1.jpeg') }});
            }

            .parallax-2 {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/tecnico/tecnico-2.jpeg') }});
                
            }
        </style>
    @endpush
    <x-slot name="title">
        Tecnico Operacional - Ethos on
    </x-slot>
    <x-banner class="-mt-4">
        
        <x-slot name="image1">
            {{ asset('images/banner/edu-corporativa/tecnico/tecnico-operacional.jpeg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/edu-corporativa/tecnico/tecnico-operacional.jpeg') }}
        </x-slot>
        <x-slot name="addons">
            lg:bg-white right-0 lg:mr-52 lg:-mt-8 lg:w-[450px] max-[768px]:overflow-visible
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5 max-[768px]:pt-60">
                <h2 class="font-semibold">Técnico-<span class="text-teal-400 font-bold">operacional</span></h2>
                <h1 class="font-semibold lg:text-3xl text-2xl">
                    Transforme sua equipe
                    <span class="text-teal-400">Técnico-operacional</span>
                </h1>
                <div class="font-semibold text-gray-900 text-base pb-5">
                    <p class="pb-3">
                        Professores experientes nas áreas operacionais de grandes empresas, nossos cursos garantem uma
                        comunicação eficaz e uma aprendizagem significativa.
                    </p>
                    <ul class="flex flex-col gap-y-4">
                        <li><i aria-hidden="true"
                                class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Preparação para
                                processos de certificação</span></li>
                        <li><i aria-hidden="true"
                                class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Formação para o desempenho da equipe</span></li>
                        <li><i aria-hidden="true"
                                class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Soluções personalizadas em modalidades presencial, a distância ou híbrido.</span></li>
                    </ul>
                </div>
                <x-button>
                    {{-- TODO: link do curso de tecnico operacional --}}
                    <x-slot name="linkCurso">
                        {{ $whatsapp_num }}
                    </x-slot>
                    Fale Conosco
                </x-button>
            </div>
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>
    <div class="w-full max-[768px]:pt-96 max-[768px]:mt-32">
        <div class="parallax bg-fixed">
            <div class="object-cover w-full lg:h-[720px] flex justify-end lg:pr-44 lg:-mt-7"
                style="background-image: url({{ asset('images/banner/edu-corporativa/tecnico/prancheta.jpeg') }}); background-size: cover;">
                <div class="h-fit rounded-2xl bg-white bg-opacity-80 lg:w-5/12 p-10 lg:mt-10 xl:mt-44">
                    <h2 class="lg:text-4xl text-2xl font-semibold">Fomos responsáveis pela formação de <span
                            class="text-teal-400">+30.000 trabalhadores!</span></h2>
                    <p class="py-3 font-semibold">
                        O instituto Ethos On é uma instituição de educação especializada em cursos digitais e híbridos
                        de
                        Pós-Graduação e Educação Corporativa, tendo um objetivo:
                    </p>

                    <h2 class="lg:text-4xl text-2xl font-semibold">Promover a educação como <span
                            class="text-teal-400 lg:text-3xl text-xl">POTÊNCIA DE VIDA</span></h2>
                    <p class="pt-3 font-semibold">Propomos uma mudança no olhar sobre a formação dos trabalhadores.</p>

                    <p class="pt-3 font-semibold">
                        Buscando incluir nos nossos projetos de consultoria o saber epistêmico e técnico, necessário à
                        formação do trabalhador.
                    </p>
                </div>
            </div>
            <div class="gap-20 flex flex-col items-center lg:-ml-96 pb-10">
                <div class="pt-10 lg:w-96">
                    <h1 class="drop-shadow lg:text-6xl text-3xl font-bold">Para quem é <span class="text-white">o curso?</span></h1>
                </div>
                <div
                    class="bg-gray-50 rounded-3xl px-3 pb-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">1</span>
                    <p class="w-72">Profissionais técnico-operacionais de empresas de todos os tamanhos e setores.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">2</span>
                    <p class="w-72">Trabalhadores que buscam formação e aperfeiçoamento.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">3</span>
                    <p class="w-72">Empresas que buscam certificação e melhora do desempenho da equipe operacional.
                    </p>
                </div>


            </div>
        </div>
        <div class="parallax-2 bg-fixed lg:h-[1200px] w-full flex items-center justify-end lg:pr-32 pb-32 pt-20">
            <div class="bg-opacity-80 rounded-3xl bg-white lg:w-5/12 p-5">
                <h1 class="text-4xl font-bold pb-5 ">Benefícios do curso <span
                        class="text-teal-500">Técnico-operacional</span></h1>
                <ul class="flex flex-col gap-y-7">
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aumente sua eficiência e
                            produtividade</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aumento da motivação e
                            satisfação dos colaboradores</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aprimore suas
                            habilidades técnicas e de liderança</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Destaque-se no mercado e
                            aumente sua remuneração</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Contribua para o
                            crescimento e sucesso da sua empresa</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Elevação do nível de
                            confiança dos colaboradores em suas habilidades e conhecimentos</span></li>

                    <li><i aria-hidden="true" class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Maior
                            eficiência nos processos</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Melhoria na comunicação
                            interna</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Redução de erros e
                            falhas na execução de tarefas</span></li>
                </ul>
                <div class="pt-5">
                    <x-button>
                        <x-slot name="linkCurso">
                            {{ $whatsapp_num }}
                        </x-slot>
                        Fale Conosco
                    </x-button>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-white pb-96 -mb-64">
</x-layout>
