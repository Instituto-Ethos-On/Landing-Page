<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="images/favicon.ico" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.tailwindcss.com"></script>

    @include('layout')

<div

    class="gap-4 mx-4 space-y-4 md:space
jetivo especializar o profissional de engenharia e gestão, focando na abordagem de técnicas e ferramentas para o gerenciamento da cadeia de suprimentos de organizações industriais e redes de distrib-y-0 lg:grid lg:grid-cols-2">
    @unless (count($cursos) == 0)
        @foreach ($cursos as $curso)
            <div class="p-6 bg-gray-50 rounded border border-gray-200">
                <div class="flex">
                    <img class="hidden mr-6 w-48 md:block" src="" alt="" />
                    <div>
                        <h3 class="text-2xl">
                            <a href="show.html">{{ $curso->nome }}</a>
                        </h3>
                        <div class="mb-4 text-xl font-bold">{{ $curso->apresentacao }}</div>
                        <ul class="flex">
                            <div
                                class="flex justify-center items-center py-2 px-4 mr-2 text-xs text-white bg-black rounded-xl">
                                <a href="#">Acessar curso</a>
                            </div>
                    </div>
                </div>
            </div>
    </div>
    @endforeach
@else
    <p>Nenhum curso encontrado</p>
@endunless

