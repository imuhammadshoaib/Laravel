<div class="py-12">
    <div class="bg-white max-w-7xl mx-auto sm:px-6 lg:px-8 py-6">
        <div class="grid grid-cols-3 gap-4">
            @foreach ($products as $product)
                <a href="{{ route('productdetails',$product->id)}}" class="group">
                    <div class="w-full aspect-w-1 aspect-h-1 bg-gray-200 rounded-lg overflow-hidden xl:aspect-w-7 xl:aspect-h-8">
                            <img src="/images/{{ $product->product_image }}" alt="Tall slender porcelain bottle with natural clay textured body and cork stopper." class="w-full h-full object-center object-cover group-hover:opacity-75">
                    </div>
                    <h3 class="mt-4 text-sm text-gray-700">
                        {{ $product->product_name }}
                    </h3>
                    <h3 class="mt-4 text-sm text-gray-700">
                        {{ $product->product_desc }}
                    </h3>
                    <p class="mt-1 text-lg font-medium text-gray-900">
                        {{ $product->product_price }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</div>


