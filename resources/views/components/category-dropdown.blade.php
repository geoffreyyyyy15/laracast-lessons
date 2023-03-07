<x-dropdown>
    <x-slot name="trigger">
        <button  class="py-2 pr-9 pl-3 w-full lg:w-32 text-left lg:inline-flex
        text-sm font-semibold">  {{ isset($currentCategory) ?
        ucwords($currentCategory->name) : 'Categories' }}
    </button>


    </x-slot>
    <x-dropdown-item href="/?{{ http_build_query(request()->except('category', 'page')) }}">
        All
</x-dropdown-item>
            @foreach ($categories as $category)
<x-dropdown-item href="/?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}">{{ ucwords($category->name)  }}
</x-dropdown-item >

@endforeach
</x-dropdown>
