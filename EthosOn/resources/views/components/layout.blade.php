<!DOCTYPE html>
<html style="overflow-x: clip;" lang="pt-br" class="scroll-smooth">

<head>
    @include('widgets.meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="{{ $meta_descricao }}">
    <meta name="keywords" content="{{ $meta_keywords }}">
    <meta name="title" content="{{ $title }}"/>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.5.2-web/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('/css/animations.css') }}">
    <title>{{ $title }}</title>
    @stack('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .dropdown:hover+.dropdown-menu,
        .dropdown-menu:hover {
            display: block
        }

        .dropdown-menu {
            display: none
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

    @vite('resources/css/app.css')


</head>

<body style="overflow-x: clip;" {{ $attributes->merge(['class' => '']) }}>




    <header class="relative lg:z-10 z-10">
        <nav id="navbar"
            class="px-4 mt-4 rounded-full shadow lg:mx-20 bg-zinc-50 max-[768px]:hidden navbar navbar-extend-lg">
            <ul class="flex justify-between items-center mb-4 text-xs font-bold text-teal-600 leading-1">
                <li class="min-[768px]:p-2"><a href="{{ $whatsapp_num }}" target="_blank">Entre em
                        Contato</a></li>
                <li class="min-[768px]:p-2"><a href="#">Matricule-se</a></li>
                <li class="min-[768px]:p-2"><a href="https://universa.ethoson.com.br/financeiro/painel/titulos"
                        target="_blank">2º via de boleto</a></li>
                <li class="min-[768px]:p-2"><a href="https://ead.ethoson.com.br/">Portal do Aluno</a></li>
                <li><a href="/"><img class="w-24" src="{{ asset('images/logo.png') }}" alt="Ethos On logo"
                            class="logo" /></a></li>
                <li class="min-[768px]:p-2"><a href="/quem-somos">Quem Somos</a></li>
                <div class="relative">
                    <li class="min-[768px]:p-2 dropdown"><a href="/pos-graduacoes">Pós Graduação</a><i
                            class="pl-2 fas fa-caret-down"></i></li>
                    <div
                        class="transition-colors duration-500 absolute bg-teal-400 text-white dropdown-menu h-fit w-max -mb-20 rounded-xl">
                        <ul class="">
                            <a href="/engenharia">
                                <li class="p-4 hover:bg-white hover:text-black">Engenharia</li>
                            </a>
                            <a href="/psicologia">
                                <li class="p-4 hover:bg-white hover:text-black">Psicologia</li>
                            </a>
                            <a href="/saude">
                                <li class="p-4 hover:bg-white hover:text-black">Saúde</li>
                            </a>
                            <a href="/direito">
                                <li class="p-4 hover:bg-white hover:text-black">Direito</li>
                            </a>
                            <a href="/educacao">
                                <li class="p-4 hover:bg-white hover:text-black">Educação</li>
                            </a>
                            <a href="/gestao-de-negocios">
                                <li class="p-4 hover:bg-white hover:text-black">Gestão e Negocios</li>
                            </a>
                            <a href="/tecnologia">
                                <li class="p-4 hover:bg-white hover:text-black">Tecnologia</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <div class="relative">
                    <li class="min-[768px]:p-2 dropdown"><a href="/educacao-corporativa">Educação Comporativa</a><i
                            class="pl-2 fas fa-caret-down"></i>
                    </li>
                    <div
                        class="transition-colors duration-500 absolute bg-teal-400 text-white dropdown-menu h-fit w-max -mb-20 rounded-xl">
                        <ul class="">
                            <a href="/tecnico-operacional">
                                <li class="p-4 hover:bg-white hover:text-black">Curso Técnico Operacional</li>
                            </a>
                            <a href="/universidade-corporativa">
                                <li class="p-4 hover:bg-white hover:text-black">Universidade Corporativa</li>
                            </a>
                            <a href="/consultoria-educacional">
                                <li class="p-4 hover:bg-white hover:text-black">Consultoria Educacional</li>
                            </a>
                            <a href="/formacao-de-executivos">
                                <li class="p-4 hover:bg-white hover:text-black">Formação de Exectivos</li>
                            </a>
                        </ul>
                    </div>
                </div>
                <li class="min-[768px]:p-2"><a href="/cursos-de-aperfeicoamento">C. de Aperfeiçoamento</a></li>
                </div>
            </ul>
        </nav>
        </div>
        <nav class="z-10 lg:hidden flex relative justify-between items-center py-4 px-4 bg-white min-[768px]:hidden">
            <a class="text-3xl font-bold leading-none" href="/">
                <img src="{{ asset('images/logo.png') }}" alt="Ethos On logo" class="w-24"> </a>
            <div class="lg:hidden">
                <button class="flex items-center p-3 text-blue-600 navbar-burger">
                    <svg class="block w-4 h-4 fill-current" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <title>Mobile menu</title>
                        <path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"></path>
                    </svg>
                </button>
            </div>
            <ul class="hidden absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 lg:hidden">
                <li><a class="text-sm text-gray-400 hover:text-gray-500"
                        href="{{ $whatsapp_num }}">Entre em Contato</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm font-bold text-blue-600" href="#">Matricule-se</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-gray-400 hover:text-gray-500"
                        href="https://universa.ethoson.com.br/financeiro/painel/titulos">2º via de boleto</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>
                <li><a class="text-sm text-gray-400 hover:text-gray-500" href="https://ead.ethoson.com.br/">Portal do
                        Aluno</a></li>
                <li class="text-gray-300">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor"
                        class="w-4 h-4 current-fill" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M12 5v0m0 7v0m0 7v0m0-13a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                </li>

            </ul>

        </nav>
        <div class="hidden relative z-50 navbar-menu">
            <div class="fixed inset-0 bg-gray-800 opacity-25 navbar-backdrop"></div>
            <nav 
                class="flex overflow-y-auto overflow-x-hidden fixed top-0 bottom-0 left-0 flex-col py-6 px-6 w-5/6 max-w-sm bg-white border-r">
                <div class="flex items-center mb-8">
                    <a class="mr-auto text-3xl font-bold leading-none" href="/">
                        <img class="w-24" src="{{ asset('images/logo.png') }}" alt="Ethos On logo">
                    </a>
                    <button class="navbar-close">
                        <svg class="w-6 h-6 text-gray-400 cursor-pointer hover:text-gray-500"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </button>
                </div>
                <div>
                    <ul>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50"
                                href="{{ $whatsapp_num }}">Entre em Contato</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50"
                                href="#">Matricule-se</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50"
                                href="https://universa.ethoson.com.br/financeiro/painel/titulos">2º via de boleto</a>
                        </li>
                        <li class="mb-1">
                            <a class="block p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50"
                                href="https://ead.ethoson.com.br/">Portal do Aluno</a>
                        </li>
                        <li>
                            <details>
                                <summary
                                    class="p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50">
                                    Mais</summary>
                                <div class="flex flex-col">
                                    <a href="/quem-somos"
                                        class="p-4 pl-10 font-semibold  rounded hover:text-blue-600 hover:bg-blue-50 text-sm text-gray-400 ">Quem
                                        Somos</a>
                                    <a href="/pos-graduacoes"
                                        class="p-4 pl-10 font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50 text-sm  ">Pós
                                        Graduações</a>
                                    <a href="/educacao-corporativa"
                                        class="pl-10 p-4 text-sm font-semibold text-gray-400 rounded hover:text-blue-600 hover:bg-blue-50  ">Educação
                                        Corporativa</a>
                                    <a href="cursos-de-aperfeicoamento"
                                        class="pl-10 p-4 font-semibold  rounded hover:text-blue-600 hover:bg-blue-50 text-sm text-gray-400 ">C.
                                        de Aperfeiçoamento</a>
                                </div>
                            </details>
                        </li>
                    </ul>
                </div>
                <div class="mt-auto">

                </div>
            </nav>
        </div>
    </header>

    <main>
        {{ $slot }}
    </main>
    <x-float-whatsapp/> 

    <div class="md:pt-96 sm:pt-96 lg:pt-0"></div>
    <footer class="sticky w-screen flex justify-center mb-5 top-[100vh]">
        <div
            class="md:w-10/12 md:h-56 w-11/12 rounded-3xl max-[768px]:justify-items-center max-[768px]:grid bg-teal-500 p-4 text-white">
            <div class="md:flex md:h-full md:items-center md:justify-between justify-center">
                <div
                    class="min-[768px]:hidden flex items-center justify-center  lg:ml-2 lg:mr-2 max-[768px]:my-4">
                    <a href="#" class="text-3xl font-bold leading-none"><img
                            src="{{ asset('images/logo-branca.png') }}" alt="logoEthosOn" class="w-32"></a>
                </div>
                <div class="min-[768px]:hidden md:w-fit lg:w-fit lg:pr-20 w-fit my-auto max-[768px]:mx-auto pb-5">
                    <div class="font-bold mb-2">
                        <h1 class="text-xl">
                            Siga-nos nas redes sociais
                        </h1>
                    </div>
                    <ul class="text-white flex justify-center gap-3 fa-lg">
                        
                        <a href="https://www.instagram.com/ethos.on/" target="_blank" aria-label="link para o instagram">
                            <li><i class="fab fa-instagram"></i></li>
                        </a>
                        <li><a href="https://br.linkedin.com/company/ethoson" target="_blank" aria-label="link para o linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                        <li><a href="https://twitter.com/ethos_on" target="_blank" aria-label="link para o twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="https://www.youtube.com/channel/UCOwPNO5MB3puVgfJe5AAMWQ?view_as=subscriber" target="_blank" aria-label="link para o youtube"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="{{ $whatsapp_num }}" target="_blank" aria-label="link para o whatsapp"><i class="fab fa-whatsapp"></i></a></li>
                    </ul>
                </div>
                <div class="lg:pl-20 md:w-96 max-[768px]:text-center font-semibold  max-[768px]:mx-auto">
                    <h1 class="text-lg">Links importantes</h1>
                    <div class="text-md lg:ml-5 gap-3">
                        <div class="p-1 border-b-2 border-transparent hover:border-teal-400"><a href="">Quem
                                somos Ethos On</a></div>
                        <div class="p-1 border-b-2 border-transparent hover:border-teal-400"><a
                                href="/politicas-de-privacidade">Políticas de Privacidade</a></div>
                        <div class="p-1 border-b-2 border-transparent hover:border-teal-400"><a href="/termos-de-uso">Termos
                                de Uso</a></div>
                    </div>
                </div>
                <div
                    class="max-[768px]:hidden md:w-80 flex items-center justify-center px-28 lg:ml-2 lg:mr-2 max-[768px]:my-4">
                    <a href="#" class="text-3xl font-bold leading-none"><img
                            src="{{ asset('images/logo-branca.png') }}" alt="logoEthosOn" class="w-28"></a>
                </div>
                <div class="max-[768px]:hidden lg:pr-20 w-fit my-auto max-[768px]:mx-auto">
                    <div class="font-bold mb-2">
                        <h1 class="text-xl">
                            Siga-nos nas redes sociais
                        </h1>
                    </div>
                    <ul class="text-white flex justify-center gap-3 fa-lg">
                        <li><a href="https://www.instagram.com/ethos.on/" target="_blank" aria-label="link para o instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="https://br.linkedin.com/company/ethoson" target="_blank" aria-label="link para o linkedin"><i class="fab fa-linkedin-in"></a></i></li>
                        <li><a href="https://twitter.com/ethos_on" target="_blank" aria-label="link para o twitter"><i class="fab fa-twitter"></a></i></li>
                        <li><a href="https://www.youtube.com/channel/UCOwPNO5MB3puVgfJe5AAMWQ?view_as=subscriber" target="_blank" aria-label="link para o youtube"><i class="fab fa-youtube"></a></i></li>
                        <li><a href="{{ $whatsapp_num }}" target="_blank" aria-label="link para o whatsapp"><i class="fab fa-whatsapp"></a></i></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    {{-- scripts --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.1/flowbite.min.js"></script>
    <script src="{{ url('js/animations.js')}}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        //pagination 
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            var page = $(this).attr('href').split('review=')[1];
            record(page);
        })

        function record(page) {
            $.ajax({
                type: "GET",
                url: "{{ route('reviews-getmore')}}" + "?review=" + page,
                success: function(res) {
                    $('.testimonial-data').html(res);
                }
            })
        }
    </script>
    @stack('scripts')
</body>

</html>
