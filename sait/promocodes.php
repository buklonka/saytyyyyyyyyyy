<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container page-content" style="text-align: left;">
    <h1>Актуальные промокоды казино <?php echo $site_config['casino_name']; ?></h1>
    <p>Промокод — это специальная комбинация символов, которая дает игроку доступ к эксклюзивным или улучшенным бонусам. Обычно промокод нужно вводить в специальное поле при регистрации или при пополнении счета. На этой странице мы собираем все проверенные и рабочие промокоды для <?php echo $site_config['casino_name']; ?>.</p>
    <section>
        <h2>Промокод на сегодня</h2>
        <div class="promocode-card" style="border: 2px dashed var(--primary-color); padding: 2rem; text-align: center; border-radius: 8px; background-color: var(--light-bg);">
            <p style="font-size: 1.1rem; color: var(--text-muted); margin-top: 0;">Ваш эксклюзивный промокод:</p>
            <div class="promocode-value" style="background: #fff; color: #111; font-family: var(--font-family-accent); font-size: 2.5rem; padding: 1rem; font-weight: bold; display: inline-block; border-radius: 5px; margin-bottom: 1rem; border: 2px solid #ccc;">
                <?php echo $site_config['promo_code']; ?>
            </div>
            <p style="font-size: 1.2rem;"><strong>Что дает:</strong> Эксклюзивный бонус для наших читателей при регистрации.</p>
            <a href="<?php echo $site_config['affiliate_link']; ?>" target="_blank" class="btn btn-primary" style="margin-top: 1rem;">Использовать промокод и зарегистрироваться</a>
        </div>
    </section>
    <section>
        <h2>Как активировать промокод</h2>
        <p>Чтобы бонус был успешно начислен, важно правильно использовать промокод. Следуйте этой простой инструкции:</p>
        <ol class="step-by-step-list">
            <li><strong>Скопируйте промокод:</strong> Нажмите на код на этой странице, чтобы скопировать его в буфер обмена.</li>
            <li><strong>Перейдите на сайт казино:</strong> Используйте кнопку выше для перехода на официальный сайт <?php echo $site_config['casino_name']; ?>.</li>
            <li><strong>Начните регистрацию:</strong> Нажмите на кнопку "Регистрация" и начните заполнять анкету.</li>
            <li><strong>Найдите поле "Промокод":</strong> В регистрационной форме будет специальное поле (может быть необязательным). Вставьте скопированный код в это поле.</li>
            <li><strong>Завершите регистрацию:</strong> Заполните все остальные поля и завершите создание аккаунта. Бонус будет активирован автоматически после выполнения условий (например, после первого депозита).</li>
        </ol>
    </section>
    <section>
        <h2>Зачем казино раздают промокоды?</h2>
        <p>Промокоды являются частью маркетинговой стратегии казино. Они помогают привлекать новых игроков через партнеров (как наш сайт), отслеживать эффективность рекламных кампаний и повышать лояльность аудитории, предлагая уникальные бонусы, недоступные другим игрокам.</p>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>