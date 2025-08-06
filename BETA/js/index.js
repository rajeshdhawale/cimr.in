// Navbar JS
const navbarToggle = navbar.querySelector("#navbar-toggle");
const navbarMenu = document.querySelector("#navbar-menu");
const navbarLinksContainer = navbarMenu.querySelector(".navbar-links");
let isNavbarExpanded = navbarToggle.getAttribute("aria-expanded") === "true";
var a = true;
const toggleNavbarVisibility = () => {
    try {
        var elementToHide = document.getElementsByClassName("elementToHide");
        if (a == true) {
            for(var i=0;i<elementToHide.length;i++){
                elementToHide[i].style.display="none"
            } 
            a = false;
        } else {
            console.log("not expanded")
            var elementToHide = document.getElementsByClassName("elementToHide");
            for(var i=0;i<elementToHide.length;i++){
                elementToHide[i].style.display="block"
            } 
            a = true
        }
    } catch (error) {
        console.log("nothing to hide")
    }
    
    isNavbarExpanded = !isNavbarExpanded;
    navbarToggle.setAttribute("aria-expanded", isNavbarExpanded);
};

navbarToggle.addEventListener("click", toggleNavbarVisibility);

navbarLinksContainer.addEventListener("click", (e) => e.stopPropagation());
navbarMenu.addEventListener("click", toggleNavbarVisibility);