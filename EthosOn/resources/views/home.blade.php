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
            <div>
                <div class="w-full flex justify-center p-4 mb-4 bg-gray-100 lg:pt-0 2xl:pt-44 pt-44">
                    <ul class="text-teal-600 drop-shadow font-bold w-full lg:flex max-[600px]:flex-col justify-center">
                        <a href="#card-engenharia" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Engenharia <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-psicologia" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Psicologia <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-saude" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Saúde <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-direito" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Direito <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-educacao" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Educação <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-gestao" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Gestão & Negócios <i class="fas fa-angle-down"></i></li>
                        </a>
                        <a href="#card-tecno" class="p-4 transition-colors duration-200 lg:hover:bg-teal-100">
                            <li>Tecnologias <i class="fas fa-angle-down"></i></li>
                        </a>
                    </ul>
                </div>
                <div class="grid lg:gap-y-10 md:gap-y-96 sm:gap-y-96">
                    <div class="w-full mb-10 flex justify-center" id="card-engenharia">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/engenharia.jpg') }}</x-slot>
                            <x-slot name="name">Engenharia</x-slot>
                            <x-slot name="linkCurso">/engenharia</x-slot>
                            Torne-se um especialista na sua área de engenharia no Ethos On.
                            <br>
                            Tenha acesso às melhores oportunidades do mercado de trabalho, tornando-se um profissional
                            altamente
                            capacitado.
                            <div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-psicologia">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/psicologia.jpg') }}</x-slot>
                            <x-slot name="name">Psicologia</x-slot>
                            <x-slot name="linkCurso">/psicologia</x-slot>
                            Torne-se uma referência!
                            <br>
                            Expanda seu conhecimento na sua especialidade e construa uma carreira de excelência com a
                            ajuda
                            do
                            Ethos
                            On.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-saude">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/saude.jpg') }}</x-slot>
                            <x-slot name="name">Saúde</x-slot>
                            <x-slot name="linkCurso">/saude</x-slot>
                            Saúde
                            Torne-se um profissional requisitado na área de saúde no Ethos On.
                            <br>
                            Desenvolva novas habilidades e atenda as principais demandas da Área da Saúde.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-direito">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/direito.jpg') }}</x-slot>
                            <x-slot name="name">Direito</x-slot>
                            <x-slot name="linkCurso">/direito</x-slot>
                            Direito
                            Aumente em 3x as chances do seu sucesso no mercado de trabalho.
                            <br>
                            Faça sua pós-graduação em Direito no Ethos On.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-educacao">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/educacao.jpg') }}</x-slot>
                            <x-slot name="name">Educação</x-slot>
                            <x-slot name="linkCurso">/educacao</x-slot>
                            Impulsione a sua carreira e aumente a valorização do seu currículo no Ethos On.
                            <br>
                            Fique um passo à frente da concorrência, conquiste sua promoção através de um currículo de
                            excelência.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-gestao">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/negocios.jpg') }}</x-slot>
                            <x-slot name="name">Gestão & Negócios</x-slot>
                            <x-slot name="linkCurso">/gestao-de-negocios</x-slot>
                            Torne-se um profissional qualificado e receba os salários mais altos do mercado com ajuda do
                            Ethos
                            On.
                            <br>
                            Receba as melhores oportunidades especializando-se na sua área de atuação.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                    <div class="w-full mb-10 flex justify-center" id="card-tecno">
                        <x-curso-card class="trigger_scroll_left">
                            <x-slot name="image">{{ asset('images/cards/tecnologia.jpg') }}</x-slot>
                            <x-slot name="name">Tecnologias</x-slot>
                            <x-slot name="linkCurso">/tecnologia</x-slot>
                            Torne-se um profissional qualificado e receba os salários mais altos do mercado com a ajuda
                            do
                            Ethos
                            On.
                            <br>
                            Destaque-se no mercado com alta demanda de profissionais qualificados, no Ethos On.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                        </x-curso-card>
                    </div>
                </div>
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
                        style="background-image: url('{{ asset('images/banner/quem-somos.jpg') }}'); background-size: cover; background-position: center;" alt="quem somos">
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
                            <h1 class="drop-shadow text-3xl font-bold pb-5">Apresentação <span
                                    class="text-teal-500">Ethos
                                    ON</span></h1>
                            <p class="trigger_scroll_right transition-opacity duration-200 drop-shadow font-semibold">
                                O instituto Ethos On é uma instituição de
                                educação
                                especializada em cursos digitais e híbridos de Pós Graduação lato sensu e na
                                formação de trabalhadores para médias e grandes empresas.</p>
                        </div>
        </x-layout> 
    
