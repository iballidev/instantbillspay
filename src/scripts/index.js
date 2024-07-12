
document.addEventListener("DOMContentLoaded", () => {

    const opensideNavBtn = document.querySelector("#open-sidenav-btn");
    const closesideNavBtn = document.querySelector("#close-sidenav-btn");
    const sidenav = document.querySelector(".sidenav");
    if (opensideNavBtn) opensideNavBtn.addEventListener("click", () => {
        if (!sidenav) {
            return
        }

        if (sidenav.classList.contains("hidden")) sidenav.classList.remove("hidden")
    })
    if (closesideNavBtn) closesideNavBtn.addEventListener("click", () => {
        if (!sidenav) {
            return
        }

        if (!sidenav.classList.contains("hidden")) sidenav.classList.add("hidden")
    })
})