<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 rounded-xl bg-gray-900 border-gray-500 ">
            <h1 class="font-bold text-xl text-white text-center pt-5">Login</h1>


            <form action="/sessions" method="POST" class="mt-10 p-5">
                @csrf
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
                @error('email')
                <p class="text-red-500  pb-2 text-xs">{{ $message }}</p>
            @enderror
                <div class="mb-6">
                    <label class="block mb-2 uppercase font-bold text-xs text-gray-300" for="password">
                        Password
                    </label>
                    <input type="password"
                        class="border border-gray-400 p-2 w-full"
                        id="password"
                        name="password"
                        required
                    >

                </div>
                @error('password')
                    <p class="text-red-500  pb-2 text-xs">{{ $message }}</p>
                @enderror

                <div class="mb-6 flex justify-center">
                    <button type="submit" class="border-2 text-white rounded-xl border-gray-400 p-2 w-32">Submit</button>
                </div>





            </form>
        </main>
    </section>
</x-layout>
