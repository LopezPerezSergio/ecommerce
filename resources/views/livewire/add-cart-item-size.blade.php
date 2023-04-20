<div x-data class="mt-6">
    <!-- Size picker -->
    <div>
        <h3 class="text-sm font-medium text-gray-600 dark:text-white">Talla</h3>

        <fieldset class="mt-2">
            <legend class="sr-only">Choose a size</legend>

            <div class="grid grid-cols-3 gap-3 sm:grid-cols-6">
                <!--
                    In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
                    Active: "ring-2 ring-offset-2 ring-indigo-500"
                    Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"
                -->
                @foreach ($sizes as $size)
                    <label
                        class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 cursor-pointer focus:outline-none">
                        <input wire:model='size_id' type="radio" name="size-choice" value="{{ $size->id }}"
                            class="sr-only" aria-labelledby="size-choice-{{ $size->id }}-label">
                        <span id="size-choice-{{ $size->id }}-label">{{ $size->name }}</span>
                    </label>
                @endforeach

                <!--
            In Stock: "cursor-pointer", Out of Stock: "opacity-25 cursor-not-allowed"
            Active: "ring-2 ring-offset-2 ring-indigo-500"
            Checked: "bg-indigo-600 border-transparent text-white hover:bg-indigo-700", Not Checked: "bg-white border-gray-200 text-gray-900 hover:bg-gray-50"
            -->
                <label
                    class="border rounded-md py-3 px-3 flex items-center justify-center text-sm font-medium uppercase sm:flex-1 opacity-25 cursor-not-allowed">
                    <input type="radio" name="size-choice" value="XL" disabled class="sr-only"
                        aria-labelledby="size-choice-5-label">
                    <span id="size-choice-5-label">XL</span>
                </label>
            </div>
        </fieldset>
    </div>

    <!-- Colors -->
    <div class="mt-6">
        <h3 class="text-sm font-medium text-gray-600 dark:text-white">Color</h3>

        <fieldset class="mt-2">
            <legend class="sr-only">Choose a color</legend>
            <span class="flex items-center space-x-3">
                <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
            -->

                @forelse ($colors as $color)
                    <label
                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                        <input wire:model='color_id' type="radio" name="color-choice" value="{{ $color->id }}"
                            class="sr-only" aria-labelledby="color-choice-{{ $color->id }}-label">
                        <span id="color-choice-{{ $color->id }}-label" class="sr-only"> {{ $color->name }}
                        </span>
                        <span aria-hidden="true"
                            class="h-8 w-8 {{ 'bg-' . $color->name }} border border-black dark:border-gray-600 border-opacity-10 rounded-full"></span>
                    </label>
                @empty
                    <label
                        class="-m-0.5 relative p-0.5 rounded-full bg-gray-100 text-gray-700 text-center flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                        <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                            aria-hidden="true">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M12 2.25c-5.385 0-9.75 4.365-9.75 9.75s4.365 9.75 9.75 9.75 9.75-4.365 9.75-9.75S17.385 2.25 12 2.25zm4.28 10.28a.75.75 0 000-1.06l-3-3a.75.75 0 10-1.06 1.06l1.72 1.72H8.25a.75.75 0 000 1.5h5.69l-1.72 1.72a.75.75 0 101.06 1.06l3-3z">
                            </path>
                        </svg>
                        <p class="mx-4 text-sm font-medium text-gray-600 dark:text-white">Seleccione una talla</p>
                    </label>
                @endforelse
            </span>
        </fieldset>
    </div>

    <!-- Product details -->
    <div class="prose prose-sm mb-3 mt-6 text-gray-700 dark:text-gray-400">
        <p>Stock disponible: <span class="p-2 rounded-lg bg-gray-100  text-center">{{ $stock !== 0  ? $stock :'Seleccione un color' ; }}</span></p>
    </div>

    <div class="sm:flex-col1 flex">
        <div class="mr-4 max-w-xs">
            <button type="button"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                disabled x-bind:disabled="$wire.quantity <= 1" wire:loading.atrr='disabled' wire:target='decrement'
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
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                x-bind:disabled="$wire.quantity >= $wire.stock" wire:loading.atrr='disabled' wire:target='increment'
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

        <button type="submit"
            class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-gray-100 py-3 px-8 text-base font-medium text-gray-900 hover:bg-gray-200 dark:bg-gray-800 dark:text-white dark:hover:bg-gray-700"
            x-bind:disabled="!$wire.stock">
            Agregar
        </button>
    </div>
</div>
