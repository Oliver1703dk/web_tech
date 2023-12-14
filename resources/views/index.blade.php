@extends("app")

@section("title", "index")

@section("content")

    <div>
        <div class="h-[91px] bg-amber-500">
            <img class="object-fill h-full w-full" src="https://static.vecteezy.com/system/resources/thumbnails/010/504/213/small/of-halloween-sale-promotion-poster-or-banner-with-halloween-pumpkin-ghost-candlelight-buntings-and-halloween-elements-website-spooky-background-or-banner-halloween-template-vector.jpg">
        </div>
        <div class="h-[460px]">
            <img class="object-fill h-full w-full" src="https://s3-alpha-sig.figma.com/img/413f/1a75/95cc4dcd21037a3b46cf4a98c8d41f3d?Expires=1703462400&Signature=QdwEF797PItII3plkMVC-w9J4Jj-RsFn4AJuvF35kfWyPr-24hiQbeLxTYGGJhlNTNLNzH0be3uz-lw6Di53kAQbe~7fcoX95sqKCYmwfPh6RGYjq0a1QawtRPemT5rkU-~M~lj5RQjzjO5hY1WzBZ4zwrimdJEUlvCgLAeFHF9KHm5qae4g6kvCxtzlccfJbiTCNZB3FP66JEWcSf1JnAsve8cnnD~Gm5jB~b7ZnQTJRWvuuJf0K10jRtOEkkrP~fIlTLYK-ZAt1ClxD~y3vZP0FpngizT61y8cf7eVRXKIaaQd-~Q5wePZGi58RraX0AQvBXL4fRg36nAEez5BxA__&Key-Pair-Id=APKAQ4GOSFWCVNEHN3O4"/>
        </div>
        <div class="h-48 grid grid-cols-3 gap-4 bg-amber-500">
            <div>
                <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" viewBox="0 0 100 100" fill="none">
                    <path d="M50 0L0 12.5V75L50 100L100 75V12.5L50 0ZM50 6.25L63.125 9.375L26.25 21.25L11.875 16.25L50 6.25ZM50 93.125L6.25 71.25V20.625L25 26.875V48.125L31.25 50V29.375L50 35.625V93.125ZM53.125 30L36.25 24.375L75 12.5L90 16.25L53.125 30Z" fill="#444444"/>
                </svg>
            </div>
            <div>2</div>
            <div>3</div>
        </div>
        <div class="bg-[#141414]">
            <section class="container mx-auto p-4">
                <div class="grid grid-cols-7 gap-4">
                    @foreach ($products as $product)
                        @include("components.productBoxData", [
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
