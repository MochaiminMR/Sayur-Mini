@extends('layout.template')

@section('content')
<div class="mx-auto px-16 my-28 w-full">
    <div class="flex flex-col gap-2 text-center items-center justify-center mb-4">
        <h1 class="w-full text-7xl leading-tight font-mono text-green-5">Product <span class="text-green-2">Description</span></h1>
        <p class="text-xl font-medium">Lorem Ipsum dolor amet estadio el darama tore</p>
    </div>
    <div class="grid lg:grid-cols-4 justify-items-center gap-6">

        @for ($i = 0; $i < 6; $i++) <div class="bg-base-100 w-full max-w-80 shadow-xl p-3 rounded-xl">
            <a href="#">
                <img class="rounded-xl w-full object-cover" src="{{ asset('storage/images/article-3.png') }}" alt="Shoes" />
                <div class="flex flex-col gap-2 mt-4">

                    <h2 class="card-title text-green-5 font-medium text-lg">Broccoli</h2>
                    <p class="text-gray-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    <div class="card-actions justify-end mt-4 w-full">
                        <!-- Button to open the modal -->
                        <button class="btn w-full bg-green-4 text-white hover:bg-green-2 text-base font-normal" onclick="document.getElementById('my_modal_{{ $i }}').showModal()">Detail Benefit</button>
                        <!-- Modal -->
                        <dialog id="my_modal_{{ $i }}" class="modal">
                            <div class="modal-box">
                                <form method="dialog">
                                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2">✕</button>
                                </form>
                                <!-- judul -->
                                <h3 class="text-xl mb-4 font-bold">Highland Blocky Capsicum</h3>
                                <!-- konten -->
                                <div class="grid grid-cols-4 gap-2">
                                    <div class="col-span-2">
                                        <img class="w-full aspect-video object-cover" src="{{ asset('storage/images/article-3.png') }}" alt="Shoes" />
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Saran Penyimpanan</h2>
                                            <p class="text-gray-4 text-sm">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                                        </div>

                                        <div class="flex gap-4">
                                            <div class="flex flex-col">
                                                <h2 class="card-title text-green-5 font-semibold text-sm mt-2">Ketahanan di Pendingin</h2>
                                                <p class="text-gray-4 text-sm">5-7 hari.</p>
                                            </div>
                                            <div class="flex flex-col">
                                                <h2 class="card-title text-green-5 font-semibold text-sm mt-2">Ketahanan di Suhu Ruang</h2>
                                                <p class="text-gray-4 text-sm">5-7 hari.</p>
                                            </div>
                                        </div>

                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Saran Penyajian</h2>
                                            <p class="text-gray-4 text-sm">Cuci dulu sebelum dikonsumsi.</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Manfaat</h2>
                                            <p class="text-gray-4 text-sm">Meningkatkan sistem kekebalan tubuh, menjaga kesehatan jantung, mendukung pencernaan yang sehat, dan membantu dalam detoksifikasi tubuh.</p>
                                        </div>
                                    </div>
                                    <div class="col-span-2">
                                        <img class="w-full aspect-video object-cover" src="{{ asset('storage/images/article-3.png') }}" alt="Shoes" />
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Saran Penyajian</h2>
                                            <p class="text-gray-4 text-sm">Cuci dulu sebelum dikonsumsi.</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Contoh Sajian</h2>
                                            <p class="text-gray-4 text-sm">Taburan di atas omelette, topping pada pizza, atau campuran dalam smoothie.</p>
                                        </div>
                                        <div class="flex flex-col">
                                            <h2 class="card-title text-green-5 font-semibold text-base mt-2">Kandungan</h2>
                                            <p class="text-gray-4 text-sm">Mengandung vitamin C, vitamin K, serat, serta senyawa antioksidan seperti sulforaphane.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex gap-2 w-full justify-end border">
                                    <form method="dialog">
                                        <button class="btn ">Close</button>
                                    </form>
                                    <button class="btn bg-green-4 text-white hover:bg-green-2" data-url="/order-now">Order Now</button>
                                </div>

                            </div>
                        </dialog>
                    </div>

                </div>
            </a>
    </div>
    @endfor
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
