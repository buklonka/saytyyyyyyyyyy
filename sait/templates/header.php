<?php
// Определяем ключ текущей страницы по имени файла
$current_page_key = basename($_SERVER['PHP_SELF'], '.php');
if ($current_page_key == 'index') {
    $current_page_key = 'home';
}

// Получаем мета-теги для текущей страницы
$title = $meta_tags[$current_page_key]['title'] ?? 'CasinoCheck';
$description = $meta_tags[$current_page_key]['description'] ?? '';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($title); ?></title>
    <meta name="description" content="<?php echo htmlspecialchars($description); ?>">
    <link rel="stylesheet" href="<?php echo $site_config['domain_name']; ?>/css/style.css">
</head>
<body>
    <header class="main-header">
        <div class="container">
            <a href="<?php echo $site_config['domain_name']; ?>/" class="logo">
                <img src="https://1win.in.ua/wp-content/themes/1win/assets/img/logotype.svg" alt="<?php echo $site_config['casino_name']; ?> Logo" style="height: 40px; width: auto;">
            </a>
            <nav class="main-nav">
                <a href="<?php echo $site_config['domain_name']; ?>/bonuses.php">Бонусы</a>
                <a href="<?php echo $site_config['domain_name']; ?>/promocodes.php">Промокоды</a>
                <a href="<?php echo $site_config['domain_name']; ?>/mirror.php">Зеркало</a>
                <a href="<?php echo $site_config['domain_name']; ?>/app.php">Приложение</a>
                <a href="<?php echo $site_config['domain_name']; ?>/reviews.php">Отзывы</a>
                <a href="<?php echo $site_config['domain_name']; ?>/payments.php">Платежи</a>
            </nav>
            <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-primary header-cta">Перейти на сайт</a>
        </div>
    </header>
    <main>
