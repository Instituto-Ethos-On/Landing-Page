<x-layout>
    <x-slot name="meta_descricao">
        {{ $thisCurso->conteudo }}
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
                <div
                    class="rounded-full text-sm text-gray-700 border-1 border-teal-300 border shadow-teal-200 shadow w-fit p-2 mb-5">
                    <p><strong>Curso de Aperfeiçoamento em</strong>
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
                <h2 class="font-bold text-teal-400 text-3xl drop-shadow">{{ $thisCurso->nome }}</h2>
                <p class="text-2xl font-bold drop-shadow">Estude quando e onde quiser, e termine o curso em até 01 semana
                    pelo Ethos On.</p>
                <x-button class="pt-10">
                    <x-slot name="linkCurso">
                        {{ $whatsapp_num }}
                    </x-slot>
                    matricule-se agora
                </x-button>
            </div>
        </x-slot>
        <x-slot name="addons">
            bg-white max-[640px]:h-fit max-[768px]:mx-0 max-[640px]:mx-2 max-[768px]:-mt-96
        </x-slot>
        <x-slot name="newAttr">
            max-[768px]:mt-96
        </x-slot>
    </x-banner>
    <div class="w-full flex justify-center max-[768px]:pt-80">
        <div class="flex flex-col items-center">
            <div class="rounded-3xl bg-white border-teal-500 border-4 z-10 px-5 py-5 lg:w-80">
                <h1 class="text-center text-2xl font-bold text-teal-500">Obtenha um certificado rápido.</h1>
            </div>
            <div
                class="-mt-14 z-0 rounded-3xl border-y-4 border-teal-500 lg:px-20 lg:py-20 max-[768px]:px-5 max-[768px]:py-14 space-y-5">
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-check-square text-teal-500 pr-2"></i>Alavanque sua carreira</h3>
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-check-square text-teal-500 pr-2"></i>Finalize o curso em até 1 semana</h3>
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-check-square text-teal-500 pr-2"></i>Faça quando e onde quiser</h3>
                <h3 class="text-teal-500 font-bold text-lg"><i aria-hidden="true"
                        class="fas fa-check-square text-teal-500 pr-2"></i>Certificado de conclusão</h3>
                <h2 class="text-2xl text-teal-500 font-bold">Fale com um de nossos consultores</h2>
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
                                class="transition-colors duration-200 inline-block w-full p-3 text-white bg-teal-400 hover:bg-gray-50 focus:outline-none ">Sobre
                                o curso</button>
                           
                            <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab"
                                aria-controls="faq" aria-selected="false"
                                class="transition-colors duration-200 inline-block w-full p-3 rounded-se-lg  hover:bg-gray-50 focus:outline-none text-white bg-teal-400">Como
                                funciona</button>
                        </div>
                        <button id="investimento-tab" data-tabs-target="#investimento" type="button" role="tab"
                            aria-controls="investimento" aria-selected="false"
                            class="transition-colors duration-200 inline-block w-full p-3 bg-teal-400 hover:bg-gray-100 focus:outline-none dark:bg-gray-700 dark:hover:bg-gray-600 text-white">Investimento</button>
                    </details>
                </div>
                <ul class="mx-auto mb-3 w-10/12 hidden text-sm font-medium text-center rounded-2xl sm:flex dark:divide-gray-600 "
                    id="fullWidthTab" data-tabs-toggle="#fullWidthTabContent" role="tablist">
                    <li class="w-full">
                        <button id="stats-tab" data-tabs-target="#stats" type="button" role="tab"
                            aria-controls="stats" aria-selected="true"
                            class="transition-colors font-bold duration-200 inline-block w-full p-3 rounded-s-full bg-teal-400 hover:bg-gray-50 focus:outline-none text-gray-500">Sobre
                            o curso</button>
                    </li>

                    <li class="w-full">
                        <button id="faq-tab" data-tabs-target="#faq" type="button" role="tab" aria-controls="faq"
                            aria-selected="false"
                            class="transition-colors font-bold duration-200 inline-block w-full p-3 bg-gray-100 hover:bg-gray-50 focus:outline-none text-gray-500">Como
                            funciona</button>
                    </li>
                    <li class="w-full">
                        <button id="investimento-tab" data-tabs-target="#investimento" type="button" role="tab"
                            aria-controls="investimento" aria-selected="false"
                            class="transition-colors font-bold duration-200 rounded-e-full inline-block w-full p-3 bg-teal-400 hover:bg-gray-100 focus:outline-none text-gray-500">Investimento</button>
                    </li>
                </ul>
                <div id="fullWidthTabContent" class="border-t border-gray-200 dark:border-gray-600">
                    <div class="hidden lg:px-44 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4" id="stats"
                        role="tabpanel" aria-labelledby="stats-tab">
                        <h1 class="mb-2 text-3xl font-bold text-white pb-2">Sobre o Curso</h1>

                        <div class="text-gray-50 pb-2 text-lg font-regular">{!! $thisCurso->conteudo !!}</div>
                        <div class=" pt-2 gap-2 text-white">
                            <h1 class="font-bold text-2xl">Carga Horária do Curso:</h1>
                            <p class="text-xl">{{ $thisCurso->total }} Horas</p>
                        </div>
                    </div>
                    <div class="hidden lg:px-52 bg-teal-500 rounded-2xl md:p-8 max-[768px]:p-4" id="about"
                        role="tabpanel" aria-labelledby="about-tab">
                        <div class="text-white">
                            <div class="pb-5">
                                <h1 class="font-bold text-2xl">O que você vai estudar?</h1>
                                <div class="font-bold text-regular"> {!! $thisCurso->conteudo !!}</div>
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
                                <h1 class="font-bold text-3xl">Valor do curso</h1>
                            </div>
                            <div class="font-semibold text-lg">
                                <ul>
                                    <li>À vista por R$ 270,00</li>
                                    @php
                                        Methods::divided($thisCurso->preco, $parcelas);
                                    @endphp
                                </ul>
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
