<div>
    <!-- drawer init and toggle -->
    <div class="text-center">
        <button
            class="inline-flex items-center p-2 ml-2 text-sm text-gray-500 rounded-lg hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            type="button" data-drawer-target="drawer-right-cart" data-drawer-show="drawer-right-cart"
            data-drawer-placement="right" aria-controls="drawer-right-cart">
            <span class="relative inline-block">
                <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                    </path>
                </svg>
                <div
                    class="absolute inline-flex items-center justify-center w-5 h-5 text-[10px] font-bold text-white bg-red-500 border-2 border-white rounded-full -top-2 -right-2 dark:border-gray-900">
                    +9</div>

            </span>
        </button>
    </div>

    
    <!-- Carrito de compras -->
    <div id="drawer-right-cart"
        class="fixed top-0 right-0 z-40 h-screen  p-4 w-fit transition-transform translate-x-full bg-white dark:bg-gray-800"
        tabindex="-1" aria-labelledby="drawer-right-label-cart">
        <h5 id="drawer-right-label-cart"
            class="self-center text-xl font-semibold whitespace-nowrap text-gray-500 dark:text-white">
            <span class="relative inline-block">
                <svg class="w-6 h-6 mr-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path
                        d="M1 1.75A.75.75 0 011.75 1h1.628a1.75 1.75 0 011.734 1.51L5.18 3a65.25 65.25 0 0113.36 1.412.75.75 0 01.58.875 48.645 48.645 0 01-1.618 6.2.75.75 0 01-.712.513H6a2.503 2.503 0 00-2.292 1.5H17.25a.75.75 0 010 1.5H2.76a.75.75 0 01-.748-.807 4.002 4.002 0 012.716-3.486L3.626 2.716a.25.25 0 00-.248-.216H1.75A.75.75 0 011 1.75zM6 17.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15.5 19a1.5 1.5 0 100-3 1.5 1.5 0 000 3z">
                    </path>
                </svg>
            </span>Carrito de compras
        </h5>
        <button type="button" data-drawer-hide="drawer-right-cart" aria-controls="drawer-right-cart"
            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 absolute top-2.5 right-2.5 inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white">
            <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"   
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close menu</span>
        </button>

        <div class="flex h-full w-full flex-col shadow-xl">

            <div class="flex-1 overflow-y-auto py-6 px-4 sm:px-6">
                {{-- Poner si no hay productos en el carrito de compras --}}
                <p class="mt-8 text-xl text-gray-500">Aun no hay nada en el carrito de compras.</p>
                {{-- Fin de poner si no hay productos en el carrito de compras --}}

                {{-- Poner si hay productos en el carrito de compras --}}
                <div class="mt-8">
                    <div class="flow-root">
                        <ul role="list" class="-my-6 divide-y divide-gray-200">
                            <li class="flex py-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-01.jpg"
                                        alt="Salmon orange fabric pouch with match zipper, gray zipper pull, and adjustable hip belt."
                                        class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                            <h3>
                                                <a href="#" class=" dark:text-white">Throwback Hip Bag</a>
                                            </h3>
                                            <p class="ml-4  dark:text-white">$90.00</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Salmon</p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">Cantidad 1</p>

                                        <div class="flex">
                                            <button type="button"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="flex py-6">
                                <div class="h-24 w-24 flex-shrink-0 overflow-hidden rounded-md border border-gray-200">
                                    <img src="https://tailwindui.com/img/ecommerce-images/shopping-cart-page-04-product-02.jpg"
                                        alt="Front of satchel with blue canvas body, black straps and handle, drawstring top, and front zipper pouch."
                                        class="h-full w-full object-cover object-center">
                                </div>

                                <div class="ml-4 flex flex-1 flex-col">
                                    <div>
                                        <div class="flex justify-between text-base font-medium text-gray-900">
                                            <h3>
                                                <a href="#" class=" dark:text-white">Medium Stuff Satchel</a>
                                            </h3>
                                            <p class="ml-4  dark:text-white">$32.00</p>
                                        </div>
                                        <p class="mt-1 text-sm text-gray-500">Blue</p>
                                    </div>
                                    <div class="flex flex-1 items-end justify-between text-sm">
                                        <p class="text-gray-500">Cantidad 1</p>

                                        <div class="flex">
                                            <button type="button"
                                                class="font-medium text-indigo-600 hover:text-indigo-500">Eliminar</button>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- More products... -->
                        </ul>
                    </div>
                </div>
                {{-- Fin de poner si hay productos en el carrito de compras --}}

            </div>

            <div class="border-t border-gray-200 py-12 px-4 sm:px-6">
                {{-- Poner si hay productos en el carrito de compras --}}
                <div class="flex justify-between text-base font-medium text-gray-900  dark:text-white">
                    <p>Subtotal</p>
                    <p>$262.00</p>
                </div>
                <p class="mt-0.5 text-sm text-gray-500">Envío e impuestos calculados al finalizar la compra.</p>
                <div class="mt-6">
                    <a href="#"
                        class="flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-6 py-3 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Verificar</a>
                </div>
                <div class="mt-6 flex justify-center text-center text-sm text-gray-500">
                    <p>
                        o
                        <button type="button" class="font-medium text-indigo-600 hover:text-indigo-500">
                            Seguir comprando
                            <span aria-hidden="true"> &rarr;</span>
                        </button>
                    </p>
                </div>
                {{-- Fin de poner si hay productos en el carrito de compras --}}
            </div>
        </div>
    </div>
</div>
