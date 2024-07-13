<h1 class="text-xl font-bold mb-4">Create an account</h1>
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