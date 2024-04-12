<x-app-layout>
    <x-slot:title>
        Edit Item ID {{ $item->id }}
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Item ID: ' . $item->id) }}
        </h2>
        
        <div x-data="{ open: false }" class="relative inline-block text-left">
            <div>
                <button type="button" @click="open = !open"
                    class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-white px-3 py-2 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50"
                    id="menu-button" aria-expanded="true" aria-haspopup="true">
                    More setting
                    <svg x-bind:class="{ 'rotate-180': open }" class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd"
                            d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                            clip-rule="evenodd" />
                    </svg>
                </button>
            </div>
            <div x-show="open" @click.away="open = false" @keydown.escape="open = false" class="absolute right-0 z-10 mt-2 w-56 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none"
                role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
                <div class="py-1" role="none">
                    <form method="POST" onsubmit="return confirm('Do you really want to delete the item?');" action="{{route('item.destroy', $item)}}" role="none">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onsub class="text-gray-700 block w-full px-4 py-2 text-left text-sm flex gap-2 items-center"
                            role="menuitem" tabindex="-1" id="menu-item-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4">
                                <g fill="#FF2D20"><path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 0 1 3.878.512.75.75 0 1 1-.256 1.478l-.209-.035-1.005 13.07a3 3 0 0 1-2.991 2.77H8.084a3 3 0 0 1-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 0 1-.256-1.478A48.567 48.567 0 0 1 7.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 0 1 3.369 0c1.603.051 2.815 1.387 2.815 2.951Zm-6.136-1.452a51.196 51.196 0 0 1 3.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 0 0-6 0v-.113c0-.794.609-1.428 1.364-1.452Zm-.355 5.945a.75.75 0 1 0-1.5.058l.347 9a.75.75 0 1 0 1.499-.058l-.346-9Zm5.48.058a.75.75 0 1 0-1.498-.058l-.347 9a.75.75 0 0 0 1.5.058l.345-9Z" clip-rule="evenodd" /></g>
                            </svg>Delete this item</button>
                    </form>
                </div>
            </div>
        </div>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid lg:grid-cols-4 grid-cols-2 grid-cols-1 gap-6">
                <div class="border-r-2 border-slate-300 ">
                    <p class="text-sm">Item ID:</p>
                    <p class="text-lg">{{ $item->id }}</p>
                </div>
                <div class="lg:border-r-2 border-slate-300 ">
                    <p class="text-sm">Last updated by:</p>
                    <p class="text-lg">{{ $item->user->name }}</p>
                </div>
                <div class="border-r-2 border-slate-300 ">
                    <p class="text-sm">Updated at:</p>
                    <p class="text-lg">{{ $item->updated_at->format('D, d F Y, h.i A') }}</p>
                </div>
                <div class="">
                    <p class="text-sm">Created at:</p>
                    <p class="text-lg">{{ $item->created_at->format('D, d F Y, h.i A') }}</p>
                </div>
            </div>
            <form class="mt-6" action="{{ route('item.update', $item) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Item
                            Name</label>
                        <div class="mt-2">
                            <input type="text" name="name" id="name" autocomplete="name"
                                value="{{ $item->name }}"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                                placeholder="e.g. Tablet, PC">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="price" class="block text-sm font-medium leading-6 text-gray-900">Price</label>
                        <div class="mt-2">
                            <div
                                class="flex rounded-md shadow-sm ring-1 ring-offset ring-gray-300 focus:ring-2 focus:ring-offset focus:ring-indigo-600 sm:max-w-md">
                                <span
                                    class="flex select-none items-center pl-3 text-gray-500 sm:text-sm bg-white rounded-l-md">BND</span>
                                <input value="{{ $item->price }}" type="number" step=".01" name="price"
                                    id="price" autocomplete="price"
                                    class="block flex-1 rounded-r-md border-0 py-1.5 pl-1 placeholder:text-gray-400 sm:text-sm sm:leading-6"
                                    placeholder="99.99">
                            </div>
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="quantity" class="block text-sm font-medium leading-6 text-gray-900">Quantity</label>
                        <div class="mt-2">
                            <input value="{{ $item->quantity }}" type="number" name="quantity" id="quantity"
                                autocomplete="quantity" placeholder="(Any number)"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>

                    <div class="col-span-full">
                        <label for="description"
                            class="block text-sm font-medium leading-6 text-gray-900">Description</label>
                        <div class="mt-2">
                            <textarea id="description" name="description" rows="5"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">{{ $item->description }}</textarea>
                        </div>
                    </div>
                </div>
                <button type="submit" class="btn-primary mt-6">Update</button>
            </form>
        </div>
    </div>
</x-app-layout>
