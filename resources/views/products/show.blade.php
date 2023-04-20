<x-app-layout>
    <div class="bg-white dark:bg-gray-900  h-full">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <!-- Replace with your content -->
            <div class="pt-12 lg:grid lg:grid-cols-4 lg:gap-x-8 ">
                <!-- Product grid -->
                <div class="lg:col-span-2">
                    <!-- Replace with your content -->
                    <div class="grid gap-4">
                        <div>
                            <div id="default-carousel" class="relative w-full" data-carousel="slide">
                                <!-- Carousel wrapper -->
                                <div class="relative h-56 overflow-hidden rounded-lg md:h-96">
                                    <!-- Item 1 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 2 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 3 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 4 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                    <!-- Item 5 -->
                                    <div class="hidden duration-700 ease-in-out" data-carousel-item>
                                        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                            class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2"
                                            alt="...">
                                    </div>
                                </div>
                                <!-- Slider indicators -->
                                <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="true"
                                        aria-label="Slide 1" data-carousel-slide-to="0"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 2" data-carousel-slide-to="1"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 3" data-carousel-slide-to="2"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 4" data-carousel-slide-to="3"></button>
                                    <button type="button" class="w-3 h-3 rounded-full" aria-current="false"
                                        aria-label="Slide 5" data-carousel-slide-to="4"></button>
                                </div>
                                <!-- Slider controls -->
                                <button type="button"
                                    class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-prev>
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15 19l-7-7 7-7"></path>
                                        </svg>
                                        <span class="sr-only">Previous</span>
                                    </span>
                                </button>
                                <button type="button"
                                    class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
                                    data-carousel-next>
                                    <span
                                        class="inline-flex items-center justify-center w-8 h-8 rounded-full sm:w-10 sm:h-10 bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                                        <svg aria-hidden="true"
                                            class="w-5 h-5 text-white sm:w-6 sm:h-6 dark:text-gray-800" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M9 5l7 7-7 7">
                                            </path>
                                        </svg>
                                        <span class="sr-only">Next</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                        <div class="grid grid-cols-5 gap-4">
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
                                    alt="">
                            </div>
                            <div>
                                <img class="h-auto max-w-full rounded-lg"
                                    src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
                                    alt="">
                            </div>
                        </div>
                    </div>
                    <!-- /End replace -->
                </div>

                <!-- Product grid -->
                <div class="lg:col-span-2 ">
                    <!-- Replace with your content -->
                    <!-- Product info -->
                    <div class="px-4 sm:mt-16 sm:px-0 lg:mt-0">
                        <div class="flex">
                            <button type="button"
                                class="mr-4 flex items-center justify-center rounded-md py-3 px-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500 dark:text-white dark:hover:bg-gray-700">
                                <!-- Heroicon name: outline/heart -->
                                <svg class="h-6 w-6 flex-shrink-0" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                                </svg>
                                <span class="sr-only">Add to favorites</span>
                            </button>
                            <h1 class="text-3xl font-bold tracking-tight text-gray-900 dark:text-white">
                                {{ $product->name }}
                            </h1>
                        </div>



                        <!-- Reviews -->
                        <div class="my-3">
                            <h3 class="sr-only">Reviews</h3>
                            <div class="flex items-center">
                                <!--
                                    Heroicon name: mini/star
                    
                                    Active: "text-yellow-400", Default: "text-gray-300"
                                -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <!-- Heroicon name: mini/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <!-- Heroicon name: mini/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <!-- Heroicon name: mini/star -->
                                <svg class="text-yellow-400 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <!-- Heroicon name: mini/star -->
                                <svg class="text-gray-300 h-5 w-5 flex-shrink-0" xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd"
                                        d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401z"
                                        clip-rule="evenodd" />
                                </svg>

                                <a href="#"
                                    class="ml-4 text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-600">
                                    Ver todas las reseñas
                                </a>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>

                        </div>

                        <div class="my-3">
                            <h2 class="sr-only">Product information</h2>
                            <p class="text-3xl tracking-tight text-gray-900 dark:text-white">$ {{ $product->price }}
                            </p>
                        </div>

                        <!-- Product details -->
                        <div class="my-3">
                            <h2 class="text-sm font-medium text-gray-900 dark:text-white">Descripción</h2>

                            <div class="prose prose-sm mt-4 text-gray-500 dark:text-gray-400">
                                <p>{{ $product->description }}</p>
                            </div>
                            <div class="prose prose-sm text-gray-900 dark:text-white">
                                <p class="">Marca:
                                    <a href="#"
                                        class="ml-4 text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-600">
                                        {{ $product->brand->name }}
                                    </a>
                                </p>
                            </div>
                        </div>

                        @if ($product->subcategory->size)
                            @livewire('add-cart-item-size', ['product' => $product])
                        @elseif ($product->subcategory->color)
                            @livewire('add-cart-item-color', ['product' => $product])
                        @else
                            @livewire('add-cart-item', ['product' => $product])
                        @endif
                    </div>

                    <!-- Policies -->
                    <section aria-labelledby="policies-heading" class="mt-10 pt-10 border-t border-gray-200">
                        <h2 id="policies-heading" class="sr-only">Our Policies</h2>

                        <dl class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-1 xl:grid-cols-2">
                            <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                <dt>
                                    <!-- Heroicon name: outline/globe-americas -->
                                    <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M6.115 5.19l.319 1.913A6 6 0 008.11 10.36L9.75 12l-.387.775c-.217.433-.132.956.21 1.298l1.348 1.348c.21.21.329.497.329.795v1.089c0 .426.24.815.622 1.006l.153.076c.433.217.956.132 1.298-.21l.723-.723a8.7 8.7 0 002.288-4.042 1.087 1.087 0 00-.358-1.099l-1.33-1.108c-.251-.21-.582-.299-.905-.245l-1.17.195a1.125 1.125 0 01-.98-.314l-.295-.295a1.125 1.125 0 010-1.591l.13-.132a1.125 1.125 0 011.3-.21l.603.302a.809.809 0 001.086-1.086L14.25 7.5l1.256-.837a4.5 4.5 0 001.528-1.732l.146-.292M6.115 5.19A9 9 0 1017.18 4.64M6.115 5.19A8.965 8.965 0 0112 3c1.929 0 3.716.607 5.18 1.64" />
                                    </svg>
                                    <span class="mt-4 text-sm font-medium text-gray-900">Se realizan envios en todo
                                        México</span>
                                </dt>
                                <dd class="mt-1 text-sm text-gray-500">Recibelo aprox. el
                                    {{ Date::now()->addDay(7)->locale('es')->format('l j F') }}</dd>
                            </div>

                            <div class="rounded-lg border border-gray-200 bg-gray-50 p-6 text-center">
                                <dt>
                                    <!-- Heroicon name: outline/currency-dollar -->
                                    <svg class="mx-auto h-6 w-6 flex-shrink-0 text-gray-400"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M12 6v12m-3-2.818l.879.659c1.171.879 3.07.879 4.242 0 1.172-.879 1.172-2.303 0-3.182C13.536 12.219 12.768 12 12 12c-.725 0-1.45-.22-2.003-.659-1.106-.879-1.106-2.303 0-3.182s2.9-.879 4.006 0l.415.33M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span class="mt-4 text-sm font-medium text-gray-900">Loyalty rewards</span>
                                </dt>
                                <dd class="mt-1 text-sm text-gray-500">Don&#039;t look at other tees</dd>
                            </div>
                        </dl>
                    </section>
                    <!-- /End replace -->
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
