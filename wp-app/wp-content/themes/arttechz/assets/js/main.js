window.onscroll = function() {
    navigationScroll();
};

var navbar = document.getElementById("navbar");
var mySidenav = document.getElementById("mySidenav");
var sticky = navbar.offsetTop + navbar.offsetHeight;
var scrollDown = true;
var tempScrollValue = 0;
var navIsSticky = false;
function navigationScroll() {
    if (window.pageYOffset > tempScrollValue) {
        scrollDown = true;
    } else {
        scrollDown = false;
    }
    tempScrollValue = window.pageYOffset;

    if (window.pageYOffset >= sticky && navIsSticky === false) {
        setTimeout(function() {
            navbar.classList.add("sticky");
            navbar.style.top = "0";
        }, 500);
        navIsSticky = true;
    } else if (window.pageYOffset <= navbar.offsetHeight) {
        if (scrollDown == true) {
            navbar.classList.remove("sticky");
            navbar.style.top = "-" + navbar.offsetHeight + "px";
        }
        navIsSticky = false;
    }
}

function openNav() {
    document.getElementById("mySidenav").style.width = "65%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

document.getElementById("side-nav-open").addEventListener("click", openNav);
document.getElementById("side-nav-close").addEventListener("click", closeNav);