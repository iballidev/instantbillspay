<!-- head -->
<?php include("./includes/head.php"); ?>
<div>
    <!-- toolbar -->
    <?php include("./components/toolbar.php"); ?>

    <div class="mg-main-container p-2 md:p-4 lg:py-8">
        <div class="grid grid-cols-12 gap-4 md:gap-8">
            <div class="sidenav hide md:block | col-span-12 md:col-span-3 fixed md:relative top-0 bottom-0 z-10 px-4 py-8 bg-black/50 md:bg-transparent md:px-0 md:py-0">
                <!-- Sidenav -->
                <?php include("./components/sidenav.php"); ?>

            </div>
            <div class="col-span-12 md:col-span-9">
                <button id="open-sidenav-btn" class="md:hidden w-8 h-8 border border-theme-clr-primary text-theme-clr-primary rounded-lg mb-2">
                    <i class="fas fa-caret-right"></i>
                </button>
                <div class="bg-gray-100 p-2 md:p-6 rounded-2xl">
                    <div class="mx-auto bg-white shadow-md rounded-2xl">
                        <div id="tab-contents">
                            <div id="tab1" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/mobile-toll-e-top-up.php") ?>
                            </div>
                            <div id="tab2" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/tv-cable.php") ?>
                            </div>
                            <div id="tab3" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/utilities.php") ?>
                            </div>
                            <div id="tab4" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/travels.php") ?>
                            </div>
                            <div id="tab5" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/schools.php") ?>
                            </div>
                            <div id="tab6" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/micro-pension.php") ?>
                            </div>
                            <div id="tab7" class="tab-content p-2 md:p-4 hidden">
                                <?php include("./views/all-billers.php") ?>
                            </div>
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