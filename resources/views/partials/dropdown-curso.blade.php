@push('styles')
    <style>
        .header-container-pc {
            transform: translate(-580px, 718px) !important;
        }
    </style>
@endpush

<div class="flex flex-col">
    <button id="first-btn-dropdown" data-dropdown-toggle="dropdown-img-1" data-dropdown-offset-distance="20"
        data-dropdown-offset-skidding="156" data-dropdown-placement="left" 
        class="inline-flex items-center p-2  font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100 focus:outline-none  focus:text-teal-700"
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Engenharia
    </button>

    <button data-dropdown-toggle="dropdown-img-2" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="108"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100   focus:text-teal-700"
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Psicologia
    </button>

    <button data-dropdown-toggle="dropdown-img-3" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="60"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100   focus:text-teal-700 "
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Saúde
    </button>

    <button data-dropdown-toggle="dropdown-img-4" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="12"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100    focus:text-teal-700"
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Direito
    </button>

    <button data-dropdown-toggle="dropdown-img-5" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="-36"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100 focus:text-teal-700"
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Educação
    </button>

    <button data-dropdown-toggle="dropdown-img-6" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="-84"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100 focus:outline-none  focus:text-teal-700 "
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Gestão e Negocios
    </button>

    <button data-dropdown-toggle="dropdown-img-7" data-dropdown-placement="left" 
    
    data-dropdown-offset-skidding="-132"
        data-dropdown-offset-distance="20"
        class="inline-flex items-center p-2 font-bold text-2xl text-center text-teal-500 bg-white rounded-lg hover:bg-gray-100   focus:text-teal-700 "
        type="button">
        <i class="fa-solid fa-chevron-right pr-2"></i> Tecnologia
    </button>

</div>
<!-- Dropdown menu -->
<a href="/engenharia">
    <div id="dropdown-img-1" data-bgimage="images/cards/engenharia.jpg"
        class="text-white z-10 size-[450px] header-container header-container-pc hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl  shadow dark:divide-gray-600"
        style=" background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Torne-se um especialista na sua área de engenharia no Ethos On.
            </p>
            <p>
                Tenha acesso às melhores oportunidades do mercado de trabalho, tornando-se um profissional
                altamente
                capacitado.
            </p>
        </div>
    </div>
</a>

<a href="/psicologia">
    <div id="dropdown-img-2" data-bgimage="images/cards/psicologia.jpg"
        class="text-white z-10 size-[450px] header-container header-container-pc hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600"
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Torne-se uma referência!</p>
            <p>
                Expanda seu conhecimento na sua especialidade e construa uma carreira de excelência com a
                ajuda
                do
                Ethos
                On.
            </p>
        </div>
    </div>
</a>

<a href="/saude">
    <div id="dropdown-img-3" data-bgimage="images/cards/saude.jpg"
        class="text-white z-10 size-[450px] header-container header-container-pc hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600"
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Torne-se um profissional requisitado na área de saúde no Ethos On.
            </p>
            <p>Desenvolva novas habilidades e atenda as principais demandas da Área da Saúde.
            </p>
        </div>
    </div>
</a>

<a href="/direito">
    <div id="dropdown-img-4" data-bgimage="images/cards/direito.jpg"
        class="text-white z-10 size-[450px] header-container header-container-pc hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600"
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Aumente em 3x as chances do seu sucesso no mercado de trabalho.
            </p>
            <p>Faça sua pós-graduação em Direito no Ethos On.</p>
        </div>
    </div>
</a>

<a href="/educacao">
    <div id="dropdown-img-5" data-bgimage="images/cards/educacao.jpg"
        class="text-white z-10 size-[450px] header-container header-container-pc hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600"
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Impulsione a sua carreira e aumente a valorização do seu currículo no Ethos On.
            </p>
            <p>Fique um passo à frente da concorrência, conquiste sua promoção através de um currículo de excelência.</p>
        </div>
    </div>
</a>

<a href="/gestao-e-negocios">
    <div id="dropdown-img-6" data-bgimage="images/cards/negocios.jpg"
        class="text-white z-10 header-container header-container-pc size-[450px]  hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600"
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Torne-se um profissional qualificado e receba os salários mais altos do mercado com ajuda do
                Ethos On.
            </p>
            <p>Receba as melhores oportunidades especializando-se na sua área de atuação.</p>
        </div>
    </div>
</a>

<a href="/tecnologia">
    <div id="dropdown-img-7" data-bgimage="images/cards/tecnologia.jpg"
        class="text-white fixed z-10 header-container header-container-pc size-[450px] hidden divide-y divide-gray-100 rounded-t-3xl rounded-bl-3xl shadow dark:divide-gray-600 "
        style="background-repeat: no-repeat; background-size: cover; background-color: grey;">
        <div class="p-14 pt-72 drop-shadow text-semibold">
            <p class="pb-4">Torne-se um profissional qualificado e receba os salários mais altos do mercado com a ajuda do
                Ethos On.
            </p>
            <p>Destaque-se no mercado com alta demanda de profissionais qualificados, no Ethos On.</p>
        </div>
    </div>
</a>



<script src="{{ url('js/dropdown-position.js') }}"></script>
<script src="{{ url('js/click-onload.js') }}"></script>
