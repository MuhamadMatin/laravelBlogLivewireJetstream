<footer class="flex flex-wrap items-center justify-center py-4 space-x-4 text-sm border-t border-gray-100">
    <a class="inline-flex items-center pt-1 text-sm font-medium leading-5 text-gray-500 transition duration-150 ease-in-out border-b-2 border-transparent hover:text-gray-700 hover:border-gray-300 focus:outline-none "
        href="https://muhamadmatin.netlify.app/" target="_blank">
        {{ __('About Us') }}
    </a>
    <x-nav-link>
        {{ __('Help') }}
    </x-nav-link>
    <x-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-nav-link>
    <x-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('Register') }}
    </x-nav-link>
    <x-nav-link href="{{ route('blog.index') }}">
        {{ __('Explore') }}
    </x-nav-link>
</footer>
