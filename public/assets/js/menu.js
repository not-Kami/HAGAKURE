document.addEventListener("DOMContentLoaded", function () {
    const menuToggle = document.getElementById("menu-toggle");
    const sidebar = document.getElementById("menu-container");

    if (!menuToggle || !sidebar) {
        console.error("Erreur : menuToggle ou sidebar introuvable !");
        return;
    }



    function playWiggle() {
        menuToggle.style.animation = "none"; // Supprime l'animation actuelle
        setTimeout(() => {
            menuToggle.style.animation = "wiggle 0.5s ease-in-out 1";
        }, 50); // Petit délai pour forcer la relance
    }

    // Démarrer l'animation toutes les 5 secondes
    setInterval(playWiggle, 5000);

    // Ouvrir / fermer le menu au clic sur le logo
    menuToggle.addEventListener("click", function () {
        sidebar.classList.toggle("menu-open");
    });
});