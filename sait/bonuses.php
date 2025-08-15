<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container page-content" style="text-align: left;">
    <h1>Все бонусы <?php echo $site_config['casino_name']; ?>: как получить, отыграть и вывести?</h1>
    <p><strong>Бонусная программа <?php echo $site_config['casino_name']; ?></strong> — одна из самых щедрых на рынке, созданная как для новых, так и для постоянных игроков. Получить <strong>бонусы в <?php echo $site_config['casino_name']; ?></strong> — значит существенно увеличить свой стартовый капитал и получить больше шансов на крупный выигрыш. На этой странице мы подробно разберем, какие поощрения предлагает казино, как их получить и как правильно использовать, чтобы извлечь максимум выгоды.</p>
    <p>Не забывайте, что при регистрации вы можете использовать наш эксклюзивный промокод <strong><?php echo $site_config['promo_code']; ?></strong>, чтобы получить доступ к дополнительным или улучшенным условиям по акциям!</p>
    <section>
        <h2>Основные бонусы казино</h2>
        <p>В таблице ниже представлена информация об основных бонусных предложениях, их размерах и условиях отыгрыша (вейджере).</p>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Тип бонуса</th>
                    <th>Размер и описание</th>
                    <th>Вейджер</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($bonus_data as $bonus): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($bonus['type']); ?></td>
                        <td><?php echo htmlspecialchars($bonus['amount']); ?></td>
                        <td><?php echo htmlspecialchars($bonus['wager']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
    <section>
        <h2>Калькулятор бонусов</h2>
        <p>Этот инструмент поможет вам рассчитать реальную сумму ставок, которую необходимо сделать для отыгрыша бонуса. Введите данные, чтобы понять, насколько выполнимы условия казино.</p>
        <div class="bonus-calculator">
            <div class="form-group">
                <label for="deposit">Сумма вашего депозита (в валюте казино):</label>
                <input type="number" id="deposit" placeholder="Например: 1000">
            </div>
            <div class="form-group">
                <label for="bonus-percent">Процент бонуса (%):</label>
                <input type="number" id="bonus-percent" placeholder="Например: 100">
            </div>
            <div class="form-group">
                <label for="wager">Вейджер (например, x40):</label>
                <input type="number" id="wager" placeholder="Например: 40">
            </div>
            <button id="calculate-btn" class="btn btn-primary">Рассчитать</button>
            <div id="result" class="calculator-result" style="margin-top: 1.5rem;"></div>
        </div>
    </section>
    <section>
        <h2>Что такое вейджер?</h2>
        <p><strong>Вейджер (Wager)</strong> — это множитель, который определяет общую сумму ставок, необходимую для выполнения условий бонуса. После выполнения этого условия бонусные средства и выигрыши с них становятся доступны для вывода. Например, если вы получили бонус 1000 рублей с вейджером x40, вам нужно сделать ставок на общую сумму 1000 * 40 = 40 000 рублей, прежде чем вы сможете вывести эти деньги.</p>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
