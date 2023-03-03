
<x-layout>
@include('posts.__header')

<main class="max-w-6xl mx-auto mt-6 lg:mt-20 space-y-6">
    @if ($posts->count())
        <x-post-grid :posts="$posts"/>
    @else
        <p class="text-center">No Post Detected. Please Check Later</p>
    @endif
{{--
    <div class="lg:grid lg:grid-cols-3">

        <x-post-card />
        <x-post-card />
        <x-post-card />

    </div> --}}
</main>
{{--
            @foreach ($posts as $post)
            <a href="/posts/{{$post->slug}}">  <h1 class="mx-5 m-3">{{ $post->title }}</h1></a>
            <div class="border-b-2 border-sky-500 mx-5">
         By <a href="/author/{{$post->author->username}}">{{ $post->author->name }}</a> in <a href="/categories/{{$post->category->slug}}" class="pt-5 mx-5 b-5">{{ $post->category->name }}</a>
            <p class="pt-6 mx-5 b-5">{!! $post->body !!}</p>
            </div>
            @endforeach --}}


        </x-layout >
