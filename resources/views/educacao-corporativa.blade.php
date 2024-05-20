<x-layout>
    <x-slot name="meta_descricao">
        Desenvolva habilidades essenciais para liderança e gestão eficaz em nosso curso de Educação Corporativa, projetado para impulsionar o crescimento profissional e promover uma cultura organizacional de excelência
    </x-slot>
    <x-slot name="meta_keywords">
        educação corporativa
    </x-slot>
    <x-slot name="title">
        Ethos on - Educação Corporativa
    </x-slot>
    <x-banner class="scale-[1.7] -mt-10">
        <x-slot name="image1">
            {{ asset('images/banner/corporativa.jpeg')}}
        </x-slot>
        <x-slot name="image2">
            {{ asset('images/banner/corporativa.jpeg')}}
        </x-slot>
        <x-slot name="description">
            <h1 class="text-2xl font-bold text-white py-20 max-[768px]:hidden">Educação Corporativa no <span class="text-teal-400">Ethos ON</span></h1>
        </x-slot>
        <x-slot name="addons">
            bg-transparent
        </x-slot>
        <x-slot name="newAttr">

        </x-slot>
    </x-banner>
    <div class="w-full">
        <div class="lg:mx-52">
            <h1 class="text-2xl font-bold">Educação Corporativa no <span class="text-teal-400">Ethos ON</span></h1>
        </div>
    </div>
    <div class="pt-10 mb-20 grid lg:gap-y-10 md:gap-y-96 sm:gap-y-96">
        <div class="flex justify-center">
           <x-curso-card>
                <x-slot name="image">
                    {{asset('images/cards/executivo.jpeg')}}
                </x-slot>
                <x-slot name="name">
                    Formação de Executivos
                </x-slot>
                <x-slot name="linkCurso">
                    /formacao-de-executivos
                </x-slot>
                Transforme sua equipe com nossos cursos de aperfeiçoamento, MBAs e de desenvolvimento de soft skills com projetos pedagógicos personalizados e plataforma de alta qualidade, seus executivos estarão preparados para enfrentar os desafios da empresa.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
           </x-curso-card>
        </div>

        <div class="flex justify-center">
            <x-curso-card>
                <x-slot name="image">
                    {{asset('images/cards/edu-corporativa/consultoria-educacional.jpeg')}}
                </x-slot>
                <x-slot name="name">
                    Consultoria Educacional
                </x-slot>
                <x-slot name="linkCurso">
                    /consultoria-educacional
                </x-slot>
                Reduza os gaps de nível operacional, tático e estratégico na formação dos seus trabalhadores!<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                   </x-curso-card>
        </div>

        <div class="flex justify-center">
            <x-curso-card>
                <x-slot name="image">
                    {{asset('images/cards/edu-corporativa/corporativa.jpeg')}}
                </x-slot>
                <x-slot name="name">
                    Universidade Corporativa
                </x-slot>
                <x-slot name="linkCurso">
                    /universidade-corporativa
                </x-slot>
                Investir na capacitação de sua equipe é investir no futuro da organização. Com nosso programa de Universidade Corporativa, você pode ter a certeza de uma formação eficiente e alinhada aos objetivos da sua empresa.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                   </x-curso-card>
        </div>

        <div class="flex justify-center">
            <x-curso-card>
                <x-slot name="image">
                    {{asset('images/cards/edu-corporativa/tecnico.jpeg')}}
                </x-slot>
                <x-slot name="name">
                    Curso Técnico-Operacional
                </x-slot>
                <x-slot name="linkCurso">
                    /tecnico-operacional
                </x-slot>
                Professores experientes nas áreas operacionais de grandes empresas, nossos cursos garantem uma comunicação eficaz e uma aprendizagem significativa.<div class="flex justify-end"><button type="button" class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba mais</button></div>
                   </x-curso-card>
        </div>
    </div>
</x-layout>