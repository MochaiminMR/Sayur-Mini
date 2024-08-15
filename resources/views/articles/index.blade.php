@extends('layout.template')

@section('content')
<div class="mx-auto lg:px-16 px-2 lg:my-28 my-20 w-full">
    <div class="flex flex-col gap-2 text-center items-center justify-center mb-4">
        <h1 class="w-full lg:text-7xl text-4xl text leading-tight font-mono text-green-5 "> Artikel <span class="text-green-2">Sayur Mini</span></h1>
        <p class="lg:text-xl text-base font-medium w-full max-w-lg text-gray-3">Dapatkan informasi terbaru dari Sayur Mini dan temukan promo terbaru kami!</p>
    </div>
    <div class="grid lg:grid-cols-4 justify-items-center  gap-6">
        @foreach ($articles as $article) <div class="bg-base-100 w-full max-w-80 shadow-xl p-3 rounded-xl">
            <a href="/articles/{{$article->id}}">
                <img class="rounded-lg w-full object-cover aspect-video" src="{{asset('storage/'. $article->image)}}" alt="{{$article->slug}}" />
                <div class="flex flex-col flex-wrap gap-2 mt-4">
                    <h2 class="card-title text-green-5 font-medium text-lg"> {{$article->title}} </h2>
                    <p class="text-gray-4 text-sm w-full max-w-fit">{!! Str::limit($article->content,30)!!}</p>
                    <div class="card-actions justify-start mt-4 w-full">
                        <div class="flex justify-between w-full">
                            <!-- Avater -->
                            <div class="flex items-center gap-2">
                                <img alt="" src="{{ asset('storage/images/image-profile.png') }}" class="rounded-full object-cover w-full max-w-10" />
                                <div class="flex justify-center items-center w-full">
                                    <div class="flex flex-col">
                                        <p class="mt-0.5 text-sm font-medium text-gray-900">Sayur Mini</p>
                                        <p class="mt-0.5 text-xs font-medium text-gray-4">{{$article->created_at->translatedFormat('d F Y')}}</p>
                                    </div>
                                </div>
                            </div>


                            <div class="flex items-center justify-center">
                                <p class="text-sm text-green-4 font-semibold">Selengkapnya</p>
                                <svg width="14" viewBox="0 0 17 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.34053 2.57753C5.15135 2.76676 5.04508 3.02338 5.04508 3.29095C5.04508 3.55853 5.15135 3.81515 5.34053 4.00438L10.3355 8.99937L5.34053 13.9944C5.15672 14.1847 5.05501 14.4396 5.0573 14.7041C5.0596 14.9687 5.16573 15.2218 5.35282 15.4089C5.53991 15.596 5.79301 15.7021 6.05759 15.7044C6.32217 15.7067 6.57706 15.605 6.76738 15.4212L12.4758 9.71279C12.665 9.52356 12.7712 9.26694 12.7712 8.99937C12.7712 8.73179 12.665 8.47517 12.4758 8.28594L6.76738 2.57753C6.57815 2.38835 6.32153 2.28208 6.05395 2.28208C5.78638 2.28208 5.52976 2.38835 5.34053 2.57753Z" fill="#004D3F" />
                                </svg>
                            </div>
                        </div>
                    </div>
            </a>
        </div>

    </div>

    @endforeach
</div>
</div>
@endsection
