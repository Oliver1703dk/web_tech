@extends("app")

@section("title", "productPage")

@section("content")

    <div class="grid grid-cols-2 gap-4 bg-amber-500">

        <!-- User's products Section -->
        <div>
            <div class="grid grid-cols-2 gap-4 m-10">
                <!-- Produkter nedenunder er ikke dem der er i users cart-->
                @include("productBox")
                @include("productBox")
                @include("productBox")
                @include("productBox")
            </div>
        </div>

        <!-- Cart Items Section -->
        <div class="m-10">
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-lg font-semibold mb-4">Summary</h2>
                <div class="flex justify-between mb-2">
                    <span>Subtotal</span>
                    <span>$19.99</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Taxes</span>
                    <span>$1.99</span>
                </div>
                <div class="flex justify-between mb-2">
                    <span>Shipping</span>
                    <span>$0.00</span>
                </div>
                <hr class="my-2">
                <div class="flex justify-between mb-2">
                    <span class="font-semibold">Total</span>
                    <span class="font-semibold">$21.98</span>
                </div>
                <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
            </div>

            <!-- Deals of the Week Section -->
            <div class="mt-10">
                <div>
                    <p class="text-xl font-bold">
                        Great Deals of the week:
                    </p>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <!-- Sørger for der kun kan komme 2 productBox på den her side-->
                    @include("productBox")
                    @include("productBox")
                </div>
            </div>
        </div>

    </div>
@endsection
