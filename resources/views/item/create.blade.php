

<x-app-layout>
    <x-slot:title>
        Create New Item
    </x-slot>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create Item') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <form action="{{ route('item.store') }}" method="POST">
                @csrf
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Item Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="e.g. Tablet, PC">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="mt-2">
                            <div class="flex rounded-md shadow-sm ring-1 ring-offset ring-gray-300 focus:ring-2 focus:ring-offset focus:ring-indigo-600 sm:max-w-md">
                                <span class="flex select-none items-center pl-3 text-gray-500 sm:text-sm bg-white rounded-l-md">BND</span>
                                <input type="number" step=".01" name="price" id="price" autocomplete="price" class="block flex-1 rounded-r-md border-0 py-1.5 pl-1 placeholder:text-gray-400 sm:text-sm sm:leading-6" placeholder="99.99">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input type="number" name="quantity" id="quantity" autocomplete="quantity"  placeholder="(Any number)"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description" class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="3"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"></textarea>
                        </div>
                        <p class="mt-3 text-sm leading-6 text-gray-600">Write the item specifications.</p>
                    </div>
                </div>
                <button type="submit" class="btn-primary mt-6">Submit</button>
            </form>
        </div>
    </div>
</x-app-layout>
