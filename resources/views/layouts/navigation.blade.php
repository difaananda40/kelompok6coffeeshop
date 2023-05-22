<nav>
    <div class="space-x-8 flex items-center justify-center pt-6">
        <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
            {{ __('Home') }}
        </x-nav-link>

        <x-nav-link :href="route('menu')" :active="request()->routeIs('menu')">
            {{ __('Menu') }}
        </x-nav-link>

        <!-- Logo -->
        <div class="shrink-0 flex items-center">
            <a href="{{ route('home') }}">
                <img src="{{ asset('images/logo.png') }}" alt="logo" class="w-40">
            </a>
        </div>

        <x-nav-link :href="route('home')" :active="request()->routeIs('home2')">
            {{ __('About') }}
        </x-nav-link>

        @auth
            <!-- Settings Dropdown -->
            <div class="flex sm:items-center sm:ml-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-1 pt-1 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-300 hover:text-gray-500 focus:outline-none transition ease-in-out duration-150">
                            <div>Profile</div>

                            <div class="ml-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ Auth::user()->name }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        @else
            <x-nav-link :href="route('login')" :active="request()->routeIs('login')">
                {{ __('Login') }}
            </x-nav-link>
        @endauth
    </div>
</nav>
