<div class="grid mb-8 border border-gray-200 rounded-lg shadow-sm md:mb-12 md:grid-cols-2 bg-white">
    @foreach($reviews as $review)
    <figure class="flex flex-col items-center justify-center p-8 text-center bg-white border-b border-gray-200 rounded-t-lg md:rounded-t-none md:rounded-ss-lg md:border-e">
        <blockquote class="max-w-2xl mx-auto mb-4 text-gray-500 lg:mb-8">
            <h1 class="text-lg font-semibold text-gray-900">{!! $review->titulo !!}</h1>
            <p class="my-4">{!! $review->descricao !!}"</p>
        </blockquote>
        <figcaption class="flex items-center justify-center">
            <img class="rounded-full size-9 object-cover" src="{{ asset('uploads/' . $review->image) }}" alt="imagem do aluno {{ $review->nome }}">
            <div class="space-y-0.5 font-medium text-left rtl:text-right ms-3">
                <div>{{ $review->nome }}</div>
                <div class="text-sm text-gray-500">{{ $review->curso }}</div>
            </div>
        </figcaption>    
    </figure>
    @endforeach
</div>
<div class="pagination lg:px-72 w-full lg:py-10 max-[768px]:pb-20 max-[768px]:px-10">
    {{$reviews->appends(['review' => request()->input('page', 1)])->links()}}
</div>
