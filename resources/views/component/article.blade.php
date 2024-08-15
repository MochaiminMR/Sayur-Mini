@if (isset($articles[0]->title, $articles[1]->title, $articles[2]->title))
<div class="">
    <div class="flex flex-col gap-2 text-center items-center justify-center mb-4">
        <h1 class="w-full lg:text-7xl text-4xl leading-tight font-mono text-green-5 "> <span class="text-green-3">Sayur Mini</span> Article</h1>
        <p class="lg:text-xl text-base text-gray-2 font-medium">Dapatkan informasi terbaru dari Sayur Mini dan temukan promo terbaru kami!</p>
    </div>
    <div class="grid lg:grid-cols-4 grid-cols-1 lg:gap-4 lg:p-4 content-center">
        <div class="lg:col-span-2 col-span-4 lg:p-4 p-3">
            <a href="articles/{{$articles[0]->id}}">
                <div class="flex flex-col items-start justify-center lg:gap-4 gap-2">
                    <img class="w-full object-cover lg:aspect-[4/2] aspect-[3/2] rounded-md" src="{{asset('storage/'. $articles[0]->image)}}" alt="product image" />
                    <div class="flex flex-col lg:gap-1">
                        <h1 class="lg:text-2xl text-xl font-semibold">{{$articles[0]->title}}</h1>
                        <p>{!! Str::limit($articles[0]->content,100) !!}</p>
                    </div>
                </div>
            </a>
        </div>
        <div class="lg:col-span-2 col-span-4 lg:p-4 p-3 lg:space-y-4">
            <a href="articles/{{$articles[1]->id}}">
                <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-4 gap-2">
                    <img class="w-full max-w-xs aspect-[3/2] object-cover rounded-md" src="{{asset('storage/'. $articles[1]->image)}}" alt="product image" />
                    <div class="flex flex-col lg:gap-1">
                        <h1 class="text-xl font-semibold">{{$articles[1]->title}}</h1>
                        <p>{!! Str::limit($articles[1]->content,100) !!}</p>
                    </div>
                </div>
            </a>

            <a href="articles/{{$articles[1]->id}}">
                <div class="flex lg:flex-row flex-col items-center justify-center lg:gap-4 gap-2">
                    <img class="w-full max-w-xs aspect-[3/2] object-cover rounded-md" src="{{asset('storage/'.$articles[2]->image)}}" alt="product image" />
                    <div class="flex flex-col lg:gap-1">
                        <h1 class="text-xl font-semibold">{{$articles[2]->title}}</h1>
                        <p>{!! Str::limit($articles[2]->content,100) !!}</p>
                    </div>
                </div>
            </a>
        </div>

    </div>
</div>
@endif
