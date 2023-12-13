@extends("app")

@section("title", "index")

@section("content")

<div>
    <div class="h-[91px] bg-amber-500"></div>
    <img class="h-[460px]" src="https://via.placeholder.com/1440x460"/>
    <div class="h-48 bg-amber-500"></div>
    <div class="bg-[#141414]">
        <section class="container mx-auto p-4">
            <div class="grid grid-cols-7 gap-4">
                @foreach ($products as $product)
                    @include("productBox1", [
                        "Product" => $product
                    ])
                @endforeach
{{--                @include("productBox1", [--}}
{{--                    "Product" => new App\Models\Product([--}}
{{--                        "image"=>"https://t4.ftcdn.net/jpg/02/10/45/53/360_F_210455326_jjx8s4AaXsgTnSN423K0pzFM7VDOFGop.jpg",--}}
{{--                        "id" => 1,--}}
{{--                        "name" => "Sample Product",--}}
{{--                        "price" => 19.99,--}}
{{--                        "description" => "This is a sample product description.",--}}
{{--                        "quantity" => 10,--}}
{{--                        "product_info1" => "Info 1",--}}
{{--                        "product_info2" => "Info 2",--}}
{{--                        "product_info3" => "Info 3",--}}
{{--                        "product_info4" => "Info 4",--}}
{{--                    ])--}}
{{--                ])--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product2" ])--}}
{{--                <!-- Add more product cards here -->--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product1" ])--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product2" ])--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product1" ])--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product2" ])--}}
{{--                @include("productBox", ["ImageName" => "product1.jpg", "ProductName" => "Product1" ])--}}
            </div>
        </section>
    </div>
</div>
@endsection
