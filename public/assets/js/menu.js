document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("menu-container");
    const hagakureToggle = document.getElementById("hagakure-toggle");
    const submenu = document.querySelector(".submenu-items");

    if (!menuToggle || !sidebar) {
        console.error("Erreur : menuToggle ou sidebar introuvable !");
        return;
    }

    // Wiggle animation every 5 seconds
    function playWiggle() {
        menuToggle.style.animation = "none";
        setTimeout(() => {
            menuToggle.style.animation = "wiggle 0.5s ease-in-out 1";
        }, 50);
    }
    setInterval(playWiggle, 5000);

    // Toggle menu visibility
    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("menu-open");
    });

    // **Fix: Toggle the submenu dropdown**
    hagakureToggle.addEventListener("click", function (event) {
        event.preventDefault(); // Prevent jumping to #
        submenu.classList.toggle("open");
    });
});