<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Index</title>
    <script src="https://cdn.tailwindcss.com"></script>
<body>
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
                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                        </svg>
                    </div>
                    <input type="search" id="default-search" class="block w-[40rem] p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search Mockups, Logos..." required>
                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Search</button>
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


<div class="flex flex-wrap mx-auto max-w-screen-xl p-5">

    <form method="POST" action={{route('userRegPost')}}>
    <div class="w-full lg:w-1/2 p-5">
        <span>Customer Information</span>

        <div class="grid grid-cols-2 gap-4 p-5">
            <input type="text" name="firstName" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="First name*">
            <input type="text" name="lastName" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="Last name*">
        </div>
        <div class="grid grid-cols-1 gap-4 p-5">
            <input type="text" name="address" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="Address*">
        </div>
        <div class="grid grid-cols-1 gap-4 p-5">
            <input type="text" name="apartment" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="Apartment (optional)">
        </div>
        <div class="grid grid-cols-2 gap-4 p-5">
            <input type="text" name="zipcode" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="Zipcode*">
            <input type="text" name="city" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="City*">
        </div>
        <div class="grid grid-cols-1 gap-4 p-5">
            <input type="text" name="phone" class="border rounded h-10 w-full focus:outline-none p-5" placeholder="Phone Number*">
        </div>
        <button class="mt-4 w-full bg-yellow-500 text-white p-2 rounded hover:bg-yellow-600 transition-colors duration-200">
            Check Out
        </button>
    </div>
    </form>


    <div class="w-full lg:w-1/2 p-5">

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





</body>
<html>
