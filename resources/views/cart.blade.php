@extends("app")

@section("title", "cart")

@section("content")
<div>
    <h2 class="text-lg font-bold mb-3">Cart: <span id="cart-count">0</span></h2>
</div>

<!-- Cart Items Section -->
<div class="flex-1 px-2">
    <h2 class="text-lg font-bold mb-3">Cart</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4"></div>




            <div class="w-full lg:w-1/2 p-5">

                <div class="flex flex-col md:flex-row">
                    <h2 class="text-lg font-bold mb-3">Cart</h2>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                        @foreach ($cartItems as $item)
                            <div class="border p-4">
                                <h3 class="text-lg font-bold">{{ $item['product']->name }}</h3>
{{--                                <p>{{ $item['product']->description }}</p>--}}
                                <p>Price: ${{ $item['product']->price }}</p>
                                <p>Quantity: {{ $item['quantity'] }}</p>
                                <!-- Add more item details as needed -->
                            </div>
                        @endforeach
                    </div>



                    <div id="summaryBox" class="max-w-sm lg:mx-0 mx-auto bg-white shadow-lg rounded-lg overflow-hidden">
                    <div class="p-5">
                        <h3 class="text-lg font-semibold">Summary</h3>
                        <div class="space-y-2 mt-3">
                            <div class="flex justify-between">
                                <span>Subtotal:</span>
                                <span id="subtotalPrice">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Tax:</span>
                                <span id="taxPrice">-</span>
                            </div>
                            <div class="flex justify-between">
                                <span>Delivery:</span>
                                <span id="deliveryPrice">-</span>
                            </div>
                            <div class="border-t border-gray-200 pt-2 mt-2">
                                <div class="flex justify-between font-semibold">
                                    <span>Total:</span>
                                    <span id="totalPrice">-</span>
                                </div>
                            </div>
                        </div>
                        <button class="mt-4 w-full bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600 transition-colors duration-200">
                            Discount or gift card
                        </button>
                    </div>
                </div>
            </div>
        </div>
    <!-- Deals of the Week Section -->
    <div class="px-2 mt-5">
        <h2 class="text-lg font-bold mb-3">Great Deals of the Week</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <!-- Example deal item -->
            <div class="bg-black rounded-lg p-4 flex items-center justify-center">
                <!-- Image -->
                <img class="h-24" src="resources/Pictures/product2.jpg" alt="Deal Product">
            </div>
            <!-- Repeat for each deal item... -->
        </div>
    </div>
@endsection


