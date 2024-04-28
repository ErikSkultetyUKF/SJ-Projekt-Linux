var menu = document.querySelector("#topnavId");

function showHamburgerMenu() {
    if (menu.classList.contains("open")) { // Zatvoriť menu
        menu.classList.remove("open");
    } else {
        menu.classList.add("open"); // Otvoriť menu
    }
}