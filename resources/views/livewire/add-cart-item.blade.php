<div x-data class="mt-6">
    <!-- Product details -->
    <div class="prose prose-sm mb-3 mt-6 text-gray-700 dark:text-gray-400">
        <p>Stock disponible: <span class="p-2 rounded-lg bg-gray-100  text-center">{{ $stock }}</span></p>
    </div>

    <div class="sm:flex-col1 flex">
        <div class="mr-4 max-w-xs">
            <button type="button"
                class="focus:ring-4 focus:outline-none font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center @if ($stock > 0) text-white focus:ring-blue-300  bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 @else border border-b dark:text-white @endif"
                disabled x-bind:disabled="$wire.quantity <= 1" 
                wire:loading.attr='disabled' 
                wire:target='decrement'
                wire:click='decrement'>

                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M3.75 12a.75.75 0 01.75-.75h15a.75.75 0 010 1.5h-15a.75.75 0 01-.75-.75z"></path>
                </svg>
                <span class="sr-only">Icon description</span>
            </button>

            <span class="p-4 text-base font-medium dark:text-white">{{ $quantity }}</span>

            <button type="button"
                class="focus:ring-4 focus:outline-none font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center @if ($stock > 0) text-white focus:ring-blue-300  bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 @else border border-b dark:text-white @endif"
                x-bind:disabled="$wire.quantity >= $wire.stock" 
                wire:loading.attr='disabled' 
                wire:target='increment'
                wire:click='increment'>

                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                    aria-hidden="true">
                    <path clip-rule="evenodd" fill-rule="evenodd"
                        d="M12 3.75a.75.75 0 01.75.75v6.75h6.75a.75.75 0 010 1.5h-6.75v6.75a.75.75 0 01-1.5 0v-6.75H4.5a.75.75 0 010-1.5h6.75V4.5a.75.75 0 01.75-.75z">
                    </path>
                </svg>
                <span class="sr-only">Icon description</span>
            </button>
        </div>

        <button class="flex max-w-xs flex-1 items-center justify-center rounded-md border py-3 px-8 text-base font-medium text-gray-900 dark:text-white @if ($stock > 0) border-transparent bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 @else border-b @endif"
            wire:click='addItem'
            wire:loading.attr='disabled'
            wire:target='addItem'
            x-bind:disabled="!$wire.stock">
            Agregar
        </button>
    </div>
</div>
