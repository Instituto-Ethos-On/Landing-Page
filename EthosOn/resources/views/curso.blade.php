@push('styles')
    <style>
        .curso-apresentacao {
            overflow: hidden !important;
            display: -webkit-box !important;
            -webkit-box-orient: vertical !important;
            -webkit-line-clamp: 8 !important;
        }
    </style>
@endpush
<x-layout>
    <x-slot name="meta_descricao">
        {{ $thisCurso->apresentacao }}
    </x-slot>
    <x-slot name="meta_keywords">
        {{ $thisCurso->area }}
    </x-slot>
    <x-slot name="title">
        {{ $thisCurso->nome }} - Ethos on
    </x-slot>
    <x-banner>
        <x-slot name="image1">
            @switch(strtolower($thisCurso->area))
                @case('engenharia')
                    {{ asset('images/banner/cursos/engenharia/engenharia-checkout.jpeg') }}
                @break

                @case('psicologia')
                    {{ asset('images/banner/cursos/psicologia/psicologia-checkout-desktop.jpeg') }}
                @break

                @case('direito')
                    {{ asset('images/banner/cursos/direito/direito-checkout.jpeg') }}
                @break

                @case('educacao')
                    {{ asset('images/banner/cursos/educacao/educacao-checkout.jpeg') }}
                @break

                @case('saude')
                    {{ asset('images/banner/cursos/saude/saude-checkout-desktop.jpeg') }}
                @break

                @case('tecnologia')
                    {{ asset('images/banner/cursos/tecnologia/tecnologia-checkout-desktop.jpeg') }}
                @break

                @case('gestao-e-negocios')
                    {{ asset('images/banner/cursos/gestao-negocios/gestao-checkout-desktop.jpeg') }}
                @break
            @endswitch
        </x-slot>
        <x-slot name="image2">
            @switch(strtolower($thisCurso->area))
                @case('engenharia')
                    {{ asset('images/banner/cursos/engenharia/engenharia-checkout-mb.jpeg') }}
                @break

                @case('psicologia')
                    {{ asset('images/banner/cursos/psicologia/psicologia-checkout-mb.jpg') }}
                @break

                @case('direito')
                    {{ asset('images/banner/cursos/direito/direito-checkout-mb.jpeg') }}
                @break

                @case('educacao')
                    {{ asset('images/banner/cursos/educacao/educacao-checkout-mb.jpeg') }}
                @break

                @case('saude')
                    {{ asset('images/banner/cursos/saude/saude-checkout-mb.jpeg') }}
                @break

                @case('tecnologia')
                    {{ asset('images/banner/cursos/tecnologia/tecnologia-checkout-mb.jpg') }}
                @break

                @case('gestao-e-negocios')
                    {{ asset('images/banner/cursos/gestao-negocios/gestao-checkout-mb.jpeg') }}
                @break
            @endswitch
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-5">
                <div class="flex justify-between">
                    <div
                        class="rounded-full text-sm text-gray-700 border-1 border-teal-300 border shadow-teal-200 shadow w-fit p-2 mb-5">
                        <p><strong>Pós-graduação em</strong>
                            @switch(strtolower($thisCurso->area))
                                @case('engenharia')
                                    Engenharia
                                @break

                                @case('psicologia')
                                    Psicologia
                                @break

                                @case('educacao')
                                    Educação
                                @break

                                @case('gestao-e-negocios')
                                    Gestão e Negócios
                                @break

                                @case('saude')
                                    Saúde
                                @break

                                @case('tecnologia')
                                    Tecnologia
                                @break

                                @case('educacao-corporativa')
                                    Educação Corporativa
                                @break

                                @case('direito')
                                    Direito
                                @break
                            @endswitch
                        </p>
                    </div>
                    <div data-modal-target="modal-apresentacao" data-modal-toggle="modal-apresentacao"
                        class="my-auto m-2 hover:scale-125 duration-200 transition-transform"><i
                            class="fa-solid fa-expand"></i></div>
                </div>
                <h2 class="pb-4 font-bold text-teal-400 text-3xl drop-shadow">{{ $thisCurso->nome }}</h2>
                <div data-modal-target="modal-apresentacao"
                    data-modal-toggle="modal-apresentacao">
                    <p class="curso-apresentacao">{{ $thisCurso->apresentacao }}</p>
                </div>
        </x-slot>
        <x-slot name="addons">
            bg-white max-[640px]:h-fit max-[768px]:mx-0 max-[640px]:mx-2 max-[768px]:-mt-96
        </x-slot>
        <x-slot name="newAttr">
            max-[768px]:mt-96
        </x-slot>
    </x-banner>
    <div id="modal-apresentacao" aria-hidden="true"
        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full   h-[calc(100%-1rem)] max-h-full">
        <div class="relative p-4 w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="modal-apresentacao">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Fechar modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="p-4 md:p-5 space-y-4">
                    <p class="text-justify leading-normal">{{ $thisCurso->apresentacao }}</p>
                </div>

            </div>
        </div>
    </div>
    </div>
    <div class="w-full flex justify-center max-[768px]:pt-80">
        <div class="flex flex-col items-center">
            <div class="rounded-3xl bg-white border-teal-500 border-4 z-10 px-5 py-5 lg:w-80">
                <h1 class="text-center text-2xl font-bold text-teal-500">Temos uma Oferta exclusiva para você</h1>
            </div>
            <div
                class="-mt-14 z-0 rounded-3xl border-y-4 border-teal-500 lg:px-20 lg:py-20 max-[768px]:px-5 max-[768px]:py-14">
                <h2 class="text-center pb-5 text-teal-500 font-bold text-2xl">Fale com um de nossos consultores</h2>
                <div class="pb-5">
                    <h3 class="text-teal-500 font-bold text-lg">Curso com conclusão a partir de</h3>
                    <p>{{ $thisCurso->duracao }} meses</p>
                </div>
                <div class="pb-5">
                    <h3 class="text-teal-500 font-bold text-lg">Duração total de</h3>
                    <p>{{ $thisCurso->total }} horas</p>
                </div>
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-clone text-teal-500 fa-invert pr-2"></i>TCC Opcional</h3>
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-check-square text-teal-500 pr-2"></i>Certificado emitido por Faculdade credenciada
                    no MEC</h3>
            </div>
            <x-button class="-mt-5 z-10">
                {{-- TODO: colocar link dinâmico --}}
                <x-slot name="linkCurso">
                    {{ $whatsapp_num }}
                </x-slot>
                Matricule-se agora
            </x-button>
        </div>
        <div>

        </div>
    </div>
    <div class="flex justify-center">
        <div class="lg:w-9/12 max-[768px]:w-11/12 my-10">
            <div class="rounded-2xl">
                <div class="sm:hidden">
                    <label for="tabs" class="sr-only">Selecionar aba</label>
                    <details data-tabs-toggle="#fullWidthTabContent" role="tablist">
                        <summary
                            class="p-4 text-sm font-semibold bg-teal-500 text-white rounded hover:text-blue-600 hover:bg-blue-50">
                            Mais</summary>
                        <div class="flex flex-col border-1 border-teal-600">
                            <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                                aria-controls="stats" aria-selected="true"
                                class="transition-colors duration-200 inline-block w-full p-3 text-gray-500 bg-teal-400 hover:bg-gray-50 focus:outline-none ">Sobre
                                o curso</button>
                            <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                                aria-controls="about" aria-selected="false"
                                class="transition-colors duration-200 inline-block w-full p-3 text-gray-500 bg-teal-400 hover:bg-gray-100 focus:outline-none ">Conteúdo</button>
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                                aria-controls="faq" aria-selected="false"
                                class="transition-colors duration-200 inline-block w-full p-3 rounded-se-lg  hover:bg-gray-50 focus:outline-none text-gray-500 bg-teal-400">Como
                                funciona</button>
                        </div>
                        <button id="investimento-tab" data-tabs-target="#investimento" type="button" role="tab"
                            aria-controls="investimento" aria-selected="false"
                            class="transition-colors duration-200 inline-block w-full p-3 bg-teal-400 hover:bg-gray-100 focus:outline-none text-gray-500">Investimento</button>
                    </details>
                </div>
                <ul class="mx-auto mb-3 w-10/12 hidden text-sm font-medium text-center rounded-2xl sm:flex dark:divide-gray-600 "
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                            aria-controls="stats" aria-selected="true"
                            class="transition-colors duration-200 inline-block w-full p-3 rounded-s-full bg-gray-100 hover:bg-gray-50 focus:outline-none text-gray-500 font-bold">Sobre
                            o curso</button>
                    </li>
                    <li class="w-full">
                        <button id="about-tab" data-tabs-target="#about" type="button" role="tab"
                            aria-controls="about" aria-selected="false"
                            class="transition-colors duration-200 inline-block w-full p-3 bg-teal-400 hover:bg-gray-100 focus:outline-none  text-gray-500 font-bold">Conteúdo</button>
                    </li>
                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                            aria-controls="faq" aria-selected="false"
                            class="transition-colors duration-200 inline-block w-full p-3 rounded-se-lg bg-gray-100 hover:bg-gray-50 focus:outline-none  text-gray-500 font-bold">Como
                            funciona</button>
                    </li>
                    <li class="w-full">
                        <button id="investimento-tab" data-tabs-target="#investimento" type="button" role="tab"
                            aria-controls="investimento" aria-selected="false"
                            class="transition-colors duration-200 rounded-e-full inline-block w-full p-3 bg-teal-400 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-gray-500 font-bold">Investimento</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="hidden lg:px-44 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4" id="stats"
                        role="tabpanel" aria-labelledby="stats-tab">
                        <h1 class="mb-2 text-3xl font-bold text-white pb-2">Objetivo</h1>
                        <p class="text-gray-50 pb-2 text-lg font-semibold">{{ $thisCurso->objetivo }}</p>
                        <div class="flex justify-center pt-2 gap-2 text-white max-[768px]:flex-col">
                            <div class="flex items-center gap-2 w-52">
                                <div class="bg-teal-400 rounded-full p-3 w-fit h-fit"><i
                                        class="far fa-address-card fa-lg"></i></div>
                                <span class="h-1/2 font-bold">Microcertificação por disciplina</span>
                            </div>
                            <div class="flex items-center gap-2 w-72 lg:w-80">
                                <div class="bg-teal-400 rounded-full p-3 w-fit h-fit "><i
                                        class="fas fa-check fa-xl"></i></div>
                                <span class="h-1/2 font-bold">Certificado emitido por Faculdade credenciada no MEC</span>
                            </div>
                            <div class="flex items-center gap-2 w-72">
                                <div class="bg-teal-400 rounded-full p-3 w-fit h-fit"><i
                                        class="fas fa-chalkboard-teacher fa-lg"></i></div>
                                <span class="h-1/2 font-bold">Curso com carga horária de {{ $thisCurso->total }}
                                    horas</span>
                            </div>
                        </div>
                    </div>
                    <div class="hidden lg:px-52 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4" id="about"
                        role="tabpanel" aria-labelledby="about-tab">
                        <div class="text-white">
                            <div class="pb-5">
                                <h1 class="font-bold text-2xl">O que você vai estudar?</h1>
                                <p class="font-regular text-xl"> {!! $thisCurso->conteudo !!}</p>
                            </div>
                            <div>
                                <h1 class="font-bold text-xl">Carga Horária do Curso:</h1>
                                <p class="font-regular text-lg"> {{ $thisCurso->total }} horas</p>
                            </div>

                        </div>
                    </div>
                    <div class="text-white hidden lg:px-52 lg:pt-10 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4"
                        id="faq" role="tabpanel" aria-labelledby="faq-tab">
                        <div class="pb-5">
                            <h1 class="font-bold text-3xl pb-1">Metodologia</h1>
                            <p class="font-regular text-lg">A metodologia é composta por livros digitais (e-books),
                                videoaulas em todas as unidades das disciplinas, objetos interativos, mapas conceituais,
                                games e atividades. As aulas são 100% online e atualizadas semestralmente.</p>
                        </div>
                        <div class="pb-5">
                            <h1 class="font-bold text-3xl pb-1">Processo Avaliativo
                            </h1>
                            <p class="font-regular text-lg">É realizado através de uma atividade avaliativa que fica
                                disponível após cada unidade para que não haja sobrecarga de conteúdo para o aluno. Não
                                exigimos o TCC conforme regulamentação do MEC. Tendo o certificado a mesma validade.
                                Sendo opcional para o aluno a sua realização.</p>
                        </div>
                        <div class="pb-5">
                            <h1 class="font-bold text-3xl pb-1">Micro Certificação Por Disciplina</h1>
                            <p class="font-regular text-lg">Oferecemos de forma exclusiva aos nossos alunos
                                microcertificações por disciplina ao longo do curso. Isto quer dizer que você receberá
                                um certificado a cada disciplina específica que for concluindo além do certificado final
                                registrado no MEC. Você receberá automaticamente após a conclusão de cada disciplina um
                                emblema de certificação, uma espécie de brasão que você pode publicar nas redes sociais
                                ou o link em seu currículo. Quem for pesquisar o seu currículo será direcionado
                                diretamente para a nossa central certificadora, assegurando a veracidade da informação.
                                Essa metodologia é um SHOW!</p>
                        </div>
                        <div class="pb-5">
                            <h1 class="font-bold text-3xl pb-1">Diferenciais Na Sua Carreira</h1>
                            <p class="font-regular text-lg">Essa é a chance de você fazer uma transformação na sua
                                carreira, pois o Instituto Ethos ON é o único centro de pós-graduação digital que te
                                oferece microcertificações, e isso é importante para o seu plano de carreira, concursos
                                além de processos seletivos de um modo geral. Faça a diferença no mercado!</p>
                        </div>
                        <div class="pb-5">
                            <h1 class="font-bold text-3xl pb-1">Coordenadores e Professores</h1>
                            <p class="font-regular text-lg">Todos os Professores possuem mestrado e doutorado e te
                                acompanharão durante todo o seu processo de aprendizagem.</p>
                        </div>
                    </div>
                    <div class="text-white hidden lg:px-52 lg:py-10 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4"
                        id="investimento" role="tabpanel" aria-labelledby="investmento-tab">
                        <div class="text-white">
                            <div class="pb-5">
                                <h1 class="font-bold text-3xl">Valor</h1>
                            </div>
                            <div class="font-semibold text-lg">
                                <p>PARCELA ÚNICA / À VISTA
                                    {{ Number::currency($thisCurso->preco, in: 'BRL', locale: 'pt-br') }}</p>
                                <p>TAXA DE MATRÍCULA R$ 49,90</p>
                                @php
                                    Methods::divided($thisCurso->preco, $parcelas);
                                @endphp
                                <div class="pt-5">
                                    <x-button>
                                        {{-- TODO: colocar link para oferta --}}
                                        <x-slot name="linkCurso">
                                            {{ $whatsapp_num }}
                                        </x-slot>
                                        Consulte a oferta especial
                                    </x-button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>

</x-layout>
