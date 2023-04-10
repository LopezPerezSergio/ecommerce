<x-app-layout>

    <div class="mt-16 xs:mb-4 bg-white dark:bg-gray-900"">
        {{-- fondo y degradacion --}}
        <div aria-hidden="true" class="relative">
            <img src="https://tailwindui.com/img/ecommerce-images/product-feature-02-full-width.jpg" alt=""
                class="h-96 w-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900"></div>
        </div>

        {{-- Titulo frases y categorias --}}
        <div class="relative mx-auto -mt-80 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h1 class="mb-4 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                        Nombre-Ecommerce
                    </span> Encuentra lo mejor con nosotros.
                </h1>

                <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Compra y cambia tu estilo
                </h2>
                <p class="mt-4 text-base text-gray-600 dark:text-gray-400">Cada temporada, cambiamos los estilos de
                    clase mundial para
                    crear una coleccion inspirada en el mundo natural.</p>
            </div>

            <div class="-mt-2 py-8 sm:py-24 lg:-mt-16 xl:mx-auto xl:max-w-7xl xl:px-8">
                <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-400">Nuestras categorías</h2>
                    <a href="#"
                        class="hidden text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-600 sm:block">
                        Explorar todas las categorías
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                {{-- Categorias --}}
                <div class="mt-10 space-y-12 lg:grid lg:grid-cols-5 lg:gap-x-8 lg:space-y-0">
                    <a href="#" class="group block">
                        <div aria-hidden="true"
                            class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-01-collection-03.jpg"
                                alt="Person placing task list card into walnut card holder next to felt carrying case on leather desk pad."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-4 mb-8 text-base font-semibold text-gray-900 dark:text-gray-400">Focus Collection
                        </h3>
                    </a>

                    @foreach ($categories as $category)
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-5 lg:aspect-h-6">
                                <img src="{{ Storage::url($category->image) }}" loading="lazy"
                                    alt="image-{{ $category->name }}."
                                    class="h-full w-full object-cover object-center lg:h-52 lg:w-52">
                            </div>
                            <h3 class="mt-4 mb-8 text-base font-semibold text-gray-900 dark:text-gray-400">
                                {{ $category->name }}</h3>
                        </a>
                    @endforeach
                </div>

                <div class="mt-6 px-4 sm:hidden">
                    <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Browse all categories
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

            </div>

        </div>

        {{-- Productos --}}
        <div class=" -mt-48 mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="sr-only">Products</h2>

            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 xl:gap-x-8">
                <a href="#" class="group">
                    <div
                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-01.jpg"
                            alt="Tall slender porcelain bottle with natural clay textured body and cork stopper."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Earthen Bottle</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$48</p>
                </a>

                <a href="#" class="group">
                    <div
                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-02.jpg"
                            alt="Olive drab green insulated bottle with flared screw lid and flat top."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Nomad Tumbler</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>

                <a href="#" class="group">
                    <div
                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-03.jpg"
                            alt="Person using a pen to cross a task off a productivity paper card."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Focus Paper Refill</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$89</p>
                </a>

                <a href="#" class="group">
                    <div
                        class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-lg bg-gray-200 xl:aspect-w-7 xl:aspect-h-8">
                        <img src="https://tailwindui.com/img/ecommerce-images/category-page-04-image-card-04.jpg"
                            alt="Hand holding black machined steel mechanical pencil with brass tip and top."
                            class="h-full w-full object-cover object-center group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">Machined Mechanical Pencil</h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">$35</p>
                </a>

                <!-- More products... -->
            </div>
        </div>

        <div class="py-16 sm:py-24 lg:mx-auto lg:max-w-7xl lg:px-8">
            <div class="flex items-center justify-between px-4 sm:px-6 lg:px-0">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900">Trending products</h2>
                <a href="#" class="hidden text-sm font-semibold text-indigo-600 hover:text-indigo-500 sm:block">
                    See everything
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            <div class="relative mt-8">
                <div class="relative -mb-6 w-full overflow-x-auto pb-6">
                    <ul role="list"
                        class="mx-4 inline-flex space-x-8 sm:mx-6 lg:mx-0 lg:grid lg:grid-cols-4 lg:gap-x-8 lg:space-x-0">
                        <li class="inline-flex w-64 flex-col text-center lg:w-auto">
                            <div class="group relative">
                                <div class="aspect-w-1 aspect-h-1 w-full overflow-hidden rounded-md bg-gray-200">
                                    <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-product-01.jpg"
                                        alt="Black machined steel pen with hexagonal grip and small white logo at top."
                                        class="h-full w-full object-cover object-center group-hover:opacity-75">
                                </div>
                                <div class="mt-6">
                                    <p class="text-sm text-gray-500">Black</p>
                                    <h3 class="mt-1 font-semibold text-gray-900">
                                        <a href="#">
                                            <span class="absolute inset-0"></span>
                                            Machined Pen
                                        </a>
                                    </h3>
                                    <p class="mt-1 text-gray-900">$35</p>
                                </div>
                            </div>

                            <h4 class="sr-only">Available colors</h4>
                            <ul role="list" class="mt-auto flex items-center justify-center space-x-3 pt-6">
                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                    style="background-color: #111827">
                                    <span class="sr-only"> Black </span>
                                </li>

                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                    style="background-color: #fde68a">
                                    <span class="sr-only"> Brass </span>
                                </li>

                                <li class="h-4 w-4 rounded-full border border-black border-opacity-10"
                                    style="background-color: #e5e7eb">
                                    <span class="sr-only"> Chrome </span>
                                </li>
                            </ul>
                        </li>

                        <!-- More products... -->
                    </ul>
                </div>
            </div>

            <div class="mt-12 flex px-4 sm:hidden">
                <a href="#" class="text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                    See everything
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
        </div>

        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-xl font-bold text-gray-900">Customers also bought</h2>

            <div class="mt-8 grid grid-cols-1 gap-y-12 sm:grid-cols-2 sm:gap-x-6 lg:grid-cols-4 xl:gap-x-8">
                <div>
                    <div class="relative">
                        <div class="relative h-72 w-full overflow-hidden rounded-lg">
                            <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-related-product-01.jpg"
                                alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <div class="relative mt-4">
                            <h3 class="text-sm font-medium text-gray-900">Zip Tote Basket</h3>
                            <p class="mt-1 text-sm text-gray-500">White and black</p>
                        </div>
                        <div
                            class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                            <div aria-hidden="true"
                                class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50"></div>
                            <p class="relative text-lg font-semibold text-white">$140</p>
                        </div>
                    </div>
                    <div class="mt-6">
                        <a href="#"
                            class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 py-2 px-8 text-sm font-medium text-gray-900 hover:bg-gray-200">Add
                            to bag<span class="sr-only">, Zip Tote Basket</span></a>
                    </div>
                </div>

                <!-- More products... -->
            </div>
        </div>

        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <div class="flex items-center justify-between space-x-4">
                <h2 class="text-lg font-medium text-gray-900">Customers also viewed</h2>
                <a href="#" class="whitespace-nowrap text-sm font-medium text-indigo-600 hover:text-indigo-500">
                    View all
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-x-8 gap-y-8 sm:grid-cols-2 sm:gap-y-10 lg:grid-cols-4">
                <div class="group relative">
                    <div class="aspect-w-4 aspect-h-3 overflow-hidden rounded-lg bg-gray-100">
                        <img src="https://tailwindui.com/img/ecommerce-images/product-page-05-related-product-01.jpg"
                            alt="Payment application dashboard screenshot with transaction table, financial highlights, and main clients on colorful purple background."
                            class="object-cover object-center">
                        <div class="flex items-end p-4 opacity-0 group-hover:opacity-100" aria-hidden="true">
                            <div
                                class="w-full rounded-md bg-white bg-opacity-75 py-2 px-4 text-center text-sm font-medium text-gray-900 backdrop-blur backdrop-filter">
                                View Product</div>
                        </div>
                    </div>
                    <div class="mt-4 flex items-center justify-between space-x-8 text-base font-medium text-gray-900">
                        <h3>
                            <a href="#">
                                <span aria-hidden="true" class="absolute inset-0"></span>
                                Fusion
                            </a>
                        </h3>
                        <p>$49</p>
                    </div>
                    <p class="mt-1 text-sm text-gray-500">UI Kit</p>
                </div>

                <!-- More products... -->
            </div>
        </div>

        
    </div>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="bg-white">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl">
            <div class="relative overflow-hidden rounded-lg lg:h-96">
                <div class="absolute inset-0">
                    <img src="https://tailwindui.com/img/ecommerce-images/category-page-01-featured-collection.jpg"
                        alt="" class="h-full w-full object-cover object-center">
                </div>
                <div aria-hidden="true" class="relative h-96 w-full lg:hidden"></div>
                <div aria-hidden="true" class="relative h-32 w-full lg:hidden"></div>
                <div
                    class="absolute inset-x-0 bottom-0 rounded-bl-lg rounded-br-lg bg-black bg-opacity-75 p-6 backdrop-blur backdrop-filter sm:flex sm:items-center sm:justify-between lg:inset-y-0 lg:inset-x-auto lg:w-96 lg:flex-col lg:items-start lg:rounded-tl-lg lg:rounded-br-none">
                    <div>
                        <h2 class="text-xl font-bold text-white">Workspace Collection</h2>
                        <p class="mt-1 text-sm text-gray-300">Upgrade your desk with objects that keep you organized
                            and clear-minded.</p>
                    </div>
                    <a href="#"
                        class="mt-6 flex flex-shrink-0 items-center justify-center rounded-md border border-white border-opacity-25 bg-white bg-opacity-0 py-3 px-4 text-base font-medium text-white hover:bg-opacity-10 sm:mt-0 sm:ml-8 lg:ml-0 lg:w-full">View
                        the collection</a>
                </div>
            </div>
        </div>
    </div>


    <div class="bg-gray-100">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-32">
                <h2 class="text-2xl font-bold text-gray-900">Collections</h2>

                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-01.jpg"
                                alt="Desk with leather desk pad, walnut desk organizer, wireless keyboard and mouse, and porcelain mug."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Desk and Office
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Work from home accessories</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-02.jpg"
                                alt="Wood table with porcelain mug, leather journal, brass pen, leather key ring, and a houseplant."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Self-Improvement
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Journals and note-taking</p>
                    </div>

                    <div class="group relative">
                        <div
                            class="relative h-80 w-full overflow-hidden rounded-lg bg-white group-hover:opacity-75 sm:aspect-w-2 sm:aspect-h-1 sm:h-64 lg:aspect-w-1 lg:aspect-h-1">
                            <img src="https://tailwindui.com/img/ecommerce-images/home-page-02-edition-03.jpg"
                                alt="Collection of four insulated travel bottles on wooden shelf."
                                class="h-full w-full object-cover object-center">
                        </div>
                        <h3 class="mt-6 text-sm text-gray-500">
                            <a href="#">
                                <span class="absolute inset-0"></span>
                                Travel
                            </a>
                        </h3>
                        <p class="text-base font-semibold text-gray-900">Daily commute essentials</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>
