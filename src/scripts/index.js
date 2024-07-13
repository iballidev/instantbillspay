
document.addEventListener("DOMContentLoaded", () => {


    const Init = () => {
        handlePageLoader();
        toggleSideNav();
    }



    function toggleSideNav() {

        const opensideNavBtn = document.querySelector("#open-sidenav-btn");
        const closesideNavBtn = document.querySelector("#close-sidenav-btn");
        const sidenav = document.querySelector(".sidenav");
        const appendedClass = "hide";
        if (opensideNavBtn) opensideNavBtn.addEventListener("click", () => {
            if (!sidenav) {
                return
            }

            if (sidenav.classList.contains(appendedClass)) sidenav.classList.remove(appendedClass)
        })
        if (closesideNavBtn) closesideNavBtn.addEventListener("click", () => {
            if (!sidenav) {
                return
            }

            if (!sidenav.classList.contains(appendedClass)) sidenav.classList.add(appendedClass)
        });

    }
    function handlePageLoader() {
        /**remove page loader */
        const page_loader = document.querySelector(".page-loader");
        page_loader?.classList.contains("show") ?
            page_loader.classList.remove("show") :
            null;
    }

    Init();

})