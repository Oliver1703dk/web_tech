<article class="bg-white shadow-md p-4">
    <div class="border p-4">
        <h3 class="text-lg font-bold">{{ $item['product']->name }}</h3>
        {{--                                <p>{{ $item['product']->description }}</p>--}}
        <p>Price: ${{ $item['product']->price }}</p>
        <p>Quantity: {{ $item['quantity'] }}</p>
        <!-- Add more item details as needed -->
    </div>
</article>

@foreach ($products['product'] as $product)
    @include("productBox1", [
        "Product" => $product
    ])
@endforeach




{{--<article class="bg-white shadow-md p-4">--}}
{{--    <img src={{"../Pictures/". $ImageName}} alt={{$Product->name}}>--}}
{{--    <h2 class="text-lg font-semibold">{{$Product->name}}</h2>--}}
{{--    <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>--}}
{{--</article>--}}



