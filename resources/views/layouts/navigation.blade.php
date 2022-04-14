<nav x-data="{ open: false }" class="w-80 z-10 bg-white dark:bg-dark-black shadow">
    <!-- Primary Navigation Menu -->
    <div class="fixed mx-auto px-8 h-screen flex flex-col justify-between">
        <div class="flex flex-col justify-between">
            <!-- Logo -->
            <div class="shrink-0 flex flex-col items-center">
                <a class="flex py-4 items-center" href="{{ route('dashboard') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-primary-default dark:text-dark-primary-default"/>
                    <h1 class="pl-3 font-extrabold text-2xl text-black dark:text-white">Base Application</h1>
                </a>
            </div>

            <!-- Navigation Links -->
            <div class="pb-3 space-y-1">
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                    {{ __('Dashboard') }}
                </x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('home')">
                    {{ __('Other Link 1') }}
                </x-nav-link>
                <x-nav-link :href="route('dashboard')" :active="request()->routeIs('other')">
                    {{ __('Other Link 2') }}
                </x-nav-link>
            </div>

        </div>
        <!-- User Details -->
        <div class="pt-4 pb-4 border-t border-light-200 dark:border-dark-light-200">
            <div class="px-4">
                <div class="font-medium text-base text-light-800 dark:text-dark-light-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-light-500 dark:text-dark-light-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Logout -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-nav-link :href="route('logout')"
                                onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
