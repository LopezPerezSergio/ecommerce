<x-app-layout>
    <div class="bg-white dark:bg-gray-900">
        <div class="mx-auto max-w-2xl py-16 px-4 sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
            <!-- Replace with your content -->
            <div class="mb-4 pb-10 h-full rounded-lg border-2 border-b border-gray-200 text-center dark:border-gray-800">
                <img src="{{ Storage::url($category->image) }}"
                    class="w-full h-80 object-cover object-center rounded-lg" alt="image description">
                <h1 class="pt-4 text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400">
                        {{ $category->name }}
                    </span> 
                </h1>
                <p class="mt-4 text-base text-gray-700 dark:text-gray-400">
                    ¡Mira el último lanzamiento de {{ $category->name }}!</p>
            </div>


            @livewire('category-filter', ['category' => $category])
        </div>
    </div>
</x-app-layout>
