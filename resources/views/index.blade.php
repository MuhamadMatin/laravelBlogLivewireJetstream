<x-app-layout>
    @section('hero')
        <div class="w-full h-screen py-32 text-center">
            <h1 class="text-2xl font-bold text-center text-gray-700 md:text-3xl lg:text-5xl">
                Welcome to <span class="text-teal-500">&lt;Matin&gt;</span> <span class="text-gray-900">
                    Blog</span>
            </h1>
            <p class="mt-1 text-lg text-gray-500">Best Blog made with by Matin</p>
            <a wire:navigate
                class="inline-block px-3 py-2 mt-5 text-lg text-gray-800 transition duration-150 ease-in-out border-b-2 border-gray-300 hover:text-gray-700 hover:border-teal-300"
                href="http://127.0.0.1:8000/blog">Start
                Reading</a>
        </div>
    @endsection
    <main class="container flex flex-grow px-5 mx-auto">
        <div class="mx-auto mb-10">
            <div class="mb-16">
                <h2 class="mt-16 mb-5 text-3xl font-bold text-teal-500">Featured Posts</h2>
                <div class="w-full">
                    <div class="grid w-full grid-cols-3 gap-10">
                        @forelse ($featuredPosts as $featured)
                            <div class="col-span-3 md:col-span-1">
                                <x-posts.post-card :post="$featured" />
                            </div>
                        @empty
                            <div class="col-span-3 md:col-span-1">
                                Empty Featured Posts
                            </div>
                        @endforelse
                    </div>
                </div>
                <a wire:navigate class="block mt-10 text-lg font-semibold text-center text-teal-500"
                    href="http://127.0.0.1:8000/blog">More
                    Posts</a>
            </div>
            <hr>

            <h2 class="mt-16 mb-5 text-3xl font-bold text-teal-500">Latest Posts</h2>
            <div class="w-full mb-5">
                <div class="grid w-full grid-cols-3 gap-10">
                    @forelse ($lastestPosts as $lastest)
                        <div class="col-span-3 md:col-span-1">
                            <x-posts.post-card :post="$lastest" />
                        </div>
                    @empty
                        <div class="col-span-3 md:col-span-1">
                            Empty Lastest Posts
                        </div>
                    @endforelse
                </div>
            </div>
            <a wire:navigate class="block mt-10 text-lg font-semibold text-center text-teal-500"
                href="http://127.0.0.1:8000/blog">More
                Posts</a>
        </div>
    </main>
</x-app-layout>
