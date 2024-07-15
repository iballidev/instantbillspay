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
                            <div aria-label="MTN network" class="h-full max-w-24 flex items-center justify-center p-4">
                                <img src="./assets/images/brands/mtn-new-logo.svg" alt="MTN network" class="w-full">
                            </div>
                            <form action="" class="p-2 md:p-4">
                                Form
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