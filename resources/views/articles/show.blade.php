@extends('layout.template')
@section('content')
<div class="relative p-4 mt-24">
    <div class="max-w-5xl mx-auto">
        <div class="mt-3 bg-white rounded-b lg:rounded-b-none lg:rounded-r flex flex-col justify-between leading-normal">

            <div class="breadcrumbs text-xl font-medium text-green-4 mb-6">
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('articles.index')}}">Articles</a></li>
                    <li>{{$article->title}}</li>
                </ul>
            </div>

            <div class="article">

                <h1 class="text-green-3 font-bold text-4xl"> {{$article->title}} </h1>

                <div class="flex flex-col gap-2 mt-6 justify-start items-start">
                    <img class="w-full max-w-full object-cover aspect-[4/1.8] rounded-2xl" src="{{asset('storage/'. $article->image)}}" alt="{{$article->slug}}">

                    <div class="py-5  font-regular text-gray-900 flex text-lg">
                        <span class="mr-3 flex flex-row items-center">
                            <svg class="text-green-3" fill="currentColor" width="18px" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M256,0C114.837,0,0,114.837,0,256s114.837,256,256,256s256-114.837,256-256S397.163,0,256,0z M277.333,256
                                c0,11.797-9.536,21.333-21.333,21.333h-85.333c-11.797,0-21.333-9.536-21.333-21.333s9.536-21.333,21.333-21.333h64v-128
                               c0-11.797,9.536-21.333,21.333-21.333s21.333,9.536,21.333,21.333V256z"></path>
                                    </g>
                                </g>
                            </svg>
                            <span class="ml-1  font-semibold">{{ $article->created_at->translatedFormat('d F Y') }}</span>

                        </span>

                        <span class="flex flex-row items-center hover:text-green-3  mr-3">
                            <svg class="text-green-3" fill="currentColor" width="21px" aria-hidden="true" role="img" focusable="false" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path fill="currentColor" d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
                                </path>
                                <path d="M0 0h24v24H0z" fill="none"></path>
                            </svg>
                            <span class="ml-1 font-semibold">Sayur Mini</span>
                        </span>
                    </div>
                </div>

                <hr>


                <div class="content flex flex-col gap-3 font-medium">

                    {!!$article->content!!}
                </div>


            </div>

        </div>
    </div>
</div>
@endsection
