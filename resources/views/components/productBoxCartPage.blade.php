{{--<article class="bg-white shadow-md p-4">--}}
{{--    <div class="border p-4">--}}
{{--        <h3 class="text-lg font-bold">{{ $item['product']->name }}</h3>--}}
{{--        --}}{{--                                <p>{{ $item['product']->description }}</p>--}}
{{--        <p>Price: ${{ $item['product']->price }}</p>--}}
{{--        <p>Quantity: {{ $item['quantity'] }}</p>--}}
{{--        <!-- Add more item details as needed -->--}}
{{--    </div>--}}
{{--</article>--}}

<article class="bg-white shadow-md p-4 rounded-lg flex flex-col items-center h-fit">
    <img src="https://static.thenounproject.com/png/1226185-200.png">
    <h2 class="text-lg font-semibold">{{ $Product['product']->name }}</h2>
    <p>Price: ${{ $Product['product']->price }}</p>
    <div class="grid grid-cols-2 gap-4 mb-3">
    <p>Quantity: {{ $Product['quantity'] }}</p>

        <form method="POST" action={{ route('minusQuantity') }}>
            @csrf
            <input type="hidden" name="product_id" value="{{ $Product['product']->id }}">
            <button type="submit" class="bg-red-500 text-white rounded w-10">-</button>
        </form>
    </div>
    <div>
        <form method="GET" action={{ route('productPage') }}>
            @csrf
            <input type="hidden" name="product_id" value="{{ $Product['product']->id }}">
            <button class="bg-blue-500 text-white py-2 px-4 rounded">Click for More</button>
        </form>
    </div>
</article>



{{--@foreach ($products['product'] as $product)--}}
{{--    @include("productBoxCartPage", [--}}
{{--        "Product" => $product--}}
{{--    ])--}}
{{--@endforeach--}}




{{--<article class="bg-white shadow-md p-4">--}}
{{--    <img src={{"../Pictures/". $ImageName}} alt={{$Product->name}}>--}}
{{--    <h2 class="text-lg font-semibold">{{$Product->name}}</h2>--}}
{{--    <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>--}}
{{--</article>--}}



