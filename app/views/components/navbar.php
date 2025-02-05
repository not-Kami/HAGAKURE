
<?php
// Detect if user is on mobile
$isMobile = preg_match('/Mobile|Android|iPhone|iPad/', $_SERVER['HTTP_USER_AGENT']);
?>

<?php if ($isMobile): ?>
<nav id="mobile-nav">
    <div id="burger-menu">
        ☰
    </div>
    <div id="mobile-menu">
        <ul>
            <li><a href="?page=accueil">Home</a></li>
            <li><a href="?page=shop">Shop</a></li>
            <li class="submenu">
                <a href="#" id="mobile-hagakure-toggle">HAGAKURE ▼</a>
                <ul class="submenu-items">
                    <li><a href="?page=histoire-club">Notre Histoire</a></li>
                    <li><a href="?page=histoire-karate">Histoire du Karaté</a></li>
                </ul>
            </li>
            <li><a href="?page=galerie">Galerie</a></li>
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </div>
</nav>

<?php else: ?>
<!-- Menu principal -->
<div id="menu-container">
    <!-- Bouton Logo -->
    <div id="menu-toggle">
        <img src="/public/assets/img/bt_logo_rvb_1.svg" alt="Hakagure Logo">
    </div>

    <!-- Navigation -->
    <nav id="sidebar">
        <ul class="ul-menu">
            <li><a href="?page=accueil">Home</a></li>
            <li><a href="?page=shop">Shop</a></li>
            <li class="submenu">
                <a href="#" id="hagakure-toggle">HAGAKURE ▼</a>
                <ul class="submenu-items">
                    <li><a href="?page=histoire-club">Notre Histoire</a></li>
                    <li><a href="?page=histoire-karate">Histoire du Karaté</a></li>
                </ul>
            </li>
            <li><a href="?page=gallery">Galerie</a></li>
            <li><a href="#contact">Contact</a></li>
        </ul>
    </nav>
</div>
<?php endif; ?>