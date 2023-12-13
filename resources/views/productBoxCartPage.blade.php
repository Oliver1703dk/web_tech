<article class="bg-white shadow-md p-4">
    <div class="grid grid-rows-3 grid-flow-col gap-4">
        <img src={{$Product->image}} alt={{$Product->name}}>
        <h2 class="text-lg font-semibold">{{$Product->name}}</h2>
        <form method="GET" action={{ route('productPage') }}>
            @csrf
            <input type="hidden" name="product_id" value="{{ $Product->id }}">
            <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded">Click for more info</button>
        </form>
    </div>
</article>


{{--<article class="bg-white shadow-md p-4">--}}
{{--    <img src={{"../Pictures/". $ImageName}} alt={{$Product->name}}>--}}
{{--    <h2 class="text-lg font-semibold">{{$Product->name}}</h2>--}}
{{--    <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>--}}
{{--</article>--}}



