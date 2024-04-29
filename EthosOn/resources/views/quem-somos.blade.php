<x-layout>
    <x-slot name="meta_descricao">
        O instituto Ethos On é uma instituição de educação especializada em cursos digitais e híbridos de Pós-Graduação e Educação Corporativa, tendo um objetivo: Promover a educação como POTÊNCIA DE VIDA
    </x-slot>
    <x-slot name="meta_keywords">
        Ethos On,educação,pós graduação,EAD
    </x-slot>
    @push('styles')
        <style>
            body {
                background-attachment: fixed;
                background-image: url({{ asset('images/banner/quem-somos-parallax.jpeg') }})
            }
        </style>
    @endpush
    <x-slot name="title">
        Ethos on - Quem somos
    </x-slot>
    <x-banner class="scale-[1.8] max-[768px]:scale-[2.8] lg:-mt-6 -mt-24 overflow-hidden">
        <x-slot name="image1">
            {{ asset('images/banner/quem-somos.jpg') }}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/quem-somos.jpg') }}
        </x-slot>
        <x-slot name="description">
                <div class="lg:text-white lg:w-80 max-[768px]:mt-44 max-[768px]:bg-white max-[768px]:p-5 max-[768px]:w-11/12 max-[768px]:rounded-xl">
                    <h2 class="text-3xl font-bold pb-4">Instituto <span class="text-teal-400">Ethos ON</span></h2>
                    <quote>
                        <p class="text-lg lg:w-96 pb-4">O instituto Ethos On é uma instituição de educação especializada em cursos digitais e híbridos de Pós-Graduação e Educação Corporativa, tendo um objetivo:</p>
                    </quote>
                    <h2 class="text-2xl font-bold lg:w-96">Promover a educação como <span class="text-teal-400">POTÊNCIA DE VIDA</span>.</h2>
                </div>
        </x-slot>
        <x-slot name="addons">
            max-[768px]:overflow-visible
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>
    <div class="lg:py-10 max-[768px]:pt-[420px]"></div>
    <div class="w-screen gap-5 flex justify-center">
        <div class="lg:w-1/2"></div>
        <div class="lg:w-1/2 grid grid-cols-1 items-center">
            <div class="pb-5">
                <h1 class="lg:text-4xl text-3xl lg:font-semibold font-bold lg:w-96">Tudo o que você precisa para sua formação profissional está
                    no
                    Ethos On.</h1>
            </div>
            <div class="grid grid-cols-1 gap-5 pb-5">
                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-7/12 w-10/12 flex items-center gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] shadow-">
                    <i class="fas fa-user-graduate fa-3x text-teal-400"></i>
                    <p class="lg:w-72">Estudiosos e Pesquisadores com mais de 15 anos na área.</p>
                </div>
                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-7/12 w-10/12 flex items-center gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] shadow-">
                    <i class="fas fa-university fa-3x text-teal-400"></i>
                    <p class="lg:w-72">Equipe composta por profissionais responsáveis pela formação de +30.000
                        trabalhadores.</p>
                </div>
                <div
                    class="bg-gray-50 rounded-3xl px-3 py-10 justify-center lg:w-7/12 w-10/12 flex items-center gap-5 shadow-teal-500 shadow-[_0px_7px_0px_0px] shadow-">
                    <i class="fas fa-chalkboard-teacher fa-3x text-teal-400"></i>
                    <p class="lg:w-72">Plataforma EAD atualizada para atender às novas necessidades do mercado.</p>
                </div>
            </div>
            <div class="lg:w-96 grid gap-5 font-medium p-3 pb-5 ">
                <p>O Ethos On propõe uma mudança no olhar sobre a formação dos trabalhadores.</p>
                <p>
                    Buscando incluir nos nossos projetos de consultoria o saber epistêmico e técnico, necessário à
                    formação do trabalhador.
                </p>
            </div>
            <div class="lg:w-72 p-5 pb-5">
                <x-button>
                    <x-slot name="linkCurso">
                        /posgraduacoes
                    </x-slot>
                    Confira nossos cursos!
                </x-button>
            </div>
        </div>
    </div>
    <div class="bg-white w-screen max-[768px]:h-[800px] max-[768px]:-mb-[400px]">
        <div class=" flex justify-center p-32 pb-96 lg:-mb-64 ">
            <div class="lg:w-3/5 flex justify-center pb-10">
                <h1 class="w-80 text-3xl font-bold">Nossas políticas de <span class="text-teal-400">Inclusão</span>,
                    <span class="text-teal-400">Diferenciais</span> Pedagógicos e <span
                        class="text-teal-400">Regulação</span> e Registro.</h1>
            </div>
        </div>
    </div>


</x-layout>
