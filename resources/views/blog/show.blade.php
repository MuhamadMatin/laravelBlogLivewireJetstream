<x-app-layout>
    <main class="container flex flex-grow px-5 mx-auto">
        <article class="w-full col-span-4 py-5 mx-auto mt-10 md:col-span-3" style="max-width:700px">
            <img class="w-full my-2 rounded-lg" src="{{ $post->getImage() }}" alt="thumbnail">
            <h1 class="text-4xl font-bold text-left text-gray-800">
                {{ $post->title }}
            </h1>
            <div class="flex items-center justify-between mt-2">
                <div class="flex items-center py-5 text-base">
                    <img class="w-10 h-10 mr-3 rounded-full" src="{{ $post->author->profile_photo_url }}" alt="avatar">
                    <span class="mr-1">{{ $post->author->name }}</span>
                    <span class="text-sm text-gray-500">| {{ $post->getReadingTime() }} min read</span>
                </div>
                <div class="flex items-center">
                    <span class="mr-2 text-gray-500">{{ $post->created_at->diffForHumans() }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.3"
                        stroke="currentColor" class="w-5 h-5 text-gray-500">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
            </div>

            <div
                class="flex items-center justify-between px-2 py-4 my-6 text-sm border-t border-b border-gray-100 article-actions-bar">
                <div class="flex items-center">
                    <livewire:like-button :key="$post->id" :post="$post" />
                </div>
                <div>
                    <div class="flex items-center">
                    </div>
                </div>
            </div>

            <div class="py-3 text-lg prose text-justify text-gray-800 article-content">
                {!! $post->body !!}
            </div>

            {{-- <div class="flex items-center mt-10 space-x-4">
                <a href="#" class="px-3 py-1 text-base text-white bg-blue-400 rounded-xl">
                    Tailwind</a>
                <a href="#" class="px-3 py-1 text-base text-white bg-red-400 rounded-xl">
                    Laravel</a>
            </div> --}}
        </article>
    </main>
</x-app-layout>
