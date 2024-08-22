@props(['post'])
<div class="">
    <a wire:navigate href="{{ route('blog.show', $post->slug) }}">
        <div>
            <img class="w-full rounded-xl" src="{{ $post->getImage() }}">
        </div>
    </a>
    <div class="mt-3">
        <div class="flex items-center text-sm article-meta">
            <img class="mr-3 rounded-full w-7 h-7" src="{{ $post->author->profile_photo_url }}" alt="avatar">
            <span class="mr-1 text-xs">{{ $post->author->name }}</span>
            <span class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
        </div>
        <a wire:navigate href="{{ route('blog.show', $post->slug) }}"
            class="text-xl font-bold text-gray-900">{{ $post->title }}</a>
    </div>
</div>
