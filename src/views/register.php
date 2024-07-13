<h1 class="text-xl font-bold mb-4">Create an account</h1>


<div id="registration-error-alert" class="flex items-center p-4 mb-4 text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
    <svg class="flex-shrink-0 w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z" />
    </svg>
    <span class="sr-only">Error</span>
    <div class="ms-3 text-sm font-medium">
        <p>Provide required information</p>
    </div>
    <button type="button" class="ms-auto -mx-1.5 -my-1.5 bg-red-50 text-red-500 rounded-lg focus:ring-2 focus:ring-red-400 p-1.5 hover:bg-red-200 inline-flex items-center justify-center h-8 w-8 dark:bg-gray-800 dark:text-red-400 dark:hover:bg-gray-700" data-dismiss-target="#registration-error-alert" aria-label="Close">
        <span class="sr-only">Close</span>
        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
        </svg>
    </button>
</div>


<form>
    <div class="grid grid-cols-12 gap-4 mb-4">
        <div class="col-span-12 md:col-span-6">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">First Name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Last Name</label>
            <input type="text" id="first_name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Email Address</label>
            <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="mobile_number" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Mobile Phone Number</label>
            <input type="tel" id="mobile_number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Password</label>
            <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12 md:col-span-6">
            <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Confirm Password</label>
            <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
        </div>
        <div class="col-span-12">
            <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">How did you hear about Us?</label>
            <select id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                <option selected>Choose an option</option>
                <option value="google">Google</option>
                <option value="facebook">Facebook</option>
                <option value="twitter">Twitter</option>
                <option value="a-friend">A Friend</option>
                <option value="uba-staff">UBA Staff</option>
                <option value="us-embassy">US Embassy</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="col-span-12">
            <div class="custom-check flex items-start">
                <input id="is-subscribe-to-ewletter" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-theme-clr-primary" required />
                <label for="is-subscribe-to-ewletter" class="text-sm font-medium text-gray-900">
                    <span class="fake-box"></span>
                    <span> Subscribe to our newsletter</span>
                </label>
            </div>
        </div>
        <div class="col-span-12">
            <div class="custom-check flex items-start">
                <input id="is-accept-terms-and-condition" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-theme-clr-primary" required />
                <label for="is-accept-terms-and-condition" class="text-sm font-medium text-gray-900">
                    <span class="fake-box"></span>
                    <span> I agree with the <a target="_blank" href="https://www.ubagroup.com/privacy-policy/" class="text-theme-clr-primary hover:text-red-700 font-semibold">Privacy Policy</a> and <a target="_blank" href="https://www.ubagroup.com/terms-conditions/" class="text-theme-clr-primary hover:text-red-700 font-semibold">Terms and Conditions</a> on this site</span>
                </label>
            </div>
        </div>


    </div>



    <!-- validator control -->

    <div class="my-4 border p-2">
        <label for="username-error" class="block mb-2 text-sm font-medium text-red-700 dark:text-red-500 required">Email Address</label>
        <input type="text" id="username-error" class="bg-red-50 border border-red-500 text-red-900 placeholder-red-700 text-sm rounded-lg focus:ring-red-500 dark:bg-gray-700 focus:border-red-500 block w-full p-2.5 dark:text-red-500 dark:placeholder-red-500 dark:border-red-500" placeholder="Bonnie Green">
        <p class="mt-2 text-sm text-red-600 dark:text-red-500"><span class="font-medium">Oops!</span> Email already registered!</p>
    </div>

    <button type="submit" class="text-white bg-theme-clr-primary hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
        Register
    </button>
</form>