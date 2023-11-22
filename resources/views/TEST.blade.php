<!DOCTYPE html>
<html lang="en">
<head>
    <title>product page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="flex flex-col h-screen">
<header>
    <nav class="bg-white border-gray-200 px-4 lg:px-6 py-2.5 dark:bg-gray-800">
        <div class="flex flex-wrap justify-between items-center mx-auto max-w-screen-xl">
            <a href="http://127.0.0.1:8000" class="flex items-center">
                <img src="https://flowbite.com/docs/images/logo.svg" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo"/>
                <span class="self-center text-xl font-semibold whitespace-nowrap dark:text-white">AllYouNeedPC</span>
            </a>


            <form>
                <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                             xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search"
                           class="block w-[40rem] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                           placeholder="Search Mockups, Logos..." required>
                    <button type="submit"
                            class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                        Search
                    </button>
                </div>
            </form>


            <div class="flex items-center lg:order-2">
                <a href="#"
                   class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Profile
                </a>
                <a href="#"
                   class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Cart
                </a>
                <a href="#"
                   class="text-gray-800 dark:text-white hover:bg-gray-50 focus:ring-4 focus:ring-gray-300 font-medium rounded-lg text-sm px-4 lg:px-5 py-2 lg:py-2.5 mr-2 dark:hover:bg-gray-700 focus:outline-none dark:focus:ring-gray-800">
                    Log in
                </a>
            </div>
        </div>
    </nav>
</header>

<div class="flex-1">
    <div class="h-[91px] bg-amber-500"></div>

    <div class="grid grid-cols-2 gap-4">
        <div>
            <img class="h-[374px]" src="https://via.placeholder.com/1440x460" alt="Error"/>
            <p class="border-b-2 border-amber-500 mb-4 w-full"></p>
        </div>
        <div>
            <p class="text-xl font-bold">Product title</p>
            <br>
            <p class="text-xl font-bold">Price</p>
            <br>
            <p class="text-xl font-bold border-b-2 border-amber-500 mb-4 w-full">Stock status</p>

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
                    <article class="bg-white shadow-md p-4">
                        <img src="../Pictures/product1.jpg" alt="Product 1">
                        <h2 class="text-lg font-semibold">Product 1</h2>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>
                    </article>
                    <article class="bg-white shadow-md p-4">
                        <img src="../Pictures/product2.jpg" alt="Product 2">
                        <h2 class="text-lg font-semibold">Product 2</h2>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded">Add to Cart</button>
                    </article>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-[#141414] text-white p-4">
    <p>&copy; 2023 Computer Store</p>
</footer>
</body>
</html>
