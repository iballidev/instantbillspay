<!-- head -->
<?php include("./includes/head.php"); ?>
<div>
    <!-- toolbar -->
    <?php include("./components/toolbar.php"); ?>

    <div class="mg-main-container p-2 md:p-4 lg:py-8">
        <div class="grid grid-cols-12 gap-4 md:gap-8">
            <div class="sidenav hide md:block | col-span-12 md:col-span-3 fixed md:relative top-0 bottom-0 z-10 px-4 py-8 bg-black/50 md:bg-transparent md:px-0 md:py-0">
                <!-- Sidenav -->
                <?php include("./components/mobile-and-toll-topup-sidenav.php"); ?>

            </div>
            <div class="col-span-12 md:col-span-9">
                <button id="open-sidenav-btn" class="md:hidden w-8 h-8 border border-theme-clr-primary text-theme-clr-primary rounded-lg mb-2">
                    <i class="fas fa-caret-right"></i>
                </button>
                <div class="bg-gray-100 p-2 md:p-6 rounded-2xl">
                    <div class="mx-auto bg-white shadow-md rounded-2xl">
                        <div id="tab-contents">
                            <div aria-label="MTN network" class="h-full max-w-36 flex items-center justify-center p-4">
                                <img src="./assets/images/brands/mtn-new-logo.svg" alt="MTN network" class="w-full">
                            </div>


                            <form class="p-2 md:p-4">
                                <div class="mb-5">
                                    <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
                                    <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="name@flowbite.com" required />
                                </div>
                                <div class="mb-5">
                                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
                                    <input type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                </div>
                                <div class="flex items-start mb-5">
                                    <div class="flex items-center h-5">
                                        <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                                    </div>
                                    <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Remember me</label>
                                </div>
                                <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                            </form>

                        </div>
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