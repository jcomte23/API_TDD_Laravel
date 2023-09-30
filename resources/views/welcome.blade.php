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

        <p class="max-w-3xl mx-auto mt-6 text-lg text-center text-gray-700 dark:text-white md:text-xl">
            {{ __('WelcomeText') }}
        </p>

        <section class="container px-6 py-10 mx-auto">
            <div class="grid grid-cols-1 gap-8 mt-8 xl:mt-12 xl:gap-12 md:grid-cols-2 xl:grid-cols-3">
                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-fire text-4xl"></i>
                    </span>
                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
                        {{ __('Elegant Dark Mode') }}</h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardElegantDarkMode') }}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-puzzle text-4xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">{{ __('Easy to use') }}
                    </h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardEasyToUse') }}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-stars text-4xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
                        {{ __('Simple and clean designs') }}
                    </h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardSimpleAndCleanDesigns') }}
                    </p>
                </div>

                <div class="p-8 space-y-3 border-2 border-blue-400 dark:border-blue-300 rounded-xl">
                    <span class="inline-block text-blue-500 dark:text-blue-400">
                        <i class="bi bi-phone text-3xl"></i>
                    </span>

                    <h1 class="text-xl font-semibold text-gray-700 capitalize dark:text-white">
                        {{ __('Fully Responsive Components') }}
                    </h1>

                    <p class="text-gray-500 dark:text-gray-300">
                        {{ __('TextCardFullyResponsiveComponents') }}
                    </p>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap -m-4">
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://th.bing.com/th/id/OIP.ekWUiBouFunNqguGwNh5uwHaEk?pid=ImgDet&rs=1"
                                alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3 dark:text-white">{{ __('Products') }}
                                </h1>
                                <p class="leading-relaxed mb-3">Explora todos los endpoints del modulo de productos</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="#"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">View Docs
                                        <i class="bi bi-arrow-right text-2xl ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://www.nobbot.com/wp-content/uploads/2017/04/etiqueta-categoria-920x515.jpg"
                                alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3 dark:text-white">{{ __('Categories') }}
                                </h1>
                                <p class="leading-relaxed mb-3">Explora todos los endpoints del modulo de productos</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="#"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">View Docs
                                        <i class="bi bi-arrow-right text-2xl ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="p-4 md:w-1/3">
                        <div class="h-full border-2 border-gray-200 border-opacity-60 rounded-lg overflow-hidden">
                            <img class="lg:h-48 md:h-36 w-full object-cover object-center"
                                src="https://www.contpaqi.com/Thu%20Mar%2016%202023-3.png"
                                alt="blog">
                            <div class="p-6">
                                <h1 class="title-font text-lg font-medium text-gray-900 mb-3 dark:text-white">{{ __('Users') }}
                                </h1>
                                <p class="leading-relaxed mb-3">Explora todos los endpoints del modulo de productos</p>
                                <div class="flex items-center flex-wrap ">
                                    <a href="#"
                                        class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">View Docs
                                        <i class="bi bi-arrow-right text-2xl ml-2"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-guest-layout>
