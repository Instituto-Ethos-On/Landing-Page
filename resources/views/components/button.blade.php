<div {{ $attributes->merge(['class' => 'flex items-center text-white font-bold']) }}>
@php
    $target = '';
    if ($linkCurso == $whatsapp_num)
    {
        $target = 'target=_blank';
    }
@endphp
    <a href="{{ $linkCurso }}" {{$target}}><button
            class="bg-teal-400 focus:ring-blue-300 focus:outline-none focus:ring-4 rounded-full py-2 px-5">
                <span class="flex items-center gap-x-2">
                  <p>{{ $slot }}</p>
                  <img src="{{asset('images/svg/arrow-right.svg')}}" alt="seta-direita" height="30" width="30">
                </span>
            
        </button></a>
</div>
