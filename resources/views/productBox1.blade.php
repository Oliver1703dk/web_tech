<article class="bg-white shadow-md p-4">
    <img src={{$Product->image}} alt={{$Product->name}}>
    <h2 class="text-lg font-semibold">{{$Product->name}}</h2>
    <form method="POST" action={{ route('addItem') }}>
{{--    <form method="POST" action={{ route('addItem', ['product' => $Product->id]) }}>--}}
        @csrf
        <input type="hidden" name="product_id" value="{{ $Product->id }}">
        <input type="hidden" name="quantity" value="1">
        <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>
    </form>
</article>


{{--<article class="bg-white shadow-md p-4">--}}
{{--    <img src={{"../Pictures/". $ImageName}} alt={{$Product->name}}>--}}
{{--    <h2 class="text-lg font-semibold">{{$Product->name}}</h2>--}}
{{--    <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>--}}
{{--</article>--}}



