<nav x-data="{ isOpen: false }" class="fixed top-0 w-full bg-white shadow dark:bg-gray-800">
    <div class="container px-6 py-4 mx-auto md:flex md:justify-between md:items-center">
        <div class="flex items-center justify-between">
            <a href="{{ route('home') }}">
                <img class="logo w-auto h-6 sm:h-7" alt="logo">
            </a>
            <a class="my-2 text-gray-700 transition-colors duration-300 transform dark:text-gray-200 hover:text-blue-500 dark:hover:text-blue-400 md:mx-4 md:my-0"
                href="{{ route('home') }}">{{ __('Home') }}</a>
            <!-- Mobile menu button -->
            <div class="flex lg:hidden md:hidden">
                <button x-cloak @click="isOpen = !isOpen" type="button"
                    class="text-gray-500 dark:text-gray-200 hover:text-gray-600 dark:hover:text-gray-400 focus:outline-none focus:text-gray-600 dark:focus:text-gray-400"
                    aria-label="toggle menu">
                    <i x-show="!isOpen" class="bi bi-list text-2xl"></i>
                    <i x-show="isOpen" class="bi bi-x-circle text-2xl"></i>
                </button>
            </div>
        </div>

        <!-- Mobile Menu open: "block", Menu closed: "hidden" -->
        <div x-cloak :class="[isOpen ? 'translate-x-0 opacity-100 ' : 'opacity-0 -translate-x-full']"
            class="absolute inset-x-0 z-20 w-full px-6 py-4 transition-all duration-300 ease-in-out bg-white dark:bg-gray-800 md:mt-0 md:p-0 md:top-0 md:relative md:bg-transparent md:w-auto md:opacity-100 md:translate-x-0 md:flex md:items-center">
            <div x-data="{ isOpen: true }" x-init="() => { isOpen = false }" class="relative inline-block mr-3">
                <!-- Dropdown toggle button -->
                <button @click="isOpen = !isOpen"
                    class="relative z-10 block p-2 text-gray-700 bg-white border border-transparent rounded-md dark:text-white focus:border-blue-500 focus:ring-opacity-40 dark:focus:ring-opacity-40 focus:ring-blue-300 dark:focus:ring-blue-400 focus:ring dark:bg-gray-800 focus:outline-none">
                    <i class="bi bi-globe"></i>
                </button>

                <!-- Dropdown menu -->
                <div x-show="isOpen" @click.away="isOpen = false" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-100"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="absolute right-0 z-20 w-48 py-2 mt-2 origin-top-right bg-white rounded-md shadow-xl dark:bg-gray-700">

                    <a href="{{ route('lang', 'es') }}"
                        class="flex items-center px-3 py-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <img src="img/flags/es.svg" alt="España" width="50">
                        <span class="mx-1">
                            {{ __('Spanish') }}
                        </span>
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                    <a href="{{ route('lang', 'en') }}"
                        class="flex items-center p-3 text-sm text-gray-600 capitalize transition-colors duration-300 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <img src="img/flags/us.svg" alt="EEUU" width="50">
                        <span class="mx-1">
                            {{ __('English') }}
                        </span>
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                </div>
            </div>

            @if (Route::has('login'))
                <div class="flex justify-center md:block">
                    @auth
                        <a href="{{ url('/dashboard') }}"
                            class="px-3 py-1 text-sm font-semibold transition-colors duration-300 transform border-2 border-black rounded-md dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black hover:bg-black hover:text-white">{{ __('Dashboard') }}</a>
                    @else
                        <a href="{{ route('login') }}"
                            class="px-3 py-1 text-sm font-semibold transition-colors duration-300 transform border-2 border-black rounded-md dark:text-white dark:border-white dark:hover:bg-white dark:hover:text-black hover:bg-black hover:text-white ">{{ __('Log in') }}</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}"
                                class="px-3 py-1 mx-2 text-sm font-semibold text-white transition-colors duration-300 transform bg-black rounded-md border-2 border-black hover:bg-white hover:text-black dark:border-white">{{ __('Register') }}</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</nav>
