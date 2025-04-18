let sidebarElement = document.querySelector("[data-layout='sidebar']");
let sidebarToggle = document.querySelectorAll("[data-layout='toggle']");
if (sidebarElement) {
    isSidebarOpen = true;
    const setSidebar = () => {
        if (!isSidebarOpen) {
            isSidebarOpen = true;
            sidebarElement.classList.add("open")

            sidebarToggle.forEach(item=>{
                item.querySelector("i").classList.add("fa-close")
                item.querySelector("i").classList.remove("fa-bars")
            })
        } else {
            isSidebarOpen = false;
            sidebarElement.classList.remove("open")
            
            sidebarToggle.forEach(item=>{
                item.querySelector("i").classList.remove("fa-close")
                item.querySelector("i").classList.add("fa-bars")
            })
        }
    }
    setSidebar();

    sidebarToggle.forEach(item=>{
        console.log(item)
        item.addEventListener("click", () => {
        setSidebar();
    })
    })

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
                if(item.closest("ul").previousElementSibling){

                    item.closest("ul").previousElementSibling.classList.add("collapsed")
                }
            }
        } else {
            item.parentElement.classList.remove("active")
        }
    }
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
            window.location = "login.php"
        }
    });
}