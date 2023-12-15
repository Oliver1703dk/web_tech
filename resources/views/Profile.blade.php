@extends("app")

@section("title", "productPage")

@section("content")

    <div class="h-screen">
        <h1>Profile</h1>

        <p>Email: {{ $userEmail }}</p>

        <h2>Change Password</h2>
        <form action="{{ route('profile.changePassword') }}" method="post">
            @csrf

            <label for="oldPassword">Old Password:</label>
            <input type="password" id="oldPassword" name="oldPassword" required>
            @error('oldPassword')
            <p class="error">{{ $message }}</p>
            @enderror
            <br>
            <label for="newPassword">New Password:</label>
            <input type="password" id="newPassword" name="newPassword" required>
            @error('newPassword')
            <p class="error">{{ $message }}</p>
            @enderror
            <br>
            <label for="newPasswordConfirmation">Confirm Password:</label>
            <input type="password" id="newPasswordConfirmation" name="newPasswordConfirmation" required>
            <br>
            <button type="submit">Change Password</button>
        </form>
    </div>

    <section class="bg-amber-500">
        <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
            <div
                class="w-full bg-sky-300 rounded-lg shadow md:mt-0 sm:max-w-md xl:p-0">
                <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
                    <h1 class="text-xl font-bold leading-tight tracking-tight text-white md:text-2xl">
                        Profile
                    </h1>
                    <form class="space-y-4 md:space-y-6" action="#">
                        <div>
                            <label for="email" class="block mb-2 text-m font-bold text-white">
                                Your email:
                            </label>
                            <p>Email: {{ $userEmail }}</p>
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">
                                Old Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">
                                New Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   required="">
                        </div>

                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-white">
                                Confirm Password
                            </label>
                            <input type="password" name="password" id="password" placeholder="••••••••"
                                   class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5"
                                   required="">
                        </div>

                        <button type="submit" class="text-white bg-amber-500 font-medium rounded-3xl  hover:bg-amber-300 text-5xl font-KronaOne w-96 h-14">
                            Change Password
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

@endsection