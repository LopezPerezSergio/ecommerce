<div class=" h-full">
    <div class="pt-12 lg:grid lg:grid-cols-4 lg:gap-x-8 xl:grid-cols-5">
        <aside>
            <h2 class="sr-only">Filters</h2>

            <div class="">
                <legend class="mb-4 block text-md font-medium text-gray-900 dark:text-white">
                    Subcategorías</legend>

                <ul class="space-y-2 font-medium">
                    @foreach ($category->subcategories as $subcategory)
                        <li>
                            <button type="button" wire:click="$set('subcat', '{{ $subcategory->name }}')"
                                class="w-full flex items-center p-2 rounded-lg {{ $subcat == $subcategory->name ? 'bg-gray-100 dark:bg-gray-700 text-gray-900  dark:text-white hover:bg-gray-200 dark:hover:bg-gray-800' : 'text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                <svg aria-hidden="true"
                                    class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                        clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-3">{{ $subcategory->name }}</span>
                            </button>
                        </li>
                    @endforeach
                </ul>

                <legend
                    class="border-t-2 border-gray-500 my-4 pt-2 block text-md font-medium text-gray-900 dark:text-white">
                    Marcas</legend>

                <ul class="space-y-2 font-medium">
                    @foreach ($category->brands as $brand)
                        <li>
                            <button type="button" wire:click="$set('bra','{{ $brand->name }}')"
                                class="w-full flex items-center p-2 rounded-lg {{ $bra == $brand->name ? 'bg-gray-100 dark:bg-gray-700 text-gray-900  dark:text-white hover:bg-gray-200 dark:hover:bg-gray-800' : 'text-gray-900  dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700' }}">
                                <svg class="flex-shrink-0 w-6 h-6 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white"
                                    fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                    aria-hidden="true">
                                    <path clip-rule="evenodd" fill-rule="evenodd"
                                        d="M6.32 2.577a49.255 49.255 0 0111.36 0c1.497.174 2.57 1.46 2.57 2.93V21a.75.75 0 01-1.085.67L12 18.089l-7.165 3.583A.75.75 0 013.75 21V5.507c0-1.47 1.073-2.756 2.57-2.93z">
                                    </path>
                                </svg>
                                <span class="ml-3">{{ $brand->name }}</span>
                            </button>
                        </li>
                    @endforeach
                </ul>
                <button type="button" wire:click="clear" class="mt-8 w-full text-white bg-gray-800 hover:bg-gray-900 focus:outline-none focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-700 dark:border-gray-700">Eliminar Filtros</button>

            </div>

            
        </aside>

        <!-- Product grid -->
        <div class="mt-6 lg:col-span-3 lg:mt-0 xl:col-span-4">
            <!-- Replace with your content -->
            <div
                class="py-2 sm:grid sm:grid-cols-2 gap-3 lg:grid-cols-3 lg:gap-x-3 rounded-lg border-2 border-b border-gray-200 lg:h-full">
                @foreach ($products as $product)
                    <div class="mx-2 my-4">
                        <div class="relative">
                            <div class="relative h-72 w-full overflow-hidden rounded-lg">
                                <img src="{{ Storage::url($product->images->first()->url) }}"
                                    alt="Front of zip tote bag with white canvas, black canvas straps and handle, and black zipper pulls."
                                    class="h-full w-full object-cover object-center">
                            </div>
                            <div class="relative mt-4">
                                <h3 class="text-sm font-medium text-gray-900 dark:text-gray-400">{{ $product->name }}
                                </h3>
                                <p class="mt-1 text-sm text-gray-500">
                                    {{ Str::limit($product->description, 35, ' ...') }}
                                </p>
                            </div>
                            <div
                                class="absolute inset-x-0 top-0 flex h-72 items-end justify-end overflow-hidden rounded-lg p-4">
                                <div aria-hidden="true"
                                    class="absolute inset-x-0 bottom-0 h-36 bg-gradient-to-t from-black opacity-50">
                                </div>
                                <p class="relative text-lg font-semibold text-white">${{ $product->price }}</p>
                            </div>
                        </div>
                        <div class="mt-6">
                            <a href="#"
                                class="relative flex items-center justify-center rounded-md border border-transparent bg-gray-100 py-2 px-8 text-sm font-medium text-gray-900 hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700">
                                Agregar al carrito<span class="sr-only">, Zip Tote Basket</span></a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="px-4 w-full mt-4 ">
                {{ $products->links() }}
            </div>

            <!-- /End replace -->
        </div>
    </div>
</div>
