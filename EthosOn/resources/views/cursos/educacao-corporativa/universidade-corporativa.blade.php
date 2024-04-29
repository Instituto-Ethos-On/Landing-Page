<x-layout>
    <x-slot name="meta_descricao">
        Investir na capacitação de sua equipe é investir no futuro da organização. Com nosso programa de Universidade Corporativa, você pode ter a certeza de uma formação eficiente e alinhada aos objetivos da sua empresa.
    </x-slot>
    <x-slot name="meta_keywords">
        universidade corporativa
    </x-slot>
    @push('styles')
        <style>
            .parallax {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/universidade/prancheta-2.jpeg') }});
            }

            .parallax-2 {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/universidade/corporativo-3.jpeg') }});
            }
        </style>
    @endpush
    <x-slot name="title">
        Universidade Corporativa - Ethos on
    </x-slot>
    <x-banner class="-mt-4">
        
        <x-slot name="image1">
            {{ asset('images/banner/edu-corporativa/universidade/corporativa.jpeg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/edu-corporativa/universidade/corporativa.jpeg') }}
        </x-slot>
        <x-slot name="addons">
            lg:bg-white right-0 lg:mr-52 lg:w-[450px] max-[768px]:overflow-visible
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5 max-[768px]:pt-60">
                <h2 class="font-semibold">Universidade <span class="text-teal-400 font-bold">Corporativa</span></h2>
                <h1 class="font-semibold text-3xl">
                    Impulsione a performance
                    <span class="text-teal-400">da sua empresa!</span>
                </h1>
                <div class="font-semibold text-gray-900 text-base pb-5">
                    <p class="pb-4">
                        Investir na capacitação de sua equipe é investir no futuro da organização. Com nosso programa de
                        Universidade Corporativa, você pode ter a certeza de uma formação eficiente e alinhada aos objetivos
                        da sua
                        empresa.
                    </p>
                    <p>Não deixe a formação de sua equipe ao acaso, invista no sucesso da sua organização.</p>
                </div>
                <x-button>
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
    <div class="w-full max-[768px]:mt-96">
        <div class="parallax bg-fixed">
            <div class="object-cover w-full h-[720px] flex justify-end lg:pr-44 pt-32" style="background-image: url({{ asset('images/banner/edu-corporativa/universidade/prancheta-1.jpeg')}}); background-size: cover;">
                <div class="lg:size-96 backdrop-blur-sm lg:w-5/12 lg:p-10 p-5">
                    <h2 class="lg:text-4xl text-3xl font-semibold">Fomos responsáveis pela formação de +30.000 trabalhadores!</h2>
                    <p class="py-3 font-semibold text-teal-500">
                        O instituto Ethos On é uma instituição de educação especializada em cursos digitais e híbridos de
                        Pós-Graduação e Educação Corporativa, tendo um objetivo:
                    </p>

                    <h2 class="lg:text-4xl text-2xl font-semibold">Promover a educação como <span class="text-teal-400 lg:text-3xl text-xl">POTÊNCIA DE VIDA</span></h2>
                    <p class="pt-3 font-semibold">Propomos uma mudança no olhar sobre a formação dos trabalhadores.</p>

                    <p class="pt-3 font-semibold">
                        Buscando incluir nos nossos projetos de consultoria o saber epistêmico e técnico, necessário à
                        formação do trabalhador.
                    </p>
                </div>
            </div>
            <div class="gap-20 flex flex-col items-center lg:-ml-96 pb-10">
                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-3/12 flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">1</span>
                    <p class="w-72">Investir na formação de sua equipe.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-3/12 flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">2</span>
                    <p class="w-72">Resolver os problemas de planejamento de treinamento e desenvolvimento de equipe.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-3/12 flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">3</span>
                    <p class="w-72">Reduzir custos com a formação de sua equipe.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-3/12 flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">4</span>
                    <p class="w-72">Fortalecer o alinhamento com a formação dos trabalhadores e alcance da visão de
                        futuro.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-3/12 flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">5</span>
                    <p class="w-72">Planejar o orçamento de formação de forma estruturada e previsível.</p>
                </div>
            </div>
        </div>
        <div class="parallax-2 bg-fixed lg:h-[800px] w-full flex items-center justify-end lg:pr-32 lg:pb-96">
            <div class="lg:size-96 backdrop-blur-sm lg:w-5/12 lg:p-0 p-5">
                <h1 class="text-4xl font-bold pb-5 w-72">Benefícios da Formação <span class="text-teal-400">para
                        Executivos</span></h1>
                <ul class="flex flex-col gap-y-7">
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aumento da inovação e da
                            capacidade de solução de problemas</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aumento da motivação e
                            comprometimento da equipe</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Desenvolvimento de
                            habilidades e competências</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Formação de
                            trabalhadores de todos os níveis conforme as estratégias organizacionais</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Formação personalizada e
                            alinhada aos objetivos da empresa</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Melhora da comunicação
                            interna e da colaboração entre equipes</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Planejamento da formação
                            dos trabalhadores em curto, médio e longo prazo</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Planejamento
                            orçamentário de formação mais estruturado e previsível</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Redução de custos com a
                            formação</span></li>
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
