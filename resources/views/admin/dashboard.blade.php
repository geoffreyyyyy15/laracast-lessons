
<x-layout>
    @include('posts.__header')
    <x-setting heading="Dashboard" >


    <main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
        @if ($posts->count())
            <x-post-grid :posts="$posts"/>
        @else
            <p class="text-center">No Post Detected. Please Check Later</p>
        @endif
    
        {{ $posts->links() }}
    </main>
    </x-setting>
            </x-layout >
    