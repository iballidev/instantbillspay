<!-- head -->
<?php include(__DIR__ . "./includes/head.php"); ?>

<!-- toolbar -->
<?php include(__DIR__ . "./components/toolbar.php"); ?>



<div class="max-w-screen-xl mx-auto p-4 lg:py-8">

    <div class="grid grid-cols-12 gap-8">
        <div class="col-span-12 md:col-span-3">
            Sidenav
        </div>
        <div class="col-span-12 md:col-span-9">
            Main
        </div>
    </div>
</div>



<div class="bg-gray-100 p-6">

    <div class="mx-auto bg-white shadow-md rounded-lg">
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