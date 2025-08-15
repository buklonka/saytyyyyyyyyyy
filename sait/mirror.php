<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container page-content" style="text-align: left;">
    <h1>Доступ 24/7: твое рабочее зеркало <?php echo $site_config['casino_name']; ?></h1>
    <p>Столкнулись с блокировкой и не можете войти на сайт? Это частая проблема, но у нее есть простое и безопасное решение. Используйте <strong>актуальное зеркало <?php echo $site_config['casino_name']; ?></strong> — это официальная копия сайта, которая гарантирует вам доступ к вашему аккаунту, балансу и всем играм.</p>

    <section>
        <h2>Актуальная ссылка на зеркало <?php echo $site_config['casino_name']; ?></h2>
        <p>Вам не нужно ничего искать. Наша ссылка всегда ведет на самое свежее и рабочее зеркало. Просто нажмите на кнопку.</p>
        <div class="mirror-link-card" style="border: 2px solid var(--color-gold); padding: 2rem; text-align: center; border-radius: 8px; background-color: var(--color-surface);">
            <p style="margin-top: 0;"><strong>Гарантированный доступ к официальному сайту:</strong></p>
            <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-primary" style="padding: 1rem 2rem; font-size: 1.2rem;">Перейти на рабочее зеркало <?php echo $site_config['casino_name']; ?></a>
            <p style="font-size: 0.9rem; color: var(--text-muted); margin-top: 1rem;">Проверено и обновлено: <?php echo date('d.m.Y'); ?></p>
        </div>
    </section>

    <section>
        <h2>Безопасно ли использовать зеркало?</h2>
        <p><strong>Абсолютно безопасно</strong>, если вы используете ссылку из надежного источника, такого как наш сайт. Официальное зеркало — это не подделка, а тот же самый сайт, но с другим адресом. Ваши логин, пароль, баланс и история игр будут идентичны.</p>
        <h3>Почему блокируют основной сайт?</h3>
        <ul>
            <li><strong>Требования законодательства:</strong> В некоторых странах интернет-провайдеры обязаны блокировать доступ к сайтам онлайн-казино.</li>
            <li><strong>Технические работы:</strong> Иногда зеркала используют для распределения нагрузки на серверы во время технических работ или при большом наплыве игроков.</li>
        </ul>
        <h3>Как не стать жертвой мошенников</h3>
        <p>Золотое правило: <strong>никогда не ищите зеркала в поисковиках</strong>. Вы рискуете попасть на фишинговый сайт, созданный для кражи паролей. Добавьте наш сайт в закладки, чтобы у вас всегда была под рукой проверенная и безопасная ссылка.</p>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
