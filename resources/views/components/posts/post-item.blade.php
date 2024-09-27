@props(['post'])
<article {{ $attributes->merge(['class' => '[&:not(:last-child)]:border-b border-gray-100 pb-10']) }}>
    <div class="grid grid-cols-3 gap-3 mt-5 md:items-start md:grid-cols-12 article-body">
        <div class="flex items-center col-span-12 mx-auto md:col-span-4 article-thumbnail">
            <a wire:navigate href="{{ route('blog.show', $post->slug) }}">
                <img class="w-full mx-auto mw-100 rounded-xl" src="{{ $post->getImage() }}" alt="thumbnail">
            </a>
        </div>
        <div class="col-span-12 md:col-span-8">
            <div class="flex items-center justify-between py-1 text-sm article-meta">
                <span class="flex items-center">
                    <img class="mr-3 rounded-full w-7 h-7" src="{{ $post->author->profile_photo_url }}" alt="avatar">
                    <p class="mr-1 text-xs">{{ $post->author->name }}</p>
                </span>
                <p class="text-xs text-gray-500">{{ $post->created_at->diffForHumans() }}</p>
            </div>
            <h2 class="text-xl font-bold text-gray-900">
                <a wire:navigate href="{{ route('blog.show', $post->slug) }}">
                    {{ $post->title }}
                </a>
            </h2>

            <p class="mt-2 text-base font-light text-gray-700">
                {{ $post->getExcerpt() }}
            </p>
            <div class="flex items-center justify-between mt-6 article-actions-bar">
                <div class="flex items-center space-x-4">
                    <span class="text-sm text-gray-500">{{ $post->getReadingTime() }} min read</span>
                </div>
                <div>
                    <livewire:like-button :key="$post->id" :post="$post" />
                </div>
            </div>
        </div>
    </div>
</article>
