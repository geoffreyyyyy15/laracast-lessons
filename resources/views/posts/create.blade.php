<x-layout>
    <x-panel class="max-w-sm mx-auto">
    <section class="px-6 py-8">
           <form action="/admin/posts" method="POST">
            @csrf
            <div class="mb-6">
                <label for="title" class="block  mb-2 uppercase font-bold text-xs text-white">
                    Title
                </label>
                <input type="text"  name="title" id="title" value="{{ old('title') }}" class="text-black border border-gray-400 p-2 w-full" required>
            </div>
            @error('title')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
            <div class="mb-6">
                <label for="slug" class="block  mb-2 uppercase font-bold text-xs text-white">
                    Slug
                </label>
                <input type="text" name="slug" id="slug" value="{{ old('slug') }}" class="text-black border border-gray-400 p-2 w-full" required>
            </div>
            @error('slug')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="excerpt" class="block mb-2 uppercase font-bold text-xs text-white">
                    Excerpt
                </label>
                <textarea class="text-black border border-gray-400 p-2 w-full" name="excerpt"  id="excerpt" cols="30" rows="10">{{ old('excerpt') }}</textarea>
            </div>
            @error('excerpt')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror

            <div class="mb-6">
                <label for="Body" class="block mb-2 uppercase font-bold text-xs text-white">
                    Body
                </label>
                <textarea class="text-black border border-gray-400 p-2 w-full" name="body" id="Body" cols="30" rows="10">{{ old('body') }}</textarea>
            </div>
            @error('body')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
            <div class="mb-6">
                <label for="category" class="block mb-2 uppercase font-bold text-xs text-white">
                    Category
                </label>
                @php
                    $category = \App\Models\Category::all();
                @endphp
              <select name="category_id" id="category_id" class="bg-gray-800">
                @foreach ($category as $categories)
                <option
                 value="{{$categories->id}}"
                  {{ old('category_id') === $categories->id ?
                 'selected' : ''}} >{{ucwords($categories->name) }}</option>
                @endforeach
              </select>
            </div>
            @error('category_id')
                <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
            @enderror
            <x-submit-button>Publish</x-submit-button>
        </form>
    </x-panel>
    </section>
</x-layout>
