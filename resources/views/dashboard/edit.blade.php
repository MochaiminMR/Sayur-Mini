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

            <form action="{{ route('dashboard.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="font-serif">
                @csrf
                @method('PATCH')
                <div class="mb-4">
                    <label for="title" class="block text-sm font-medium text-green-4 ">Title</label>
                    <input type="text" name="title" id="title" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm" value="{{$article->title}}">
                </div>

                <div class="mb-4 w-full h-full ">
                    <label for="content" class="block text-sm font-medium text-green-4">Content</label>
                    <textarea name="content" id="editor" class="mt-1 block w-full h-96 border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:outline-none focus:ring-green-3 focus:border-green-3 sm:text-sm"> {!! $article->content !!} </textarea>

                </div>


                <div class="mb-4 w-full">
                    <label for="image" class="block text-sm font-medium text-green-4">Old Image</label>

                    @if($article->image)
                    <img src="{{ asset('storage/' . $article->image) }}" alt="Uploaded Image" class="w-full max-w-xs mt-1">
                    @endif

                    <!-- Element untuk menampilkan nama file -->
                    <div id="file-name" class="text-sm text-gray-600 mt-1">{{ $article->image ? basename($article->image) : 'No file chosen' }}</div>

                    <input type="file" name="image" id="image" class="file-input file-input-bordered file-input-success w-full max-w-xs mt-1 block text-sm border border-green-3 rounded-md cursor-pointer focus:outline-none">
                </div>


                <button type="submit" class="inline-flex mt-8 items-center text-base px-4 py-2 bg-green-4 border border-transparent rounded-md font-semibold text-white tracking-widest hover:bg-green-3 focus:outline-none disabled:opacity-25 transition">
                    Create
                </button>
            </form>
        </div>
    </div>
</x-app-layout>
