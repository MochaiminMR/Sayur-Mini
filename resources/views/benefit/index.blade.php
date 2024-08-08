@extends('layout.template')

@section('content')
<div class="mx-auto px-16 my-28 w-full">
    <div class="flex flex-col gap-2 text-center items-center justify-center mb-4">
        <h1 class="w-full text-7xl leading-tight font-mono text-green-5">Product <span class="text-green-2">Description</span></h1>
        <p class="text-xl font-medium">Lorem Ipsum dolor amet estadio el darama tore</p>
    </div>
    <div class="grid lg:grid-cols-4 justify-items-center gap-6">

        @foreach ($products->take(9) as $product)
        <div class="bg-base-100 w-full max-w-80 shadow-xl p-3 rounded-xl">
            <div>
                <a class="relative  flex h-52 overflow-hidden rounded-none">
                    <img class="peer absolute top-0 right-0 h-full w-full max-h-48 object-cover" src="{{asset('storage/'. $product->image_1)}}" alt="{{$product->slug_1}}" />
                    <img class="peer absolute top-0 -right-96 h-full w-full max-h-48 object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="{{asset('storage/'. $product->image_2)}}" alt="{{$product->slug_2}}" />

                    <svg class="pointer-events-none absolute inset-x-0 bottom-5 mx-auto text-3xl text-white  transition-opacity group-hover:animate-ping group-hover:opacity-30 peer-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                        <path fill="currentColor" d="M2 10a4 4 0 0 1 4-4h20a4 4 0 0 1 4 4v10a4 4 0 0 1-2.328 3.635a2.996 2.996 0 0 0-.55-.756l-8-8A3 3 0 0 0 14 17v7H6a4 4 0 0 1-4-4V10Zm14 19a1 1 0 0 0 1.8.6l2.7-3.6H25a1 1 0 0 0 .707-1.707l-8-8A1 1 0 0 0 16 17v12Z" />
                    </svg>
                </a>
                <div class="flex flex-col gap-2 mt-4">
                    <h2 class="card-title text-green-5 font-medium text-lg">Broccoli</h2>
                    <p class="text-gray-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <div class="card-actions justify-end mt-4 w-full">
                        <!-- Button to open the modal -->
                        <button class="btn w-full bg-green-4 text-white hover:bg-green-2 text-base font-normal" onclick="document.getElementById('my_modal_{{ $product->id }}').showModal()">Detail Benefit</button>
                        <!-- Modal -->
                        <dialog id="my_modal_{{ $product->id }}" class="modal">
                            <div class="modal-box">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <!-- judul -->
                                <h3 class="text-xl mb-4 font-bold">{{$product->title}}</h3>
                                <!-- konten -->
                                <div class="grid grid-cols-4 gap-2">
                                    <div class="col-span-2">
                                        <img class="w-full aspect-video object-cover" src="{{ asset('storage/'.$product->image_1) }}" alt="{{$product->slug_1}}" />
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Saran Penyimpanan</h2>
                                            <p class="text-gray-4 text-sm">{{$product->saran_penyimpanan}}</p>
                                        </div>

                                        <div class="flex gap-4">
                                            <div class="flex flex-col">
                                                <h2 class="card-title text-green-5 font-semibold text-sm mt-2">Ketahanan di Pendingin</h2>
                                                <p class="text-gray-4 text-sm">{{$product->ketahanan_dingin}}</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h2 class="card-title text-green-5 font-semibold text-sm mt-2">Ketahanan di Suhu Ruang</h2>
                                                <p class="text-gray-4 text-sm">{{$product->ketahanan_suhu}}</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Saran Penyajian</h2>
                                            <p class="text-gray-4 text-sm">{{$product->saran_penyajian}}</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Manfaat</h2>
                                            <p class="text-gray-4 text-sm">{{$product->manfaat}}</p>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <img class="w-full aspect-video object-cover" src="{{ asset('storage/'.$product->image_2) }}" alt="{{$product->slug_2}}" />
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Rasa</h2>
                                            <p class="text-gray-4 text-sm">{{$product->rasa}}</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Contoh Sajian</h2>
                                            <p class="text-gray-4 text-sm">{{$product->contoh_sajian}}</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Kandungan</h2>
                                            <p class="text-gray-4 text-sm">{{$product->kandungan}}</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2 w-full justify-end border">
                                    <form method="dialog">
                                        <button class="btn ">Close</button>
                                    </form>
                                    <a href="{{$product->tokped}}" class="btn bg-green-4 text-white hover:bg-green-2" data-url="/order-now">Order Now</a>
                                </div>

                            </div>
                        </dialog>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
    document.querySelectorAll('button[data-url]').forEach(button => {
        button.addEventListener('click', event => {
            const url = event.currentTarget.getAttribute('data-url');
            window.location.href = 'https://www.tokopedia.com/sayurmini-microgreen/product';
        });
    });
</script>
@endsection
