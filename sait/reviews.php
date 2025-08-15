<?php
require_once __DIR__ . '/config.php';
require_once __DIR__ . '/templates/header.php';
?>

<div class="container page-content" style="text-align: left;">
    <h1>Реальные отзывы о <?php echo $site_config['casino_name']; ?>: что говорят игроки?</h1>
    <p><strong>Честные отзывы о <?php echo $site_config['casino_name']; ?></strong> — лучший способ узнать о реальном опыте игры в этом казино. Прежде чем делать депозит, важно понять, как обстоят дела с выводом денег, работой поддержки и качеством игрового софта. Мы проанализировали десятки мнений и собрали на этой странице <strong>отзывы реальных игроков о <?php echo $site_config['casino_name']; ?></strong>, которые помогут вам ответить на главный вопрос: стоит ли доверять этой площадке?</p>
    <p>Ниже вы найдете подборку мнений с разных площадок, отражающих как сильные, так и слабые стороны казино. Это поможет вам составить собственное, взвешенное мнение.</p>
    <section class="reviews-section">
        <?php foreach ($reviews_data as $review): ?>
            <div class="review-card review-type-<?php echo $review['type']; ?>">
                <div class="review-header">
                    <span class="review-author"><?php echo htmlspecialchars($review['author']); ?></span>
                    <span class="review-source"><?php echo htmlspecialchars($review['source']); ?></span>
                </div>
                <div class="review-body">
                    <p>"<?php echo htmlspecialchars($review['text']); ?>"</p>
                </div>
            </div>
        <?php endforeach; ?>
    </section>
    <section>
        <h2>Как мы анализируем отзывы</h2>
        <p>Обратите внимание, что мы не публикуем все отзывы подряд. Наша редакция отбирает наиболее информативные и аргументированные мнения, отсеивая откровенный спам и необоснованные обвинения. Мы стараемся показать как положительные, так и отрицательные стороны, чтобы вы могли принять взвешенное решение.</p>
    </section>
</div>

<?php require_once __DIR__ . '/templates/footer.php'; ?>
