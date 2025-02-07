
<?php
// Detect if user is on mobile
$isMobile = preg_match('/Mobile|Android|iPhone|iPad/', $_SERVER['HTTP_USER_AGENT']);
?>

<?php if ($isMobile): ?>
<nav id="mobile-nav">
<span id="burger-menu">
<svg width="64px" height="64px" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg" stroke="#fafafa" stroke-width="0.364"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g><g id="SVGRepo_iconCarrier"><path d="M4 7C4 6.44771 4.44772 6 5 6H24C24.5523 6 25 6.44771 25 7C25 7.55229 24.5523 8 24 8H5C4.44772 8 4 7.55229 4 7Z" fill="#272727"></path><path d="M4 13.9998C4 13.4475 4.44772 12.9997 5 12.9997L16 13C16.5523 13 17 13.4477 17 14C17 14.5523 16.5523 15 16 15L5 14.9998C4.44772 14.9998 4 14.552 4 13.9998Z" fill="#272727"></path><path d="M5 19.9998C4.44772 19.9998 4 20.4475 4 20.9998C4 21.552 4.44772 21.9997 5 21.9997H22C22.5523 21.9997 23 21.552 23 20.9998C23 20.4475 22.5523 19.9998 22 19.9998H5Z" fill="#272727"></path></g></svg>
</span>


    <div id="mobile-menu">
        <ul>
            <li><a href="?page=accueil">Home</a></li>
            <li><a href="?page=shop">Shop</a></li>
            <li class="submenu">
                <a href="#" id="mobile-hagakure-toggle">HAGAKURE ▼</a>
                <ul class="submenu-items">
                    <li><a href="?page=karate">Notre Histoire</a></li>
                    <li><a href="?page=hagakure">Histoire du Karaté</a></li>
                </ul>
            </li>
            <li><a href="?page=gallery">Galerie</a></li>
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
            <li><a href="?page=contact">Contact</a></li>
        </ul>
    </nav>
</div>
<?php endif; ?>

