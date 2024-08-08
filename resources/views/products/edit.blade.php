<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-6 text-green-3 font-mono">Update Product</h1>

            @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('dashboard_products.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="font-serif">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-green-4">Name</label>
                    <input required type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm" value="{{$product->title}}">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-green-4">Category</label>
                    <select required name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">
                        <option value="Microgreen" {{$product->category == 'Microgreen' ? 'selected' : ''}}>Microgreen</option>
                        <option value="Hidroponik" {{$product->category == 'Hidroponik' ? 'selected' : ''}}>Hidroponik</option>
                        <option value="Salad" {{$product->category == 'Salad' ? 'selected' : ''}}>Salad</option>
                    </select>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="saran_penyajian" class="block text-sm font-medium text-green-4 ">Saran Penyajian</label>
                        <textarea required type="textarea" name="saran_penyajian" id="saran_penyajian" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->saran_penyajian}}
                        </textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="saran_penyimpanan" class="block text-sm font-medium text-green-4 ">Saran Penyimpanan</label>
                        <textarea required type="textarea" name="saran_penyimpanan" id="saran_penyimpanan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->saran_penyimpanan}}
                        </textarea>
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="ketahanan_dingin" class="block text-sm font-medium text-green-4 ">Ketahanan Dingin</label>
                        <textarea required type="textarea" name="ketahanan_dingin" id="ketahanan_dingin" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->ketahanan_dingin}}
                        </textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="ketahanan_suhu" class="block text-sm font-medium text-green-4 ">Ketahanan Suhu</label>
                        <textarea required type="textarea" name="ketahanan_suhu" id="ketahanan_suhu" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->ketahanan_suhu}}
                        </textarea>
                    </div>
                </div>
                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="rasa" class="block text-sm font-medium text-green-4 ">Rasa</label>
                        <textarea required type="textarea" name="rasa" id="rasa" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->rasa}}
                        </textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="kandungan" class="block text-sm font-medium text-green-4 ">Kandungan</label>
                        <textarea required type="textarea" name="kandungan" id="kandungan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->kandungan}}
                        </textarea>
                    </div>
                </div>
                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="manfaat" class="block text-sm font-medium text-green-4 ">Manfaat</label>
                        <textarea required type="textarea" name="manfaat" id="manfaat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->manfaat}}
                        </textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="contoh_sajian" class="block text-sm font-medium text-green-4 ">Contoh Sajian</label>
                        <textarea required type="textarea" name="contoh_sajian" id="contoh_sajian" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->contoh_sajian}}
                        </textarea>
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="shoppe" class="block text-sm font-medium text-green-4 ">Link Shoppe</label>
                        <textarea required type="textarea" name="shoppe" id="shoppe" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->shoppe}}
                        </textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="tokped" class="block text-sm font-medium text-green-4 ">Link Tokopedia</label>
                        <textarea required type="textarea" name="tokped" id="tokped" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">{{$product->tokped}}
                        </textarea>
                    </div>
                </div>


                <div class="flex lg:flex-row flex-col gap-4">
                    <div class="mb-4">
                        <label for="image_1" class="block text-sm font-medium text-green-4">Old Image 1</label>

                        @if($product->image_1)
                        <img src="{{ asset('storage/' . $product->image_1) }}" alt="Uploaded Image" class="w-full max-w-xs mt-1">
                        @endif

                        <!-- Element untuk menampilkan nama file -->
                        <div id="file-name" class="text-sm text-gray-600 mt-1">{{ $product->image_1 ? basename($product->image_1) : 'No file chosen' }}</div>

                        <input type="file" name="image_1" id="image_1" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="image_1" class="block text-sm font-medium text-green-4">Old Image 2</label>

                        @if($product->image_2)
                        <img src="{{ asset('storage/' . $product->image_2) }}" alt="Uploaded Image" class="w-full max-w-xs mt-1">
                        @endif

                        <!-- Element untuk menampilkan nama file -->
                        <div id="file-name" class="text-sm text-gray-600 mt-1">{{ $product->image_2 ? basename($product->image_2) : 'No file chosen' }}</div>

                        <input type="file" name="image_2" id="image_2" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                    </div>
                </div>


                <button type="submit" class="btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Update Product</button>
            </form>
        </div>
    </div>
</x-app-layout>
