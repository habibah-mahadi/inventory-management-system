<x-app-layout>
    <x-slot:title>
        All Items
    </x-slot>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('All Items') }}
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-6 lg:px-8">
            <div class="grid md:grid-cols-6 grid-cols-1 gap-4 mb-6 gap-4 items-start">
                <form class="col-span-3 grid gap-4 grid-cols-1 p-6 bg-slate-200" action="{{ route('item.index') }}" method="GET">
                    <div class="grid grid-cols-5 gap-4">
                        <p class="col-span-2">Last updated by:</p>
                        <select onchange="this.form.submit()" id="last_updated_by" name="last_updated_by" autocomplete="last_updated_by-name" class="col-span-3 block w-full rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">All users</option>
                            @foreach ($users as $u)
                            <option value="{{ $u->id }}" {{ $last_updated_by==$u->id ? 'selected':'' }}>{{ $u->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="grid grid-cols-5 gap-4">
                        <p class="col-span-2">Sort By:</p>
                        <select onchange="this.form.submit()" id="sort" name="sort" autocomplete="sort-name" class="col-span-3 block rounded-md border-0 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:max-w-xs sm:text-sm sm:leading-6">
                            <option value="">New</option>
                            @foreach ($sort_by as $val)
                            <option value="{{ $val['value'] }}" {{ $val['is_selected'] ? 'selected':'' }}>{{ $val['name'] }}</option>  
                            @endforeach
                        </select>
                    </div>
                </form>
                <form class="col-span-3 p-6 bg-slate-200" action="{{ route('item.index') }}" method="GET">
                    <div class="flex gap-4">
                        <input type="text" name="search" id="search" placeholder="Search item name or description" value="{{ $search }}"
                            class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        <button type="submit" class="btn-primary">Search</button>
                    </div>
                </form>
            </div>
            <div>
                <p>Total: {{ $total_items }}</p>
            </div>
            <div class="overflow-x-auto">

                <table class="border-collapse table-auto w-full text-sm bg-white shadow-md mt-6">
                    <thead>
                        <tr>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                                Item</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                                Description</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                                Price</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                                Quantity</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                                Updated by</th>
                            <th
                                class="border-b dark:border-slate-600 font-medium p-4 pl-8 p-3 text-slate-800 text-left">
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($items as $item)
                            <tr class="hover:bg-slate-100 ease-in duration-300">
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">
                                    {{ $item->name }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">
                                    {{ Str::words($item->description, 5) }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">BND
                                    {{ $item->price }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">
                                    {{ $item->quantity }}</td>
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">
                                    {{ $item->user->name }}<br><small>on {{ $item->updated_at->format('d M Y, h.i A') }}</small></td>
                                <td class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500">
                                    <a href="{{ route('item.edit', $item) }}" class="btn-light">Edit</a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="border-b border-slate-100 dark:border-slate-200 p-4 pl-8 text-slate-500 text-center">No result</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
            <div class="mt-6">
                {{ $items->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
