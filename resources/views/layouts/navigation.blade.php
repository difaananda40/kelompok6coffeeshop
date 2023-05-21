<nav>
    <div class="space-x-8 flex items-center justify-center pt-6">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home2')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link :href="route('home')" :active="request()->routeIs('home2')">
            {{ __('Menu') }}
        </x-nav-link>

        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-40">
            </a>
        </div>

        <x-nav-link :href="route('home')" :active="request()->routeIs('home2')">
            {{ __('About Us') }}
        </x-nav-link>

        @auth
            <x-nav-link :href="route('home')" :active="request()->routeIs('home2')">
                {{ __('Profile') }}
            </x-nav-link>
        @else
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-nav-link>
        @endauth
    </div>
</nav>
