<nav class="flex items-center justify-between px-6 py-3 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a wire:navigate href="{{ route('index') }}">
            <x-application-mark />
        </a>
        <div class="ml-10 top-menu">
            <ul class="flex space-x-5">
                <x-nav-link href="{{ route('index') }}" :active="request()->routeIs('index')">
                    {{ __('Index') }}
                </x-nav-link>
                <x-nav-link href="{{ route('blog.index') }}" :active="request()->routeIs('blog.index')">
                    {{ __('Blog') }}
                </x-nav-link>
            </ul>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @auth
            @include('layouts.partials.header-right-auth')
        @else
            @include('layouts.partials.header-right-guest')
        @endauth
    </div>
</nav>
