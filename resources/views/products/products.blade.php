<x-app-layout>
    <x-slot name="header" >
        <div class="grid grid-cols-3 gap-4 content-start" style="display: flex;    justify-content: space-between;">
            <h2 class=" font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Products') }}
            </h2>
            <div class="px-4 py-3 bg-gray-50 text-right sm:px-6">
                <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('create') }}" style="background-color: #000;float:right;">Add Product</a>
            </div>
        </div>
    </x-slot>
    <!-- component -->
    <div class="py-12">
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex flex-col justify-center h-full">
                <!-- Table -->
                <div class="w-full mx-auto bg-white shadow-lg rounded-sm border border-gray-200">
                    <header class="p-6 bg-white border-b border-gray-200">
                        <h2 class="font-semibold text-gray-800">Products Details</h2>
                    </header>
                    <div class="p-3">
                        <div class="overflow-x-auto">
                            <table class="table-auto w-full">
                                <thead class="text-xs font-semibold uppercase text-gray-400 bg-gray-50">
                                <tr>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Image</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Name</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Description</div>
                                    </th>
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Price</div>
                                    </th>
{{--                                    <th class="p-2 whitespace-nowrap">--}}
{{--                                        <div class="font-semibold text-left">Active</div>--}}
{{--                                    </th>--}}
                                    <th class="p-2 whitespace-nowrap">
                                        <div class="font-semibold text-left">Action</div>
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="text-sm divide-y divide-gray-100">
                                @foreach ($products as $product)
                                    <tr>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="flex items-center">
                                                <div class="w-10 h-10 flex-shrink-0 mr-2 sm:mr-3"><img class="rounded-full" src={{ $product->product_image }} width="40" height="40" alt="Alex Shatov"></div>
                                            </div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left">{{ $product->product_name }}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $product->product_desc}}</div>
                                        </td>
                                        <td class="p-2 whitespace-nowrap">
                                            <div class="text-left font-medium">{{ $product->product_price }}</div>
                                        </td>
{{--                                        <td class="p-2 whitespace-nowrap">--}}
{{--                                            <div class="text-left font-medium text-green-500">{{ $product->is_active  ? 'Active' : 'Inactive' }}</div>--}}
{{--                                        </td>--}}
                                        <td class="p-2 whitespace-nowrap">
                                            <form action="" method="POST">
                                                <a class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" style="background-color: black;" href="{{ route('edit',$product->id) }}">Edit</a>

                                                @csrf
                                                @method('DELETE')

                                                <a type="submit" href="{{ route('destroy', $product->id) }}" style="background-color: black;" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">Delete</a>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</x-app-layout>
