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
function logout(e) {
    Swal.fire({
        html: `<div class="tw-font-bold">Are you sure you want to logout?</div>`,
        showCancelButton: true,
        confirmButtonText: "Yes",
        confirmButtonColor: "var(--primary)",
        cancelButtonText: "No"
    }).then((result) => {
        if (result.isConfirmed) {
            window.location = "/login.html"
        }
    });
}