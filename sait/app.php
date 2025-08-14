<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>
<div class="container page-content" style="text-align: left;">
    <h1>Скачать приложение <?php echo $site_config['casino_name']; ?> на Android и iOS</h1>
    <p>Хотите делать ставки и играть в казино с максимальным комфортом? Лучшее решение — <strong>скачать приложение <?php echo $site_config['casino_name']; ?></strong>. Официальное приложение обеспечивает стабильный доступ к вашему аккаунту в обход блокировок, экономит трафик и работает быстрее, чем мобильная версия сайта. Здесь вы найдете подробные инструкции, как <strong>скачать <?php echo $site_config['casino_name']; ?> на Андроид и Айфон</strong>.</p>

    <!-- 1. Инструкция для Android -->
    <section>
        <h2>Как скачать <?php echo $site_config['casino_name']; ?> на Android (файл .apk)</h2>
        <p>Приложение для Android распространяется в виде установочного файла .apk напрямую с официального сайта, так как Google Play не размещает игорные приложения.</p>
        <ol class="step-by-step-list">
            <li><strong>Перейдите на сайт:</strong> Нажмите на кнопку ниже, чтобы перейти на официальный сайт <strong><?php echo $site_config['casino_name']; ?></strong>.</li>
            <li><strong>Скачайте файл:</strong> Найдите иконку Android и нажмите на нее, чтобы начать загрузку файла <strong>1win.apk</strong>.</li>
            <li><strong>Разрешите установку:</strong> В настройках безопасности вашего телефона дайте разрешение на установку приложений из неизвестных источников. Это стандартная процедура.</li>
            <li><strong>Установите и запустите:</strong> Откройте скачанный файл и установите приложение. После этого вы сможете войти в свой аккаунт или зарегистрироваться.</li>
        </ol>
        <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-primary">Скачать <?php echo $site_config['casino_name']; ?> для Android</a>
    </section>

    <!-- 2. Инструкция для iOS -->
    <section>
        <h2>Как установить <?php echo $site_config['casino_name']; ?> на iOS (iPhone, iPad)</h2>
        <p>На устройствах Apple установка происходит не через App Store, а путем добавления веб-версии на главный экран. Это так же быстро и удобно.</p>
        <ol class="step-by-step-list">
            <li><strong>Откройте сайт в Safari:</strong> Перейдите на мобильную версию сайта <strong><?php echo $site_config['casino_name']; ?></strong> через браузер Safari.</li>
            <li><strong>Нажмите "Поделиться":</strong> Найдите в нижней части браузера иконку "Поделиться" (квадрат со стрелкой вверх).</li>
            <li><strong>Выберите "На экран 'Домой'":</strong> В появившемся меню пролистайте вниз и выберите опцию "На экран 'Домой'".</li>
            <li><strong>Подтвердите:</strong> Нажмите "Добавить", и иконка для быстрого запуска <strong><?php echo $site_config['casino_name']; ?></strong> появится на вашем рабочем столе.</li>
        </ol>
        <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-secondary">Перейти на мобильный сайт</a>
    </section>

    <!-- 3. Сравнение с мобильной версией -->
    <section>
        <h2>Преимущества приложения перед мобильной версией</h2>
        <ul>
            <li><strong>Стабильный доступ:</strong> Приложение не подвержено блокировкам, вам не придется искать зеркала.</li>
            <li><strong>Скорость работы:</strong> Интерфейс загружается быстрее, а ставки делаются моментально.</li>
            <li><strong>Экономия трафика:</strong> Основные элементы интерфейса уже загружены, что сокращает потребление данных.</li>
            <li><strong>Push-уведомления:</strong> Вы первыми узнаете о новых бонусах, акциях и важных матчах.</li>
        </ul>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
