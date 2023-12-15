@extends("app")

@section("title", "productPage")

@section("content")
<div class="flex-1">
    
    <form method="POST" action={{ route('addProductDB') }}>
        {{--    <form method="POST" action={{ route('addItem', ['product' => $Product->id]) }}>--}}
        @csrf

    <div class="grid grid-cols-2 gap-4 h-fit">
        <div>
{{--            <img class="h-[374px] mx-auto my-auto" src="{{ $product->image }}"  alt="Error"/>--}}
            <p class="border-b-2 border-amber-500 mb-4 w-full"></p>
        </div>
        <div>
            <p class="text-xl font-bold">Name:</p>
            <input type="name" name="name" id="name" placeholder="name"
                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                   required="">
            <br>
            <p class="text-xl font-bold">Price: kr.</p>
            <input type="price" name="price" id="price" placeholder="1234"
                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                   required="">
            <br>
            <p class="text-xl font-bold border-b-2 border-amber-500 mb-4 w-full">Qty:</p>
            <input type="qty" name="qty" id="qty" placeholder="qty"
                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                   required="">

            <div class="grid grid-cols-2">
                <div>
                    <p class="text-xl font-bold">Storage:</p>
                    <p class="text-xl font-bold">CPU:</p>
                    <p class="text-xl font-bold">RAM:</p>
                    <p class="text-xl font-bold">SSD:</p>
                </div>
                <div>
                    <input type="storage" name="storage" id="storage" placeholder="storage"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                           required="">
                    <input type="CPU" name="CPU" id="CPU" placeholder="CPU"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                           required="">
                    <input type="RAM" name="RAM" id="RAM" placeholder="RAM"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                           required="">
                    <input type="SSD" name="SSD" id="SSD" placeholder="SSD"
                           class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                           required="">
{{--                    <p class="text-xl font-bold"></p>--}}
{{--                    <p class="text-xl font-bold"></p>--}}
{{--                    <p class="text-xl font-bold"></p>--}}
{{--                    <p class="text-xl font-bold"></p>--}}
                </div>
            </div>

            <div class="h-24 border-t-2 border-b-2 border-amber-500 mb-4 w-full flex items-center justify-center">

{{--                <input type="hidden" name="product_id" value="{{ $product->id }}">--}}
                <input type="hidden" name="quantity" value="1">
                <button
                    id="cartButton"
                    class="text-white bg-amber-500 font-medium rounded-3xl hover:bg-amber-300 text-xl font-KronaOne w-48 h-10"
                    onclick="highlightButton()">
                    Add To Cart
                </button>

            </div>
        </div>
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div>
            <div class="grid grid-cols-1 border-b-2 border-amber-500 mb-4 w-full">
                <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                    Description
                </div>
            </div>
            <div>
                <p class="m-1">
{{--                    {{ $product-> description}}--}}
                </p>
                <input type="Desc" name="Desc" id="Desc" placeholder="Desc"
                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                       required="">
            </div>
        </div>
        <div>
            <div>
                <p class="text-xl font-bold">
                    Great Deals of the week:
                </p>
            </div>
            <div>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Sørger for der kun kan komme 2 productBox på den her side-->
                    <x-productBoxComponent
                        image="https://www.elgiganten.dk/image/dv_web_D1800010021488136/628230/macbook-air-15-m28256-2023-midnat.jpg"
                        title="Macbook 2023"
                        buttonText="Click for More"
                    />
                    <x-productBoxComponent
                        image="https://teleboxen.dk/media/3675/imac-blaa-front.jpg?anchor=center&mode=crop&width=800&height=800&rnd=132640907580000000"
                        title="Macbook 2023"
                        buttonText="Click for More"
                    />
                </div>
            </div>
        </div>
    </div>
    </form>
</div>

<script>
    function highlightButton() {
        var button = document.getElementById('cartButton');

        // Change color and text
        button.innerHTML = 'Added to Cart';

        // Reset color and text after 5 seconds
        setTimeout(function() {
            button.innerHTML = 'Add To Cart';
        }, 5000);
    }
</script>

@endsection
