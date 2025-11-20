<?php require_once 'functions.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $current_lang; ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farming4 - <?php echo t('welcome_title'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<header class="site-header">
    <div class="container">
        <div class="logo">
            <a href="index.php">Farming<span>4</span></a>
        </div>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php"><?php echo t('home'); ?></a></li>
                <li><a href="about.php"><?php echo t('about'); ?></a></li>
                <li><a href="projects.php"><?php echo t('projects'); ?></a></li>
                <li><a href="news.php"><?php echo t('news'); ?></a></li>
                <li><a href="contact.php"><?php echo t('contact'); ?></a></li>
            </ul>
        </nav>
        <div class="lang-switcher">
            <a href="?lang=tr" class="<?php echo $current_lang == 'tr' ? 'active' : ''; ?>">TR</a>
            <a href="?lang=en" class="<?php echo $current_lang == 'en' ? 'active' : ''; ?>">EN</a>
        </div>
        <div class="mobile-menu-toggle">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</header>

<main>
