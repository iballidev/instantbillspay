<!-- head -->
<?php include("./includes/head.php"); ?>
<div>
    <!-- toolbar -->
    <?php include("./components/toolbar.php"); ?>

    <div class="mg-main-container p-2 md:p-4 lg:py-8">
        <div class="grid grid-cols-12 gap-4 md:gap-8">
            <div class="col-span-12 md:col-span-5">
                <h1 class="text-2xl font-bold text-black">Set New Password</h1>
                <p class="text-lg font-semibold text-black">Enter your new password. Minimum is 6 characters.
                    Ensure your password is kept safe.</p>
            </div>
            <div class="col-span-12 md:col-span-7">

                <div class="bg-gray-100 p-2 md:p-6 rounded-2xl">
                    <div class="mx-auto bg-white shadow-md rounded-2xl p-4 md:p-6">
                        <form>
                            <div class="grid grid-cols-12 gap-4 mb-4">

                                <div class="col-span-12">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">New Password</label>
                                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="col-span-12">
                                    <label for="confirm_password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white required">Confirm New Password</label>
                                    <input type="password" id="confirm_password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>

                            </div>
                            <button type="submit" class="text-white bg-theme-clr-primary hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-8 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                                Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>



<!-- footer -->
<?php include("./components/footer.php"); ?>

<!-- foot -->
<?php include("./includes/foot.php"); ?>