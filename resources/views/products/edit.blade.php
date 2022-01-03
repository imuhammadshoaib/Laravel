<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="mt-10 sm:mt-0">
                    <header class="p-6 bg-white border-b border-gray-200" style="margin-bottom:15px;">
                        <h2 class="font-semibold text-gray-800">Edit Product Details</h2>
                    </header>
                    <div class="w-full">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <form action="{{ route('products.update',$products->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="shadow overflow-hidden sm:rounded-md">
                                    <div class="px-4 py-5 bg-white sm:p-6">
                                        <div class="grid grid-cols-6 gap-6">
                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="product_name" class="block text-sm font-medium text-gray-700">Product name</label>
                                                <input type="text" value="{{$products->product_name}}" name="product_name" autocomplete="product_name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="product_price" class="block text-sm font-medium text-gray-700">Product Price</label>
                                                <input type="number" value="{{$products->product_price}}" name="product_price" autocomplete="product_price" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <img src="/images/{{$products->product_image}}" alt="{{$products->product_name}}" class="rounded-full mb-4" width="80" height="80">
                                                <label for="product_name" class="block text-sm font-medium text-gray-700">Select Product Image</label>
                                                <input type="file"  name="product_image" autocomplete="product_image" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300">
                                            </div>

                                            <div class="col-span-6 sm:col-span-3">
                                                <label for="product_desc" class="block text-sm font-medium text-gray-700">Product Description</label>
                                                <input type="text" value="{{$products->product_desc}}" name="product_desc" autocomplete="product_desc" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="px-4 py-3 bg-gray-50 text-right sm:px-6" style="float:right; margin:15px 0;">
                                        <button style="background-color: black;" type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
