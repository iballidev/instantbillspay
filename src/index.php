<!-- head -->
<?php include(__DIR__ . "./includes/head.php"); ?>

<!-- toolbar -->
<?php include(__DIR__ . "./components/toolbar.php"); ?>



<div class="max-w-screen-xl mx-auto p-4 lg:py-8">

    <div class="grid grid-cols-12 gap-4 md:gap-8">
        <div class="sidenav hidden md:block | col-span-12 md:col-span-3 fixed md:relative top-0 bottom-0 left-0 right-0 z-10 px-4 py-8 bg-black/50 md:bg-transparent md:px-0 md:py-0">
            <!-- Sidenav -->
            <button id="close-sidenav-btn" class="md:hidden w-8 h-8 border border-theme-clr-primary text-theme-clr-primary rounded-lg mb-2">
                <i class="fas fa-caret-right"></i>
            </button>

            <div class="">
                <nav class="flex flex-col space-y-4" id="tabs-nav">
                    <a href="?tab=1" class="tab-link bg-theme-clr-primary-alt | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="bg-theme-clr-primary | flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-mobile-alt"></i>
                        </span>
                        Mobile/Toll E-TopUp
                    </a>
                    <a href="?tab=2" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-tv"></i>
                        </span>
                        TV/Cable
                    </a>
                    <a href="?tab=3" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="far fa-lightbulb"></i>
                        </span>
                        Utilities
                    </a>
                    <a href="?tab=4" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-plane"></i>
                        </span>
                        Travels
                    </a>
                    <a href="?tab=5" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-graduation-cap"></i>
                        </span>
                        Schools
                    </a>
                    <a href="?tab=6" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-lightbulb"></i>
                        </span>
                        Micro Pension
                    </a>
                    <a href="?tab=7" class="base-text tab-link bg-white | flex items-center gap-2 uppercase text-white rounded-l-full rounded-r-full font-medium text-sm">
                        <span class="| flex items-center justify-center rounded-full h-14 w-14">
                            <i class="fas fa-arrow-up"></i>
                        </span>
                        All Billers
                    </a>
                </nav>
            </div>
        </div>
        <div class="col-span-12 md:col-span-9">
            <button id="open-sidenav-btn" class="md:hidden w-8 h-8 border border-theme-clr-primary text-theme-clr-primary rounded-lg mb-2">
                <i class="fas fa-caret-left"></i>
            </button>
            <div class="bg-gray-100 p-2 md:p-6 rounded-2xl">
                <div class="mx-auto bg-white shadow-md rounded-2xl">
                    <div id="tab-contents">
                        <div id="tab1" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/mobile-toll-e-top-up.php") ?>
                        </div>
                        <div id="tab2" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/tv-cable.php") ?>
                        </div>
                        <div id="tab3" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/utilities.php") ?>
                        </div>
                        <div id="tab4" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/travels.php") ?>
                        </div>
                        <div id="tab5" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/schools.php") ?>
                        </div>
                        <div id="tab6" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/micro-pension.php") ?>
                        </div>
                        <div id="tab7" class="tab-content p-4 hidden">
                            <?php include(__DIR__ . "./views/all-billers.php") ?>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>







<!-- footer -->
<?php include(__DIR__ . "./components/footer.php"); ?>

<!-- foot -->
<?php include(__DIR__ . "./includes/foot.php"); ?>