document.addEventListener("DOMContentLoaded", function () {
    const burgerMenu = document.getElementById("burger-menu");
    const mobileMenu = document.getElementById("mobile-menu");
    const mobileOverlay = document.createElement("div");
    mobileOverlay.id = "mobile-overlay";
    document.body.appendChild(mobileOverlay);

    // Toggle menu
    burgerMenu.addEventListener("click", function () {
        mobileMenu.classList.toggle("mobile-menu-open");
        mobileOverlay.style.display = mobileMenu.classList.contains("mobile-menu-open") ? "block" : "none";
    });

    // Close menu when clicking outside
    mobileOverlay.addEventListener("click", function () {
        mobileMenu.classList.remove("mobile-menu-open");
        mobileOverlay.style.display = "none";
    });

    // Handle submenu toggle
    const mobileHagakureToggle = document.getElementById("mobile-hagakure-toggle");
    const mobileSubmenu = document.querySelector(".submenu-items");

    mobileHagakureToggle.addEventListener("click", function (event) {
        event.preventDefault();
        mobileSubmenu.classList.toggle("open");
    });
});