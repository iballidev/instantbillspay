
document.addEventListener("DOMContentLoaded", () => {


    const Init = () => {
        handlePageLoader();
        toggleSideNav();
        backHistory();
        activeSidenavLink();
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

    function backHistory() {
        const backHistoryBtn = document.querySelectorAll(".back-history-btn");
        for (let i = 0; i < backHistoryBtn.length; i++) {
            const btn = backHistoryBtn[i];
            if (btn) btn.addEventListener("click", () => {
                history.back();
            })

        }
    }


    function activeSidenavLink() {

        // Get URL parameters
        const urlParams = new URLSearchParams(window.location.search);
        const tab = urlParams.get('tab') || '1';

        // Hide all tab contents and remove active classes from all tab links
        document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
        document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('border-blue-500', 'text-blue-500'));

        // Show the active tab content and add active class to the corresponding tab link
        document.querySelector(`#tab${tab}`).classList.remove('hidden');
        document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).classList.add('border-blue-500', 'text-blue-500'); F
    }

    /**
        function activeSidenavLink() {
    
            // Get URL parameters
            const urlParams = new URLSearchParams(window.location.search);
            const tab = urlParams.get('tab') || '1';
    
            // Hide all tab contents and remove active classes from all tab links
            document.querySelectorAll('.tab-content').forEach(el => el.classList.add('hidden'));
    
            document.querySelectorAll('.tab-link').forEach(el => el.classList.remove('bg-theme-clr-primary-alt'));
            document.querySelectorAll('.tab-link').forEach(el => el.classList.add('bg-on-theme-clr-primary', 'base-text'));
    
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).firstElementChild?.classList.remove('bg-theme-clr-primary', 'text-on-theme-clr-primary');
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).firstElementChild?.classList.add('bg-on-theme-clr-primary', 'base-text');
    
    
    
    
            // Show the active tab content and add active class to the corresponding tab link
            document.querySelector(`#tab${tab}`).classList.remove('hidden');
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).classList.add('bg-theme-clr-primary-alt', 'text-on-theme-clr-primary');
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).classList.remove('bg-on-theme-clr-primary-alt', 'base-text');
            // document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).firstElementChild()
            document.querySelector(`#tabs-nav a[href="?tab=${tab}"]`).firstElementChild?.classList.add('bg-theme-clr-primary', 'text-on-theme-clr-primary');
    
        }
    
         */



    Init();

})