<x-app-layout>
    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <div class="bg-white shadow sm:rounded-lg p-6">
            <h1 class="text-3xl font-bold mb-6 text-green-3 font-mono">Create Article</h1>

            @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-4 mb-6 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('dashboard.store') }}" method="POST" enctype="multipart/form-data" class="font-serif">
                @csrf

                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-green-4 ">Title</label>
                    <input required type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm" value="{{ old('title') }}">
                </div>

                <div class="mb-4 w-full h-full ">
                    <label for="content" class="block text-sm font-medium text-green-4">Content</label>
                    <textarea name="content" id="editor" class="mt-1 block w-full h-96 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm "></textarea>
                </div>


                <div class="mb-4 w-full">
                    <label for="image" class="block text-sm font-medium text-green-4">Image</label>
                    <input required type="file" name="image" id="image" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                </div>

                <button type="submit" class="btn bg-green-2 hover:bg-green-3 text-white text-lg font-medium">Create Article</button>
            </form>
        </div>
    </div>
</x-app-layout>
