<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Articles') }}
            </h2>
            <a href="{{route('dashboard.add')}}" class="btn bg-green-2 hover:bg-green-3 text-white"> <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12.998H13V18.998H11V12.998H5V10.998H11V4.99799H13V10.998H19V12.998Z" fill="white" />
                    </svg>
                </span> Tambah Postingan
            </a>
        </div>
    </x-slot>

    <div class="w-full">
        <div class="w-full mx-auto">
            <div class="flex flex-col">
                <div class="grid lg:grid-cols-4 justify-items-center mx-12 mt-8  gap-6">
                    @foreach ($articles as $article)
                    <div class="bg-base-100 w-full max-w-80 shadow-xl p-3 rounded-xl">
                        <a href="{{route('articles.showDetail', $article->id)}}">
                            <img class="rounded-xl w-full aspect-video object-cover" src="{{ asset('storage/' . $article->image) }}" alt="{{ $article->slug}}" />
                            <div className="badge badge-accent">{{$article->created_at->translatedFormat('d F Y')}}</div>
                            <div class="flex flex-col gap-2">
                                <div class="mt-3 flex flex-col">
                                    <h2 class="card-title text-green-5 font-medium text-lg"> {{$article->title}} </h2>
                                    <div class="text-gray-4 text-sm">
                                        {!! Str::limit($article->content, 80) !!}
                                    </div>
                                </div>
                                <div class="card-actions justify-start mt-2 w-full">

                                    <div class="flex justify-start items-start w-full max-w-fit gap-1">
                                        <a href="{{route('dashboard.edit', $article->id)}}" class="btn bg-yellow-500 hover:bg-yellow-500 w-full">Edit</a>
                                        <form class="" action="{{ route('dashboard.delete', $article->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn bg-red-500 hover:bg-red-500 w-full">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
    </div>
    {{ $articles->links('pagination.tailwind') }}
</x-app-layout>
