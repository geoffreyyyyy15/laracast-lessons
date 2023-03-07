<x-layout>
    <section class="px-6 py-8">
         <main class="max-w-lg mx-auto mt-10 rounded-xl bg-gray-500 border-gray-500 ">
            <h1 class="font-bold text-xl text-center pt-5">Register!</h1>
            <form action="/register" method="POST" class="mt-10 p-5">
                @csrf
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-300" for="name">
                        Name
                    </label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        id="name"
                        name="name"
                        value="{{ old('name') }}"
                        required
                    >

                    @error('name')
                        <p class="p-5 text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-300" for="username">
                        Username
                    </label>
                    <input type="text"
                        class="border border-gray-400 p-2 w-full"
                        id="username"
                        name="username"
                        value="{{old('username')}}"
                        required
                    >

                </div>
                @error('username')
                <p class="p-5 text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-300" for="email">
                        Email
                    </label>
                    <input type="email"
                        class="border border-gray-400 p-2 w-full"
                        id="email"
                        name="email"
                        value="{{ old('email') }}"
                        required
                    >

                </div>
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-300" for="password">
                        Password
                    </label>
                    <input type="password"
                        class="border border-gray-400 p-2 w-full"
                        id="password"
                        name="password"
                        value="{{old('password')}}"
                        required
                    >

                </div>
                @error('password')
                    <p class="text-red-500  pb-2 text-xs">{{ $message }}</p>
                @enderror

                <div class="mb-6 flex justify-center">
                    <button type="submit" class="border border-gray-400 p-2 w-32">Submit</button>
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
