@props(['comment'])
<x-panel>
<article class="flex bg-gray-800 space-x-2">
    <div class="flex-shrink-0">
        <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" class="rounded-xl"  alt="">
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">{{ $comment->author->username }}</h3>
            <div class="text-xs">
            <time><p>Posted</p>{{ $comment->created_at->format("F j, Y, g:i a")}}</time>
        </div>
        </header>
        <p>{{ $comment->body }}</p>
    </div>
</article>
</x-panel>
