
<nav class="bg-theme-clr-primary border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 lg:py-8">
            <a href="/index.php" class="flex items-center space-x-3 rtl:space-x-reverse">
                <!-- <img src="https://lr.instantbillspay.com/assets/commonnewer/img/logo.png" class="h-8" alt="Instant Bills Pay Logo" /> -->
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white -indent-[1000000000px] | block h-8 w-40 bg-contain bg-no-repeat bg-[url('https://lr.instantbillspay.com/assets/commonnewer/img/logo.png')]">
                    Instant Bills Pay
                </span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:items-center md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-sm text-center text-on-theme-clr-primary inline-flex items-center" type="button">
                            Select Country
                            <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 4 4 4-4" />
                            </svg>
                        </button>

                        <!-- Dropdown menu -->
                        <div id="dropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign out</a>
                                </li>
                            </ul>
                        </div>

                    </li>
                    <li>

                        <form>
                            <div class="relative rounded-l-full rounded-r-full overflow-hidden">
                                <input type="text" class="relative z-0 bg-theme-clr-white text-on-theme-clr-white text-sm rounded-lg focus:border-theme-clr-primary block w-full pe-10 p-2.5" placeholder="Search Services like MTN, DSTV...">
                                <button class="absolute z-10 inset-y-0 end-0 flex items-center ps-3.5 pe-3.5 bg-primary focus:ring-primary-alt focus:border-2 focus:border-primary-alt">
                                    <i data-feather="search" class="text-on-theme-clr-white" style="width: 20px"></i>
                                </button>
                            </div>
                        </form>

                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 md:text-on-theme-clr-primary rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:p-0">
                            Login/Register
                        </a>
                    </li>
                    <!-- <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Services</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Pricing</a>
                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-blue-700 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Contact</a>
                    </li> -->
                </ul>
            </div>
        </div>
    </nav>
