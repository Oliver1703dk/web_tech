
<article class="bg-white shadow-md p-4">
    <div class="grid grid-rows-3" style="max-height: 320px;">
        <img src="{{ $Product->image }}" style="max-height: 150px;" alt="{{ $Product->name }}">
        <h2 class="text-lg font-semibold">{{ $Product->name }}</h2>
        <form method="GET" action="{{ route('productPage') }}">
            @csrf
            <input type="hidden" name="product_id" value="{{ $Product->id }}">
            <button class="dynamicButton bg-blue-500 text-white py-2 px-4 rounded">Click For More</button>
        </form>
    </div>
</article>


