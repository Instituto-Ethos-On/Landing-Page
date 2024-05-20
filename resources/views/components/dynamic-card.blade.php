<a href="@if ($curso->cl == 1) {{ $curso->pathCL() }}
    @else 
    {{ $curso->path() }} @endif"
    {{ $attributes->merge(['class' => 'flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100']) }}>
    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-s-lg"
        src="{{ $curso->image ? asset('uploads/' . $curso->image) : asset('images/ethos-noimage.jpg') }}"
        alt="imagem do curso de {{ $curso->nome }}" title="{{ $curso->nome }}">
    <div class="card-content flex flex-col justify-between p-2 leading-normal">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white line-clamp-2">{{ $curso->nome }}
        </h5>
        <p class="mb-3 font-normal text-gray-700 !line-clamp-2">
            @if ($curso->cl == 1)
                {!! $curso->conteudo !!}
            @else
                {{ $curso->apresentacao }}
            @endif
        </p>
        <div class="flex justify-end"><button type="button"
                class="text-white bg-teal-400 hover:bg-teal-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center">Saiba
                mais</button></div>
    </div>
</a>
