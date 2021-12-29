<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Product Details') }}
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
                        <h2 class="font-semibold text-gray-800">Product Details</h2>
                    </header>
                    <div class="w-full">
                        <div class="mt-5 md:mt-0 md:col-span-2">
                            <main class="my-8">
                                <div class="container mx-auto px-6">
                                    <div class="md:flex md:items-center">
                                        <div class="w-full h-64 md:w-1/2 lg:h-96">
                                            <img class="h-full w-full rounded-md object-cover max-w-lg mx-auto" src="/images/{{$products->product_image}}" alt="{{$products->product_name}}">
                                        </div>
                                        <div class="w-full max-w-lg mx-auto mt-5 md:ml-8 md:mt-0 md:w-1/2">
                                            <h3 class="text-gray-700 uppercase text-lg">{{$products->product_name}}</h3>
                                            <span class="text-gray-500 mt-3">{{$products->product_price}}$</span>
                                            <hr class="my-3">
                                            <div class="mt-2">
                                                <span class="text-gray-500 mt-3">{{$products->product_desc}}</span><br><br>
                                                <span class="text-gray-500 mt-3">Updated At: {{$products->created_at}}</span><br>
                                                <span class="text-gray-500 mt-3">Created At: {{$products->updated_at}}</span>
                                            </div>
                                            <div class="mt-3">
                                                <label class="text-gray-700 text-sm" for="count">Color:</label>
                                                <div class="flex items-center mt-1">
                                                    <button class="h-5 w-5 rounded-full bg-blue-600 border-2 border-blue-200 mr-2 focus:outline-none"></button>
                                                    <button class="h-5 w-5 rounded-full bg-teal-600 mr-2 focus:outline-none"></button>
                                                    <button class="h-5 w-5 rounded-full bg-pink-600 mr-2 focus:outline-none"></button>
                                                </div>
                                            </div>
{{--                                            <div class="flex items-center mt-6">--}}
{{--                                                <button class="px-8 py-2 bg-indigo-600 text-white text-sm font-medium rounded hover:bg-indigo-500 focus:outline-none focus:bg-indigo-500">Order Now</button>--}}
{{--                                                <button class="mx-2 text-gray-600 border rounded-md p-2 hover:bg-gray-200 focus:outline-none">--}}
{{--                                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>--}}
{{--                                                </button>--}}
{{--                                            </div>--}}
                                        </div>
                                    </div>
{{--                                    <div class="mt-16">--}}
{{--                                        <h3 class="text-gray-600 text-2xl font-medium">More Products</h3>--}}
{{--                                        <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">--}}
{{--                                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">--}}
{{--                                                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1563170351-be82bc888aa4?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=376&amp;q=80')">--}}
{{--                                                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="px-5 py-3">--}}
{{--                                                    <h3 class="text-gray-700 uppercase">Chanel</h3>--}}
{{--                                                    <span class="text-gray-500 mt-2">$12</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">--}}
{{--                                                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1544441893-675973e31985?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=1500&amp;q=80')">--}}
{{--                                                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="px-5 py-3">--}}
{{--                                                    <h3 class="text-gray-700 uppercase">Man Mix</h3>--}}
{{--                                                    <span class="text-gray-500 mt-2">$12</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">--}}
{{--                                                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1532667449560-72a95c8d381b?ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=750&amp;q=80')">--}}
{{--                                                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="px-5 py-3">--}}
{{--                                                    <h3 class="text-gray-700 uppercase">Classic watch</h3>--}}
{{--                                                    <span class="text-gray-500 mt-2">$12</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">--}}
{{--                                                <div class="flex items-end justify-end h-56 w-full bg-cover" style="background-image: url('https://images.unsplash.com/photo-1590664863685-a99ef05e9f61?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=crop&amp;w=345&amp;q=80')">--}}
{{--                                                    <button class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">--}}
{{--                                                        <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor"><path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>--}}
{{--                                                    </button>--}}
{{--                                                </div>--}}
{{--                                                <div class="px-5 py-3">--}}
{{--                                                    <h3 class="text-gray-700 uppercase">woman mix</h3>--}}
{{--                                                    <span class="text-gray-500 mt-2">$12</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
                                </div>
                            </main>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
