<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HAGAKURE - Club de Karaté - Braine l'Alleud</title>

    <link rel="stylesheet" href="/public/assets/css/themes.css">

    <link rel="stylesheet" href="/public/assets/css/components/hero.css">
    <link rel="stylesheet" href="/public/assets/css/components/navbar.css">
    <link rel="stylesheet" href="/public/assets/css/components/footer.css">
    <link rel="stylesheet" href="/public/assets/css/components/contact.css">




    <?php
    if (isset($page)) {
        $cssFile = "/assets/css/pages/$page.css";
        if (file_exists(__DIR__ . "/../../public$cssFile")) {
            echo '<link rel="stylesheet" href="' . $cssFile . '">';
        }
    }
    ?>
</head>
<body>

    <?php include __DIR__ . '/components/navbar.php'; ?>

    <main>
        <?php include $viewFile; ?>
    </main>
    <?php include __DIR__ . '/components/contact.php'; ?>
    <?php include __DIR__ . '/components/footer.php'; ?>

    <script src="/public/assets/js/menu.js"></script>
    <script src="/public/assets/js/mobile-menu.js"></script>
</body>
</html>