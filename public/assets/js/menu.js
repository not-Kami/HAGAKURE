document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("menu-container");
    const hagakureToggle = document.getElementById("hagakure-toggle");
    const mobileHagakureToggle = document.getElementById("mobile-hagakure-toggle");
    const submenuItems = document.querySelectorAll(".submenu-items");

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
    setInterval(playWiggle, 2500);

    // Toggle menu visibility
    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("menu-open");
    });

    // Gestionnaire pour le menu desktop
    if (hagakureToggle) {
        hagakureToggle.addEventListener("click", function (event) {
            event.preventDefault();
            const submenuParent = this.closest('.submenu');
            if (submenuParent) {
                submenuParent.classList.toggle('open');
            }
        });
    }

    // Gestionnaire pour le menu mobile
    if (mobileHagakureToggle) {
        mobileHagakureToggle.addEventListener("click", function (event) {
            event.preventDefault();
            const submenuParent = this.closest('.submenu');
            if (submenuParent) {
                submenuParent.classList.toggle('open');
            }
        });
    }

    // Fermer les sous-menus quand on clique ailleurs
    document.addEventListener('click', function(event) {
        if (!event.target.closest('.submenu')) {
            document.querySelectorAll('.submenu.open').forEach(menu => {
                menu.classList.remove('open');
            });
        }
    });
});