<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-6 text-green-3 font-mono">Create Product</h1>

            @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('dashboard_products.store') }}" method="POST" enctype="multipart/form-data" class="font-serif">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-green-4">Name</label>
                    <input required type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">
                </div>

                <div class="mb-4">
                    <label for="category" class="block text-sm font-medium text-green-4">Category</label>
                    <select required name="category" id="category" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm">
                        <option value="Microgreen" selected>Microgreen</option>
                        <option value="Hidroponik">Hidroponik</option>
                        <option value="Salad">Salad</option>
                    </select>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="saran_penyajian" class="block text-sm font-medium text-green-4 ">Saran Penyajian</label>
                        <textarea required type="textarea" name="saran_penyajian" id="saran_penyajian" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="saran_penyimpanan" class="block text-sm font-medium text-green-4 ">Saran Penyimpanan</label>
                        <textarea required type="textarea" name="saran_penyimpanan" id="saran_penyimpanan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="ketahanan_dingin" class="block text-sm font-medium text-green-4 ">Ketahanan Dingin</label>
                        <textarea required type="textarea" name="ketahanan_dingin" id="ketahanan_dingin" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="ketahanan_suhu" class="block text-sm font-medium text-green-4 ">Ketahanan Suhu</label>
                        <textarea required type="textarea" name="ketahanan_suhu" id="ketahanan_suhu" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                </div>
                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="rasa" class="block text-sm font-medium text-green-4 ">Rasa</label>
                        <textarea required type="textarea" name="rasa" id="rasa" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="kandungan" class="block text-sm font-medium text-green-4 ">Kandungan</label>
                        <textarea required type="textarea" name="kandungan" id="kandungan" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                </div>
                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="manfaat" class="block text-sm font-medium text-green-4 ">Manfaat</label>
                        <textarea required type="textarea" name="manfaat" id="manfaat" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="contoh_sajian" class="block text-sm font-medium text-green-4 ">Contoh Sajian</label>
                        <textarea required type="textarea" name="contoh_sajian" id="contoh_sajian" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col gap-4 justify-between">
                    <div class="mb-4 w-full">
                        <label for="shoppe" class="block text-sm font-medium text-green-4 ">Link Shoppe</label>
                        <textarea required type="textarea" name="shoppe" id="shoppe" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                    <div class="mb-4 w-full">
                        <label for="tokped" class="block text-sm font-medium text-green-4 ">Link Tokopedia</label>
                        <textarea required type="textarea" name="tokped" id="tokped" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"></textarea>
                    </div>
                </div>

                <div class="flex lg:flex-row flex-col gap-4">
                    <div class="mb-4">
                        <label for="image_1" class="block text-sm font-medium text-green-4">Image 1</label>
                        <input required type="file" name="image_1" id="image_1" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="image_2" class="block text-sm font-medium text-green-4">Image 2</label>
                        <input required type="file" name="image_2" id="image_2" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                    </div>
                </div>

                <button type="submit" class="btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Create Product</button>
            </form>
        </div>
    </div>
</x-app-layout>
