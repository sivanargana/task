let sidebarElement = document.querySelector("[data-layout='sidebar']");
let sidebarToggle = document.querySelector("[data-layout='toggle']");
if (sidebarElement) {
    isSidebarOpen = true;
    const setSidebar = () => {
        if (!isSidebarOpen) {
            isSidebarOpen = true;
            sidebarElement.classList.add("open")
        } else {
            isSidebarOpen = false;
            sidebarElement.classList.remove("open")
        }
    }
    setSidebar();
    sidebarToggle.addEventListener("click", () => {
        setSidebar();
    })
}
let links = sidebarElement.querySelectorAll("a");
let activatedRoute = window.location.pathname;
links.forEach((item) => {
    if (item.href) {
        if (item.href.indexOf(activatedRoute) !== -1) {
            item.parentElement.classList.add("active")
            if (item.closest("ul").classList.contains("collapse")) {
                item.closest("ul").classList.add("show")
                item.closest("ul").previousElementSibling.classList.remove("collapsed")
            } else {
                item.closest("ul").classList.remove("show")
                item.closest("ul").previousElementSibling.classList.add("collapsed")
            }
        } else {
            item.parentElement.classList.remove("active")
        }
    }
})
function logout(e) {
    Swal.fire({
        html: `<div class="tw-font-bold">Are you sure you want to logout?</div>`,
        showCancelButton: true,
        confirmButtonText: "Yes",
        confirmButtonColor: "var(--primary)",
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "/login.php"
        }
    });
}