<x-app-layout>
    <div class="mt-16 xs:mb-4 bg-white dark:bg-gray-900">
        {{-- fondo y degradacion --}}
        <div aria-hidden="true" class="relative">
            <img src="https://tailwindui.com/img/ecommerce-images/product-feature-02-full-width.jpg" alt=""
                class="h-96 w-full object-cover object-center">
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900"></div>
        </div>

        {{-- Titulo frases y categorias --}}
        <div class="relative mx-auto -mt-80 max-w-7xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
            <div class="mx-auto max-w-2xl text-center lg:max-w-4xl">
                <h1 class="mt-6 text-3xl font-extrabold text-gray-900 dark:text-white md:text-5xl lg:text-6xl">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                        Sweet & Dandy
                    </span> Encuentra lo mejor con nosotros.
                </h1>

                <h2 class="mt-6 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Compra y cambia tu estilo
                </h2>
                <p class="mt-4 text-base text-gray-600 dark:text-gray-400">Cada temporada, cambiamos los estilos de
                    clase mundial para crear una coleccion inspirada en el mundo natural.</p>
            </div>

            <div class="pt-8 sm:py-24 lg:-mt-20 xl:mx-auto xl:max-w-7xl xl:px-8">
                <div class="px-4 sm:flex sm:items-center sm:justify-between sm:px-6 lg:px-8 xl:px-0">
                    <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-400">Nuestras categorías
                    </h2>
                    <a href="#"
                        class="hidden text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-600 sm:block">
                        Explorar todas las categorías
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

                {{-- Categorias --}}
                <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-8 lg:space-y-0">
                    @foreach ($categories as $category)
                        <a href="#" class="group block">
                            <div aria-hidden="true"
                                class="aspect-w-3 aspect-h-2 overflow-hidden rounded-lg group-hover:opacity-75 lg:aspect-w-7 lg:aspect-h-8">
                                <img src="{{ Storage::url($category->image) }}" loading="lazy"
                                    alt="image-{{ $category->name }}."
                                    class="h-full w-full object-cover object-center lg:h-64">
                            </div>
                            <h3 class="mt-4 mb-8 text-base font-semibold text-gray-900 dark:text-gray-400">
                                {{ $category->name }}</h3>
                        </a>
                    @endforeach
                </div>

                <div class="mt-6 px-4 sm:hidden">
                    <a href="#" class="block text-sm font-semibold text-indigo-600 hover:text-indigo-500">
                        Explorar todas las categorías
                        <span aria-hidden="true"> &rarr;</span>
                    </a>
                </div>

            </div>
        </div>  
    </div>

    <section class="-mt-52 py-2 px-10 bg-white dark:bg-gray-900">
        @foreach ($categories as $category)
            <div class="my-6 px-2 sm:flex sm:items-center sm:justify-between ">
                <h2 class="text-2xl font-bold tracking-tight text-gray-900 dark:text-gray-400">
                    {{ $category->name }}
                </h2>
                
                <a href="{{ route('categories.show', $category) }}"
                    class="hidden text-sm font-semibold text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-600 sm:block">
                    Ver todos los productos
                    <span aria-hidden="true"> &rarr;</span>
                </a>
            </div>

            @livewire('category-products', ['category' => $category])
        @endforeach
    </section>

    <section class="bg-white dark:bg-gray-900">
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
    </section>
    

    @push('script')
        <script>
            Livewire.on('glider', function(id) {
                new Glider(document.querySelector('.glider-' + id), {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    draggable: true,
                    dots: '.glider-' + id + '~.dots',
                    arrows: {
                        prev: '.glider-' + id + '~.glider-prev',
                        next: '.glider-' + id + '~.glider-next'
                    },
                    responsive: [{
                        breakpoint: 640,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    }, {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 3,
                        },
                    }, {
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 4,
                            slidesToScroll: 4,
                        },
                    }, ]
                });
            });
        </script>
    @endpush
</x-app-layout>
