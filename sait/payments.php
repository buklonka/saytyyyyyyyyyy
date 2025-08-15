<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container page-content" style="text-align: left;">
    <h1>Касса <?php echo $site_config['casino_name']; ?>: быстрые депозиты и выводы без проблем</h1>
    <p>Удобство финансовых операций — ключевой показатель надежности казино. В <strong><?php echo $site_config['casino_name']; ?></strong> этому уделили особое внимание, предложив игрокам десятки способов <strong>пополнить счет и вывести выигрыш</strong>. На этой странице мы подробно рассмотрим все доступные платежные системы, актуальные лимиты и реальные сроки зачисления средств.</p>

    <section>
        <h2>Как пополнить счет в <?php echo $site_config['casino_name']; ?></h2>
        <p>Внести депозит можно за пару кликов. Средства зачисляются на игровой баланс мгновенно и без комиссии со стороны казино. Особое внимание <strong><?php echo $site_config['casino_name']; ?></strong> уделяет криптовалютам, предлагая за их использование дополнительные бонусы.</p>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Платежная система</th>
                    <th>Минимальный депозит</th>
                    <th>Максимальный депозит</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>VISA / MasterCard / МИР</td>
                    <td>1000 RUB</td>
                    <td>100 000 RUB</td>
                </tr>
                <tr>
                    <td>СБП (Система Быстрых Платежей)</td>
                    <td>500 RUB</td>
                    <td>150 000 RUB</td>
                </tr>
                <tr>
                    <td>Piastrix</td>
                    <td>500 RUB</td>
                    <td>100 000 RUB</td>
                </tr>
                 <tr>
                    <td>FK Wallet</td>
                    <td>150 RUB</td>
                    <td>300 000 RUB</td>
                </tr>
                <tr>
                    <td>Bitcoin (BTC), Ethereum (ETH)</td>
                    <td>~1500 RUB</td>
                    <td>не ограничен</td>
                </tr>
                 <tr>
                    <td>Tether (USDT), Monero (XMR) и др.</td>
                    <td>~1000 RUB</td>
                    <td>не ограничен</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h2>Как вывести выигрыш</h2>
        <p><strong>Вывод средств из <?php echo $site_config['casino_name']; ?></strong> обычно занимает от 15 минут до нескольких часов. Сроки зависят от выбранного метода и текущей нагрузки. Перед первым выводом казино может запросить верификацию аккаунта — это стандартная процедура безопасности.</p>
        <table class="content-table">
            <thead>
                <tr>
                    <th>Платежная система</th>
                    <th>Минимальный вывод</th>
                    <th>Среднее время вывода</th>
                </tr>
            </thead>
            <tbody>
                 <tr>
                    <td>Банковские карты</td>
                    <td>2000 RUB</td>
                    <td>1-24 часа</td>
                </tr>
                <tr>
                    <td>Piastrix</td>
                    <td>1500 RUB</td>
                    <td>~30 минут</td>
                </tr>
                 <tr>
                    <td>FK Wallet</td>
                    <td>1500 RUB</td>
                    <td>~30 минут</td>
                </tr>
                <tr>
                    <td>Криптовалюты (BTC, USDT и др.)</td>
                    <td>~2500 RUB</td>
                    <td>~1 час</td>
                </tr>
            </tbody>
        </table>
    </section>

    <section>
        <h2>Важные правила финансовых операций</h2>
        <ul>
            <li><strong>Один кошелек:</strong> Вывод средств осуществляется на ту же платежную систему и тот же счет, с которого производилось пополнение.</li>
            <li><strong>Верификация (KYC):</strong> Будьте готовы подтвердить личность по запросу службы безопасности. Это обязательное условие для всех лицензионных казино.</li>
            <li><strong>Отыгрыш бонусов:</strong> Перед подачей заявки на вывод убедитесь, что у вас нет активных бонусов. Попытка вывода средств до выполнения условий вейджера приведет к аннулированию бонуса.</li>
        </ul>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
