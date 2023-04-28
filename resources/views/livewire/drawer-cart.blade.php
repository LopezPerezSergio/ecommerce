<div>
    <button data-modal-target="drawer-cart-modal" data-modal-toggle="drawer-cart-modal"
        class="inline-flex items-center p-2 ml-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
        type="button">
        <span class="relative inline-block">
            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                aria-hidden="true">
                <path
                    d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                </path>
            </svg>
            @if (Cart::count())
                @if (Cart::count() <= 9)
                    <div
                        class="absolute inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                        {{ Cart::count() }}
                    </div>
                @else
                    <div
                        class="absolute inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                        +9
                    </div>
                @endif
            @endif
        </span>
    </button>


    <!-- Top Right Modal -->
    <div id="drawer-cart-modal" data-modal-placement="top-left" tabindex="-1"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 mt-16 overflow-x-hidden md:inset-0 h-[calc(100%-5rem)] max-h-xl">
        <div class="relative w-full max-w-2xl max-h-full">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <!-- Modal header -->
                <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-xl font-medium text-gray-600 dark:text-white">
                        <span class="relative inline-block">
                            <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                                </path>
                            </svg>
                        </span>
                        Carrito de compras
                    </h3>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white"
                        data-modal-hide="drawer-cart-modal">
                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                </div>
                <!-- Modal body -->
                <div class="px-6 space-y-6">
                    <div class="flex h-80 flex-col">
                        <div class="flex-1 @if (Cart::count()) overflow-y-auto @endif my-2 px-4 ">
                            <div class="flow-root">
                                <ul role="list" class="-my-6 divide-y divide-gray-200">
                                    {{-- <li class="flex py-6">
                                        <div
                                            class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                            <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                class="h-full w-full object-cover object-center">
                                        </div>

                                        <div class="ml-4 flex flex-1 flex-col">
                                            <div>
                                                <div class="flex justify-between text-base font-medium text-gray-900">
                                                    <h3>
                                                        <a href="#">Throwback Hip Bag</a>
                                                    </h3>
                                                    <p class="ml-4">$90.00</p>
                                                </div>
                                                <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                            </div>
                                            <div class="flex flex-1 items-end justify-between text-sm">
                                                <p class="text-gray-500">Qty 1</p>

                                                <div class="flex">
                                                    <button type="button"
                                                        class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                        </li>

                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="h-full w-full object-cover object-center">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Medium Stuff Satchel</a>
                                                        </h3>
                                                        <p class="ml-4">$32.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                                    alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                                    class="h-full w-full object-cover object-center">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Throwback Hip Bag</a>
                                                        </h3>
                                                        <p class="ml-4">$90.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="h-full w-full object-cover object-center">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">Medium Stuff Satchel</a>
                                                        </h3>
                                                        <p class="ml-4">$32.00</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Blue</p>
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Qty 1</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-indigo-600 hover:text-indigo-500">Remove</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li> 
                                    --}}

                                    @forelse (Cart::content() as $item)
                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="{{ $item->options->image }}"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="h-full w-full object-cover object-center">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div
                                                        class="flex justify-between text-base font-medium text-gray-900">
                                                        <h3>
                                                            <a href="#">{{ $item->name }}</a>
                                                        </h3>
                                                        <p class="ml-4">$ {{ $item->price }}</p>
                                                    </div>
                                                </div>
                                                <div class="grid grid-cols-3 gap-4 mb-4">
                                                    <p class="text-gray-500 text-sm mt-1">
                                                        Cantidad: {{ $item->qty }}
                                                    </p>
                                                    @if ($item->options->color)
                                                        <p class="text-sm text-gray-500">
                                                            <label
                                                                class="mt-1 relative p-0.5 rounded-full flex  cursor-pointer focus:outline-none ring-gray-500">
                                                                <span
                                                                    id="color-choice-{{ $item->options->color }}-label"
                                                                    class="mr-4"> Color: </span>

                                                                <span aria-hidden="true"
                                                                    class="h-5 w-5 {{ 'bg-' . $item->options->color }} border border-black dark:border-gray-600 border-opacity-10 rounded-full"></span>
                                                            </label>
                                                        </p>
                                                    @endif
                                                    @if ($item->options->size)
                                                        <span class="mt-1 text-sm text-gray-500">Tamaño:
                                                            {{ $item->options->size }}</span>
                                                    @endif
                                                </div>
                                                <div class="flex flex-1 items-end justify-between text-sm">
                                                    <p class="text-gray-500">Total:
                                                        {{ $item->qty * $item->price }}</p>

                                                    <div class="flex">
                                                        <button type="button"
                                                            class="font-medium text-red-600 hover:text-red-500">Eliminar</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @empty
                                        <li class="flex py-6">
                                            <div
                                                class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                                <img src="{{ Storage::url('public/images/info.png') }}"
                                                    alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                                    class="h-full w-full object-cover object-center">
                                            </div>

                                            <div class="ml-4 flex flex-1 flex-col">
                                                <div>
                                                    <div
                                                        class="text-base font-medium text-gray-900 truncate dark:text-white">
                                                        <p>Aun no hay productos en el carrito</p>
                                                    </div>
                                                    <p class="mt-1 text-sm text-gray-500">Navegue y empiece agregar los
                                                        productos que necesite</p>
                                                </div>
                                            </div>
                                        </li>
                                    @endforelse
                                    <!-- More products... -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Modal footer -->
                @if (Cart::count())
                    <div class="border-t dark:border-gray-600 py-3 px-4 sm:px-6">

                        <section aria-labelledby="summary-heading" class="mt-auto sm:px-6 lg:px-8">
                            <p class="my-2 text-md font-semibold text-center text-gray-600 dark:text-gray-50">Envío e
                                impuestos calculados al finalizar la compra.</p>

                            <div class="bg-gray-50 p-6 sm:rounded-lg sm:p-8">
                                <h2 id="summary-heading" class="sr-only">Order summary</h2>

                                <div class="flow-root">
                                    <dl class="-my-4 divide-y divide-gray-200 text-md">
                                        <div class="flex items-center justify-between py-2">
                                            <dt class="font-bold text-gray-600">Subtotal</dt>
                                            <dd class="font-medium text-gray-900">$ {{ Cart::subtotal() }}</dd>
                                        </div>
                                    </dl>
                                </div>
                            </div>

                            <div class="mt-6">
                                <a href="#"
                                    class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Ir
                                    al carrito de compras</a>
                            </div>
                        </section>
                    </div>
                @endif
            </div>
        </div>
    </div>
</div>
