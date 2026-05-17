<section class="hero-band">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-5">
                <p class="eyebrow">Кружки для детей 4-17 лет</p>
                <h1>Центр развития детей</h1>
                <p class="hero-copy">Записывайте ребенка на занятия, отслеживайте статус заявки и оставляйте отзыв после завершения обучения.</p>
                <div class="d-flex flex-wrap gap-2">
                    <a class="btn btn-sun btn-lg" href="/apply">Выбрать кружок</a>
                    <a class="btn btn-outline-primary btn-lg" href="/register">Создать аккаунт</a>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="slider" data-slider>
                    <?php
                    $slides = [
                        ['Робототехника', 'Собираем модели и программируем первые проекты', 'slide-blue'],
                        ['Рисование', 'Цвет, форма и творческая уверенность', 'slide-green'],
                        ['Английский для детей', 'Живое общение через игры и задания', 'slide-yellow'],
                        ['Шахматы', 'Логика, внимание и спокойная стратегия', 'slide-mint'],
                    ];
                    foreach ($slides as $i => $slide): ?>
                        <div class="slide <?= h($slide[2]) ?> <?= $i === 0 ? 'active' : '' ?>">
                            <div>
                                <span>0<?= $i + 1 ?></span>
                                <h2><?= h($slide[0]) ?></h2>
                                <p><?= h($slide[1]) ?></p>
                            </div>
                        </div>
                    <?php endforeach; ?>
                    <button class="slider-arrow prev" type="button" aria-label="Предыдущий слайд">‹</button>
                    <button class="slider-arrow next" type="button" aria-label="Следующий слайд">›</button>
                    <div class="slider-dots" aria-label="Индикаторы слайдера"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="container py-5">
    <div class="row g-3">
        <?php foreach (CIRCLES as $circle): ?>
            <div class="col-md-6 col-lg-3">
                <div class="activity-card">
                    <div class="activity-icon"><?= mb_substr($circle, 0, 1) ?></div>
                    <h3><?= h($circle) ?></h3>
                    <p>Группы по возрасту, понятное расписание и бережная адаптация.</p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>
<script src="/public/js/slider.js"></script>