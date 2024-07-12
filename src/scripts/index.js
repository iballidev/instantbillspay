
document.addEventListener("DOMContentLoaded", () => {

    const sideNavBtn = document.querySelector("#sidenav-btn");
    const sidenav = document.querySelector(".sidenav");
    if (sideNavBtn) sideNavBtn.addEventListener("click", () => {
        if (!sidenav) {
            return
        }

        if (sidenav.classList.contains("hidden")) sidenav.classList.remove("hidden")
    })
})