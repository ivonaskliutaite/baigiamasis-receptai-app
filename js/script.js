/*function toggleFunction() {
    let x = document.getElementsById("toggling");
    if (x.getAttribute('href') == 'css.css') {
        x.getAttribute('href') = 'block';
    } else {
        x.getAttribute('href') = 'none';
    }
}
*/

/*
const date = getElementById('date')
const currentYear = new Date().getFullYear()
date.textContent = currentYear;
*/


const menu = document.querySelector(".linkai");
const menuItems = document.querySelectorAll(".linkas");
const hamburger= document.querySelector(".hamburger");
const closeIcon= document.querySelector(".fa-window-close");
const menuIcon = document.querySelector(".fa-bars");

function toggleMenu() {
    if (menu.classList.contains("showMenu")) {
        menu.classList.remove("showMenu");
        closeIcon.style.display = "none";
        menuIcon.style.display = "block";
    } else {
        menu.classList.add("showMenu");
        closeIcon.style.display = "block";
        menuIcon.style.display = "none";
    }
}

hamburger.addEventListener("click", toggleMenu);

menuItems.forEach(
    function(menuItem) {
        menuItem.addEventListener("click", toggleMenu);
    }
)