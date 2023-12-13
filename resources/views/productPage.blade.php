@extends("app")

@section("title", "productPage")

@section("content")
    <div class="flex-1">
        <div class="h-[91px] bg-amber-500"></div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <img class="h-[374px]" src="https://via.placeholder.com/1440x460" alt="Error"/>
                <p class="border-b-2 border-amber-500 mb-4 w-full"></p>
            </div>
            <div>
                <p class="text-xl font-bold">{{ $product->name }}</p>
                <br>
                <p class="text-xl font-bold">{{ $product->price }}</p>
                <br>
                <p class="text-xl font-bold border-b-2 border-amber-500 mb-4 w-full">{{ $product->quantity }}</p>

                <div class="grid grid-cols-2">
                    <div>
                        <p class="text-xl font-bold">Product_info_1:</p>
                        <p class="text-xl font-bold">Product_info_2:</p>
                        <p class="text-xl font-bold">Product_info_3:</p>
                        <p class="text-xl font-bold">Product_info_4:</p>
                    </div>
                    <div>
                        <p class="text-xl font-bold">info_1:</p>
                        <p class="text-xl font-bold">info_2:</p>
                        <p class="text-xl font-bold">info_3:</p>
                        <p class="text-xl font-bold">info_4:</p>
                    </div>
                </div>

                <div class="h-24 border-t-2 border-b-2 border-amber-500 mb-4 w-full flex items-center justify-center">
                    <button
                        class="text-white bg-amber-500 font-medium rounded-3xl hover:bg-amber-300 text-xl font-KronaOne w-48 h-10">
                        Add To Cart
                    </button>
                    <button
                        class="text-white bg-amber-500 font-medium rounded-3xl hover:bg-amber-300 text-xl font-KronaOne w-48 h-10 ml-4">
                        Buy Now
                    </button>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div>
                <div class="grid grid-cols-5 border-b-2 border-amber-500 mb-4 w-full">
                    <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                        Features
                    </div>
                    <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                        Specification
                    </div>
                    <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                        Warranty
                    </div>
                    <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                        Review
                    </div>
                    <div class="hover:bg-amber-500 transition duration-300 ease-in-out cursor-pointer p-2 text-center">
                        Delivery
                    </div>
                </div>
                <div>
                    <p class="m-1">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt ut labore et dolore
                        magna aliqua. Ut enim ad minim veniam, quis nostrud
                        exercitation ullamco laboris nisi ut aliquip ex
                        ea commodo consequat. Duis aute irure dolor in
                        reprehenderit in voluptate velit esse cillum dolore eu
                    </p>
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
{{--                        @foreach($products as $product)--}}
{{--                            @include("productBox", ["ImageName" => $product->name.".jpg", "ProductName" => $product->name])--}}
{{--                        @endforeach--}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
