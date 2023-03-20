<x-layout>
    <x-setting heading="Publish New Post">
        <form action="/admin/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>
            <x-form.input name="slug"/>
            <x-form.input name="thumbnail" type="file"/>
            <x-form.textarea name="excerpt"/>
            <x-form.textarea name="body"/>
           
            <x-form.field>
                <x-form.label name="category" />
                  <select name="category_id" id="category_id" class="bg-gray-800">
                    @foreach (\App\Models\Category::all() as $categories)
                    <option
                     value="{{$categories->id}}"
                      {{ old('category_id') === $categories->id ?
                     'selected' : ''}} >{{ucwords($categories->name) }}</option>
                    @endforeach
                  </select>
                </div>
                <x-form.error name="category_id" />
                <x-submit-button>Publish</x-submit-button>
               
            </x-form.field>
           
           
        </form>
        </x-setting>
    
</x-layout>
