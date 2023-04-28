<div x-data class="mt-6">

    <!-- Colors -->
    <div>
        <h3 class="text-sm font-medium text-gray-600 dark:text-white">Color</h3>

        <fieldset class="mt-2">
            <legend class="sr-only">Choose a color</legend>
            <span class="flex items-center space-x-3">
                <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                -->
                @foreach ($colors as $color)
                    <label
                        class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                        <input wire:model='color_id' type="radio" name="color-choice" value="{{ $color->id }}" class="sr-only"
                            aria-labelledby="color-choice-{{ $color->id }}-label">
                        <span id="color-choice-{{ $color->id }}-label" class="sr-only"> {{ $color->name }} </span>
                        <span aria-hidden="true"
                            class="h-8 w-8 {{ 'bg-' . $color->name }} border border-black dark:border-gray-600 border-opacity-10 rounded-full"></span>
                    </label>
                @endforeach
            </span>
        </fieldset>
    </div>

    <!-- Product details -->
    <div class="prose prose-sm mb-3 mt-6 text-gray-700 dark:text-gray-400">
        <p>Stock disponible: <span class="p-2 rounded-lg bg-gray-100 text-center text-gray-700 dark:text-gray-300 dark:bg-gray-800">{{ $stock !== 0  ? $stock :'Seleccione un color' ; }}</span></p>
    </div>

    <div class="sm:flex-col1 flex">
        <div class="mr-4 max-w-xs">
            <button type="button"
                class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center @if ($stock > 0) text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 @else border border-b text-gray-400 dark:text-white @endif"
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
                class="focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm p-2 m-2 text-center inline-flex items-center @if ($stock > 0) text-white bg-blue-700 hover:bg-blue-800 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 @else border border-b text-gray-400 dark:text-white @endif"
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

        <button class="flex max-w-xs flex-1 items-center justify-center rounded-md border py-3 px-8 text-base font-medium dark:text-white @if ($stock > 0) border-transparent text-gray-900 bg-gray-100 hover:bg-gray-200 dark:bg-gray-800 dark:hover:bg-gray-700 @else border-b text-gray-400 @endif"
            wire:click='addItem'
            wire:loading.attr='disabled'
            wire:target='addItem'
            x-bind:disabled="!$wire.stock">
            Agregar
        </button>
    </div>
</div>
