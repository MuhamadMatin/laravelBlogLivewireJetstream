<div id="posts" class="px-3 py-6 lg:px-7">
    <div class="flex items-center justify-between border-b border-gray-100">
        <div class="text-gray-600">
            @if ($search)
                <button wire:click='reserSearch()'>X</button>
                Searcing {{ $search }}
            @endif
        </div>
        <div id="filter-selector" class="flex items-center space-x-4 font-light">
            <button wire:click="setSort('desc')"
                class="{{ $sort === 'desc' ? 'text-gray-900 focus:outline-none focus:border-teal-400 transition duration-150 ease-in-out border-b-2 border-gray-400' : 'text-gray-500' }}py-4 ">Newest</button>
            <button wire:click="setSort('asc')"
                class="{{ $sort === 'asc' ? 'text-gray-900 focus:outline-none focus:border-teal-400 transition duration-150 ease-in-out border-b-2 border-gray-400' : 'text-gray-500' }}py-4 ">Oldest</button>
        </div>
    </div>
    <div class="py-4">
        @forelse ($this->posts as $post)
            <x-posts.post-item :post="$post" wire:key="{{ $post->id }}" />
        @empty
            Empty Blog
        @endforelse
    </div>
    <div class="my-3">
        {{ $this->posts->onEachSide(1)->links() }}
    </div>
</div>
