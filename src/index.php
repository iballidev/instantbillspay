<!-- head -->
<?php include(__DIR__ . "./includes/head.php"); ?>

<!-- toolbar -->
<?php include(__DIR__ . "./components/toolbar.php"); ?>



<div class="max-w-screen-xl mx-auto p-4 lg:py-8">

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-3">
            <!-- Sidenav -->

            <div class="">
                <nav class="flex flex-col space-y-4" id="tabs-nav">
                    <a href="?tab=1" class="tab-link bg-theme-clr-primary-alt | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="bg-theme-clr-primary | flex items-center justify-center rounded-full h-14 w-14">
                            <i data-feather="smartphone" class="text-on-theme-clr-white" style="width: 30px"></i>
                        </span>
                        Mobile/Toll E-TopUp
                    </a>
                    <a href="?tab=2" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="far fa-lightbulb"></i>
                        </span>
                        Utilities
                    </a>
                    <a href="?tab=2" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-plane"></i>
                        </span>
                        Travels
                    </a>
                    <a href="?tab=2" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-graduation-cap"></i>
                        </span>
                        Schools
                    </a>
                    <a href="?tab=2" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-arrow-up"></i>
                        </span>
                        All Billers
                    </a>
                </nav>
            </div>
        </div>
        <div class="col-span-12 md:col-span-9">


            <div class="bg-gray-100 p-6 rounded-2xl">

                <div class="mx-auto bg-white shadow-md rounded-2xl">
                    <!-- <div class="border-b">
            <nav class="flex space-x-4" id="tabs-nav">
                <a href="?tab=1" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 1</a>
                <a href="?tab=2" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 2</a>
                <a href="?tab=3" class="tab-link py-4 px-6 block border-b-2 font-medium text-sm">Tab 3</a>
            </nav>
        </div> -->
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
                        <div id="tab4" class="tab-content p-4 hidden">
                            <p>Content for Tab 4</p>
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

        </div>
    </div>
</div>




<!-- tailwindcss js -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>
<!-- feather-icon -->
<script>
    feather.replace();
</script>
</body>

</html>