<x-layout>
    <section class="px-6 py-8">
         <main class="max-w-lg mx-auto mt-10 rounded-xl bg-gray-500 border-gray-500 ">
            <h1 class="font-bold text-xl text-center pt-5">Register!</h1>
            <form action="/register" method="POST" class="mt-10 p-5">
                @csrf
              <x-form.input name="name" />
              <x-form.input name="username" />
              <x-form.input name="email" type="email" />
              <x-form.input name="password" type="password" />
                <div class="mb-6 flex justify-center mt-2 text-white">
                    <button type="submit" class="border border-gray-400 p-2 w-32 rounded-xl">Submit</button>
                </div>

                @if ($errors->any())

                <ul>

                @foreach ($errors->all() as $error)
                <li class="text-xs text-red-500">{{ $error }}</li>
                @endforeach
                    
            </ul>

                @endif

            

            </form>
         </main>
    </section>
</x-layout>
