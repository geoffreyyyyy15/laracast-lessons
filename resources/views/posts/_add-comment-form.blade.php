@auth
<x-panel>
  <form action="/posts/{{$post->slug}}/comments" method="POST">
      @csrf

      <header class="flex items-center">
          <img src="https://i.pravatar.cc/60?u={{auth()->id()}}" width="40" height="40" class="rounded-full"  alt="">
          <h2 class="ml-4">Want to participate?</h2>
      </header>
          <div class="mt-6">
          <textarea name="body" placeholder="Write something...."  class="w-full text-black text-sm focus:outline-none focus:ring rounded-xl"  cols="30" rows="10"></textarea>
          @error('body')
              <p class="text-xs text-red-500">{{ $message }}</p>
          @enderror
          </div>
          <x-submit-button>
            Post
          </x-submit-button>
  </form>

</x-panel>
@else
@guest
<p>
  <a class="bg-gray-800 text-sm rounded-xl text-white px-2 font-semibold py-2" href="/login">Login to participate</a> or 
  <a class="bg-gray-800 text-sm rounded-xl text-white px-2 font-semibold py-2" href="/register">Register</a>
  
</p>
@endguest
@endauth