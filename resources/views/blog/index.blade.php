<x-app-layout>
    <main class="container flex flex-grow px-5 mx-auto">
        <div class="flex flex-col w-full md:gap-10 md:flex-row">
            <div class="col-span-4 md:col-span-3">
                <livewire:post-list />
            </div>
            <div id="side-bar"
                class="top-0 order-first col-span-4 px-3 py-6 pt-10 space-y-10 border-t border-gray-100 md:order-last md:h-screen md:sticky border-t-gray-100 md:border-t-none md:col-span-1 md:px-6 md:border-l">
                <livewire:search-box />

                {{-- @include('layouts.partials.categories') --}}
            </div>
        </div>
    </main>
</x-app-layout>
