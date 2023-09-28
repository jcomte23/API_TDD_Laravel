<x-guest-layout>
    <div class="flex flex-col">
        <h1 class="text-5xl pt-6 font-extrabold text-center lg:text-7xl 2xl:text-8xl">
            <span
                class="text-transparent bg-gradient-to-br bg-clip-text from-teal-500 via-indigo-500 to-sky-500 dark:from-teal-200 dark:via-indigo-300 dark:to-sky-500">
                Api
            </span>

            <span
                class="text-transparent bg-gradient-to-tr bg-clip-text from-blue-500 via-pink-500 to-red-500 dark:from-sky-300 dark:via-pink-300 dark:to-red-500">
                Rest
            </span>
        </h1>

        <div class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-fire text-4xl"></i>
                    </span>
                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ __('Elegant Dark Mode')}}</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardElegantDarkMode')}}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-puzzle text-4xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ __('Easy to use')}}</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardEasyToUse')}}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-stars text-4xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ __('Simple and clean designs')}}
                    </h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardSimpleAndCleanDesigns')}}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-phone text-3xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
                        {{ __('Fully Responsive Components')}}
                    </h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardFullyResponsiveComponents')}}
                    </p>
                </div>
            </div>
        </div>

        <div class="container px-6 py-8 mx-auto">
            <h2 class="text-2xl font-semibold text-center text-gray-800 capitalize lg:text-3xl dark:text-white">Version
                #1</h2>

            <div class="grid gap-8 mt-8 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4">
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                        src="https://images.unsplash.com/photo-1493863641943-9b68992a8d07?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=739&q=80"
                        alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Ahmed Omer</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">CEO</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                        src="https://images.unsplash.com/photo-1516756587022-7891ad56a8cd?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                        alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Jane Doe</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">Co-founder</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-48 mx-auto rounded-lg"
                        src="https://images.unsplash.com/photo-1492562080023-ab3db95bfbce?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=731&q=80"
                        alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-gray-700 dark:text-gray-200">Steve Ben</h3>
                        <span class="mt-1 font-medium text-gray-600 dark:text-gray-300">UI/UX</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
