<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <a href="{{route('dashboard_products.add')}}" class="btn bg-green-2 hover:bg-green-3 text-white"> <span><svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19 12.998H13V18.998H11V12.998H5V10.998H11V4.99799H13V10.998H19V12.998Z" fill="white" />
                    </svg>
                </span> Tambah Products
            </a>
        </div>
    </x-slot>

    <div class="w-full">
        <div class="w-full mx-auto">
            <div class="grid lg:grid-cols-4 justify-items-center mx-12 mt-8  gap-6">
                @foreach ($products as $product)
                <div class="bg-base-100 w-full max-w-80 shadow-xl p-3 rounded-xl">
                    <a href="">
                        <img class="rounded-xl w-full aspect-video object-cover" src="{{ asset('storage/' . $product->image_1) }}" alt="{{ $product->slug_1}}" />
                        <div class="flex flex-col gap-2">
                            <div class="mt-3 flex flex-col">
                                <h2 class="card-title text-green-5 font-medium text-lg"> {{Str::limit($product->title, 20)}} </h2>
                                <div class="text-gray-4 text-sm">
                                    {!! Str::limit($product->saran_penyajian, 30) !!}
                                </div>
                            </div>
                            <div class="card-actions justify-start mt-2 w-full">

                                <div class="flex justify-start items-start w-full max-w-fit gap-1">
                                    <a href="{{route('dashboard_products.edit', $product->id)}}" class="btn bg-yellow-500 hover:bg-yellow-500 w-full">Edit</a>
                                    <form class="" action="{{ route('dashboard_products.delete', $product->id) }}" method="POST">
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
            {{ $products->links('pagination.tailwind') }}
        </div>
    </div>
</x-app-layout>
