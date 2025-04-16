let sidebarElement = document.querySelector("[data-layout='sidebar']");
let sidebarToggle = document.querySelector("[data-layout='toggle']");
isSidebarOpen = true;

const setSidebar = ()=>{
    if(!isSidebarOpen){
        isSidebarOpen = true;
        sidebarElement.classList.add("open")
    }else{
        isSidebarOpen = false;
        sidebarElement.classList.remove("open")
    }
}


setSidebar();
 


sidebarToggle.addEventListener("click",()=>{
    setSidebar();
})