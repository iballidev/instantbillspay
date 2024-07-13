<nav class="bg-theme-clr-primary border-gray-200 dark:bg-gray-900">
    <div class="mg-main-container flex flex-wrap items-center justify-between mx-auto p-4 lg:py-8">
        <a href="/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
            <!-- <img src="https://lr.instantbillspay.com/assets/commonnewer/img/logo.png" class="h-8" alt="Instant Bills Pay Logo" /> -->
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white -indent-[1000000000px] | block h-8 w-40 bg-contain bg-no-repeat bg-[url('https://lr.instantbillspay.com/assets/commonnewer/img/logo.png')]">
                Instant Bills Pay
            </span>
        </a>
        <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-on-theme-clr-primary rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul class="font-medium flex flex-col gap-2 p-0 mt-4 rounded-lg md:flex-row md:items-center md:space-x-4 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent">

                <li>

                    <form>
                        <div class="relative rounded-l-full rounded-r-full overflow-hidden">
                            <input type="text" class="w-full md:w-[120px] md:hover:w-[150px] md:focus:w-[220px] transition-all delay-150 ease-in-out relative z-0 bg-theme-clr-white text-on-theme-clr-white text-sm rounded-lg focus:border-theme-clr-primary block pe-10 p-2.5" placeholder="Search Services like MTN, DSTV...">
                            <button class="absolute z-10 inset-y-0 end-0 flex items-center ps-3.5 pe-3.5 bg-primary">
                                <i data-feather="search" class="text-on-theme-clr-white" style="width: 20px"></i>
                            </button>
                        </div>
                    </form>

                </li>
                <li>
                    <ul class="flex items-center justify-between flex-wrap gap-2 md:gap-4">
                        <li>
                            <button id="country-list-dropdownButton" data-dropdown-toggle="country-list-dropdown" class="whitespace-nowrap py-2 text-center text-on-theme-clr-primary inline-flex items-center" type="button">
                                <div class="flex items-center gap-2"><span> Select Country</span>
                                    <div class="w-4 h-2 overflow-hidden rounded-sm">
                                        <img src="https://lr.instantbillspay.com/assets/common/img/flag/lr.gif" alt="">
                                    </div>
                                </div>
                                <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                </svg>
                            </button>

                            <!-- CountryList menu -->
                            <div id="country-list-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow md:w-44 dark:bg-gray-700">
                                <ul class="max-h-40 overflow-y-auto py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="country-list-dropdownButton">

                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/gh.gif" alt="Ghana">
                                            </div>
                                            Ghana
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                            <div class="w-4 h-2 overflow-hidden rounded-sm">
                                                <img src="https://lr.instantbillspay.com/assets/common/img/flag/ng.gif" alt="Nigeria">
                                            </div>
                                            Nigeria
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </li>
                        <li>
                            <div class="flex items-center">
                                <!-- toggle 'hidden' class -->
                                <a href="auth.php" class="block py-2 md:px-3 text-on-theme-clr-primary md:hover:bg-transparent md:border-0 md:p-0">
                                    Login/Register
                                </a>
                                <!-- toggle 'hidden' class -->
                                <div class="">
                                    <button id="profile-dropdown-button" data-dropdown-toggle="user-profile-dropdown" class="py-2 text-center text-on-theme-clr-primary inline-flex items-center" type="button">
                                        <div class="flex items-center gap-2 whitespace-nowrap">Hi Ibrahim! </div>
                                        <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                                        </svg>
                                    </button>

                                    <!-- User profile menu -->
                                    <div id="user-profile-dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow md:w-44 dark:bg-gray-700">
                                        <ul class="max-h-40 overflow-y-auto py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="profile-dropdown-button">

                                            <li>
                                                <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                                    My transaction
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex gap-2 items-center px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">

                                                    My profile
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#" class="flex gap-2 items-center px-4 py-2 text-red-500 hover:text-red-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">
                                                    Logout
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>