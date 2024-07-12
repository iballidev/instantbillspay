<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instant Bills Pay</title>
    <!-- flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <!-- tailwindcss stylesheet -->
    <link rel="stylesheet" href="./stylesheets/tailwindcss/output.css">
    <!-- feather-icons -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <!-- toolbar -->
    <nav class="bg-theme-clr-primary border-gray-200 dark:bg-gray-900">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4 lg:py-8">
            <a href="https://flowbite.com/" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="https://flowbite.com/docs/images/logo.svg" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Flowbite</span>
            </a>
            <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15" />
                </svg>
            </button>
            <div class="hidden w-full md:block md:w-auto" id="navbar-default">
                <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:items-center md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 md:bg-transparent dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown" class="text-sm text-center inline-flex items-center" type="button">
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
                                <input type="text" class="relative z-0 bg-theme-clr-white text-on-theme-clr-white text-sm rounded-lg focus:border-primary-alt block w-full pe-10 p-2.5" placeholder="Search Services like MTN, DSTV...">
                                <button class="absolute z-10 inset-y-0 end-0 flex items-center ps-3.5 pe-3.5 bg-primary focus:ring-primary-alt focus:border-2 focus:border-primary-alt">
                                    <i data-feather="search" class="text-on-theme-clr-white" style="width: 20px"></i>
                                </button>
                            </div>
                        </form>

                    </li>
                    <li>
                        <a href="#" class="block py-2 px-3 text-gray-900 md:text-white rounded hover:bg-gray-100 md:hover:bg-transparent md:border-0 md:hover:font-semibold hover:font-semibold md:p-0">
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


    <div class="bg-gray-100 p-6">

        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg">
            <div class="border-b">
                <nav class="flex space-x-4" id="tabs-nav">
                    <a href="?tab=1" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 1</a>
                    <a href="?tab=2" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 2</a>
                    <a href="?tab=3" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 3</a>
                </nav>
            </div>
            <div id="tab-contents">
                <div id="tab1" class="tab-content p-4 hidden">
                    <p>Content for Tab 1</p>
                </div>
                <div id="tab2" class="tab-content p-4 hidden">
                    <p>Content for Tab 2</p>
                </div>
                <div id="tab3" class="tab-content p-4 hidden">
                    <p>Content for Tab 3</p>
                </div>
            </div>
        </div>

        <script>
            // Get URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab') || '1';

            // Hide all tab contents and remove active classes from all tab links
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
            document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('border-blue-500', 'text-blue-500'));

            // Show the active tab content and add active class to the corresponding tab link
            document.querySelector(`#tab${tab}`).classList.remove('hidden');
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).classList.add('border-blue-500', 'text-blue-500');
        </script>
    </div>




    <!-- tailwindcss js -->
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
    <!-- feather-icon -->
    <script>
        feather.replace();
    </script>
</body>

</html>