<div class="font-sans text-black">

    <h1 class="w-full lg:text-7xl text-4xl text-center leading-tight font-mono text-green-5 lg:mb-10 mb-4"> Product <span class="text-green-3">Terlaris</span></h1>

    <div class="grid lg:grid-cols-4 gap-6 justify-items-center ">

        @foreach ($products as $product)
        <div class="group flex w-full max-w-xs flex-col rounded-2xl border border-green-3 bg-white shadow-md">

            <a class="relative  flex h-52 overflow-hidden rounded-none">
                <img class="peer aspect-square rounded-3xl absolute top-3 right-0 h-full w-full max-h-48 object-cover" src="{{asset('storage/'.$product->image_1)}}" alt="{{$product->slug_1}}" />
                <img class="peer aspect-square rounded-2xl absolute top-3 -right-96 h-full w-full max-h-48 object-cover transition-all delay-100 duration-1000 hover:right-0 peer-hover:right-0" src="{{asset('storage/'.$product->image_1)}}" alt="{{$product->slug_1}}" />


                <svg class="pointer-events-none absolute inset-x-0 bottom-5 mx-auto text-3xl text-white  transition-opacity group-hover:animate-ping group-hover:opacity-30 peer-hover:opacity-0" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" role="img" width="1em" height="1em" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32">
                    <path fill="currentColor" d="M2 10a4 4 0 0 1 4-4h20a4 4 0 0 1 4 4v10a4 4 0 0 1-2.328 3.635a2.996 2.996 0 0 0-.55-.756l-8-8A3 3 0 0 0 14 17v7H6a4 4 0 0 1-4-4V10Zm14 19a1 1 0 0 0 1.8.6l2.7-3.6H25a1 1 0 0 0 .707-1.707l-8-8A1 1 0 0 0 16 17v12Z" />
                </svg>
            </a>


            <div class="px-2 pb-5 ">
                <div class="flex flex-col mb-2">
                    <h5 class="text-center text-lg tracking-tight text-green-4 font-semibold">{{Str::limit($product->title,25)}}</h5>
                    <p class="text-sm text-center text-slate-900">
                        {{Str::limit($product->contoh_sajian, 35)}}
                    </p>
                </div>


                <div class="flex w-full items-center justify-center gap-1">
                    <!-- Button to open the modal -->
                    <button class="btn w-full max-w-fit bg-green-4 text-white font-medium hover:bg-green-2 text-base" onclick="document.getElementById('my_modal_{{ $product->id }}').showModal()">Detail</button>
                    <!-- Modal -->
                    <dialog id="my_modal_{{ $product->id }}" class="modal">
                        <div class="modal-box">
                            <form method="dialog">
                                <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                            </form>
                            <!-- judul -->
                            <h3 class="lg:text-xl text-base mb-4 font-bold mt-4">{{$product->title}}</h3>
                            <!-- konten -->
                            <div class="grid grid-cols-4 gap-2">
                                <div class="col-span-2">
                                    <img class="w-full aspect-video object-cover" src="{{ asset('storage/'.$product->image_1) }}" alt="{{$product->slug_1}}" />
                                    <div class="flex flex-col">
                                        <h2 class="card-title text-green-5 font-semibold lg:text-base text-sm mt-2">Saran Penyimpanan</h2>
                                        <p class="text-gray-4 text-sm">{{$product->saran_penyimpanan}}</p>
                                    </div>

                                    <div class="flex lg:flex-row flex-col lg:gap-4">
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
                                <a target="_blank" href="{{$product->tokped}}" class="btn bg-green-4 text-white hover:bg-green-2" data-url="/order-now">Order Now</a>
                            </div>

                        </div>
                    </dialog>

                    <details class="w-full max-w-fit  dropdown">
                        <!-- Button -->
                        <summary class="btn flex items-center justify-center rounded-md bg-green-4 px-3  text-center text-sm font-medium text-white hover:bg-green-5 focus:outline-none">


                            <svg width="22" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.5 4.5H5.05848C5.7542 4.5 6.10206 4.5 6.36395 4.68876C6.62584 4.87752 6.73584 5.20753 6.95585 5.86754L7.5 7.5" stroke="#C2FA6B" stroke-linecap="round" />
                                <path d="M17.5 17.5H8.05091C7.90471 17.5 7.83162 17.5 7.77616 17.4938C7.18857 17.428 6.78605 16.8695 6.90945 16.2913C6.92109 16.2367 6.94421 16.1674 6.99044 16.0287V16.0287C7.04177 15.8747 7.06743 15.7977 7.09579 15.7298C7.38607 15.0342 8.04277 14.5608 8.79448 14.5054C8.8679 14.5 8.94906 14.5 9.11137 14.5H14.5" stroke="#C2FA6B" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M14.1787 14.5H11.1376C9.85836 14.5 9.21875 14.5 8.71781 14.1697C8.21687 13.8394 7.96492 13.2515 7.461 12.0757L7.29218 11.6818C6.48269 9.79294 6.07794 8.84853 6.52255 8.17426C6.96715 7.5 7.99464 7.5 10.0496 7.5H15.3305C17.6295 7.5 18.779 7.5 19.2126 8.24711C19.6462 8.99422 19.0758 9.99229 17.9352 11.9884L17.6517 12.4846C17.0897 13.4679 16.8088 13.9596 16.3432 14.2298C15.8776 14.5 15.3113 14.5 14.1787 14.5Z" stroke="#C2FA6B" stroke-linecap="round" />
                                <circle cx="17" cy="20" r="1" fill="#C2FA6B" />
                                <circle cx="9" cy="20" r="1" fill="#C2FA6B" />
                            </svg>

                            <span class="text-base text-white">IDR {{ number_format($product->price, 0, ',', '.') }}</span>


                        </summary>
                        <ul class="absolute z-50  menu dropdown-content bg-green-1 rounded-box p-2 shadow w-full">
                            <li> <a target="_blank" href="{{$product->tokped}}" class="text-green-4 font-semibold"> Tokopedia</a></li>
                            <li> <a target="_blank" href="{{$product->shoppe}}" class="text-green-4 font-semibold"> Shoppee</a></li>
                        </ul>
                    </details>
                </div>
            </div>
        </div>


        @endforeach
    </div>
</div>

</div>
