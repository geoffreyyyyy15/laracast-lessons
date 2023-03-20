<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10 rounded-xl bg-gray-900 border-gray-500 ">
            <h1 class="font-bold text-xl text-white text-center pt-5">Login</h1>


            <form action="/sessions" method="POST" class="mt-10 p-5">
                @csrf
               <x-form.input name="email" type="email" />
               <x-form.input name="password" type="password" />

                <div class="mb-6 mt-2 flex justify-center">
                    <button type="submit" class="border-2 text-white rounded-xl border-gray-400 p-2 w-32">Submit</button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
