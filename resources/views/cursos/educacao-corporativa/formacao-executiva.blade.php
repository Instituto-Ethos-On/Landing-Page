{{-- TODO: mobile --}}
<x-layout>
    <x-slot name="meta_descricao">
        Transforme sua equipe com nossos cursos de aperfeiçoamento, MBAs e de desenvolvimento de soft skills com projetos pedagógicos personalizados e plataforma de alta qualidade, seus executivos estarão preparados para enfrentar os desafios da empresa.
    </x-slot>
    <x-slot name="meta_keywords">
        formação executiva
    </x-slot>
    @push('styles')
        <style>
            .parallax {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/executivo/executivo-3.jpeg') }});
            }

            .parallax-2 {
                background-attachment: fixed;
                background-size: cover;
                background-image: url({{ asset('images/banner/edu-corporativa/executivo/executivo-2.jpeg') }});
            }
        </style>
    @endpush
    <x-slot name="title">
        Universidade Corporativa - Ethos on 
    </x-slot>
    <x-banner class="-mt-4 lg:pb-0 pb-52">
        
        <x-slot name="image1">
            {{ asset('images/banner/edu-corporativa/executivo/corporativo.jpeg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/edu-corporativa/executivo/corporativo.jpeg') }}
        </x-slot>
        <x-slot name="addons">
            bg-transparent right-0 lg:mr-48 lg:w-[500px] max-[768px]:overflow-visible
        </x-slot>
        <x-slot name="description">
            <div class="lg:p-10 p-3 ">
                <div class="text-white w-full drop-shadow max-[768px]:mt-28">
                    <h2 class="font-bold lg:text-white text-black">Formação para <span class="text-teal-600">Executivos</span></h2>
                    <h2 class="font-bold text-3xl pb-3 lg:text-white text-black">
                        Aperfeiçoamento Estratégico
                        <span class="text-teal-600 max-[768px]:text-base">para Executivos</span>
                    </h2>
                    <p class="text-lg font-medium max-[768px]:hidden">
                        Transforme sua equipe com nossos cursos de aperfeiçoamento, MBAs e de desenvolvimento de soft skills
                        com
                        projetos pedagógicos personalizados e plataforma de alta qualidade, seus executivos estarão
                        preparados para
                        enfrentar os desafios da empresa.
                    </p>
                </div>
                <div class="pt-1">
                    <x-button>
                        {{-- TODO: link do curso de tecnico operacional --}}
                        <x-slot name="linkCurso">
                            {{ $whatsapp_num }}
                        </x-slot>
                        Fale Conosco
                    </x-button>
                </div>
                </div>
            </div>

        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>
    <div class="w-full">
        <div class="parallax bg-fixed">
            <div class="w-full lg:h-[720px] flex justify-end lg:pr-44 lg:-mt-7"
                style="background-image: url({{ asset('images/banner/edu-corporativa/executivo/executivo-1.jpeg') }}); background-size: cover;">
                <div class="h-fit rounded-2xl bg-white bg-opacity-80 lg:w-5/12 sm:flex lg:flex-col sm:justify-center p-10 mt-10 xl:mt-44">
                    <h2 class="text-4xl font-semibold">Fomos responsáveis pela formação de <span
                            class="text-teal-400">+30.000 trabalhadores!</span></h2>
                    <p class="py-3 font-semibold">
                        O instituto Ethos On é uma instituição de educação especializada em cursos digitais e híbridos
                        de
                        Pós-Graduação e Educação Corporativa, tendo um objetivo:
                    </p>

                    <h2 class="text-4xl font-semibold">Promover a educação como <span
                            class="text-teal-400 text-3xl">POTÊNCIA DE VIDA</span></h2>
                    <p class="pt-3 font-semibold">Propomos uma mudança no olhar sobre a formação dos trabalhadores.</p>

                    <p class="pt-3 font-semibold">
                        Buscando incluir nos nossos projetos de consultoria o saber epistêmico e técnico, necessário à
                        formação do trabalhador.
                    </p>
                </div>
            </div>
            <div class="gap-20 flex flex-col items-center lg:-ml-96 pb-10">
                <div class="pt-10 lg:w-96">
                    <h1 class="drop-shadow lg:text-6xl text-3xl font-bold">Para quem é <span class="text-teal-500">o curso?</span>
                    </h1>
                </div>
                <div
                    class="bg-gray-50 rounded-3xl px-3 pb-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">1</span>
                    <p class="w-72">Executivos e profissionais dos níveis táticos e estratégicos.</p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">2</span>
                    <p class="w-72">Pessoas buscando aperfeiçoamento profissional.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">3</span>
                    <p class="w-72">Profissionais procurando aprimorar suas habilidades soft skills.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">4</span>
                    <p class="w-72">Líderes e tomadores de decisão.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">5</span>
                    <p class="w-72">Pessoas interessadas em se atualizar constantemente e aprimorar seus
                        conhecimentos.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">6</span>
                    <p class="w-72">Profissionais buscando desenvolvimento de habilidades estratégicas.
                    </p>
                </div>

                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center w-[300px] flex gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] flex-col">
                    <span class="text-7xl text-teal-400 font-bold">7</span>
                    <p class="w-72">Pessoas interessadas em se preparar para desafios institucionais.
                    </p>
                </div>


            </div>
        </div>
        <div class="parallax-2 bg-fixed lg:h-[1200px] w-full flex items-center justify-end lg:pr-32 pb-32 pt-20">
            <div class="bg-opacity-80 rounded-3xl bg-white lg:w-5/12 p-5">
                <h1 class="text-4xl font-bold pb-5 ">Benefícios da Formação <span class="text-teal-500">para
                        Executivos</span></h1>
                <ul class="flex flex-col gap-y-7">
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aperfeiçoamento de
                            liderança e tomada de decisão.</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aperfeiçoamento de soft
                            skills.</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Aumento da eficiência e
                            efetividade no trabalho.</span></li>

                    <li><i aria-hidden="true" class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Cursos
                            de curta duração.</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Desenvolvimento de
                            habilidades estratégicas.</span></li>

                    <li><i aria-hidden="true" class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Foco
                            na potencialização profissional.</span></li>

                    <li><i aria-hidden="true" class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>MBAs
                            registrados no MEC.</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Oportunidade de
                            networking com outros executivos.</span></li>

                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Personalização de acordo
                            com as necessidades de cada profissional.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Plataforma de alta qualidade.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Possibilidade de atualização constante e aprimoramento de conhecimentos.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Preparação para desafios institucionais.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Projetos pedagógicos customizados.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Proposta pedagógica e curricular personalizadas.</span></li>
                    <li><i aria-hidden="true"
                            class="text-teal-400 fa-lg pr-3 pl-2 fas fa-check-circle"></i><span>Transformação profissional.</span></li>
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
