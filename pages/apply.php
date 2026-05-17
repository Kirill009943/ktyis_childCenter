<section class="container auth-wrap">
    <div class="form-card wide">
        <h1>Новая заявка</h1>
        <form action="action.php" method="POST">
             <input type="hidden" name="act" value="apply">
            <div class="mb-3">
                <label class="form-label" for="circle">Кружок</label>
                <select class="form-select" id="circle" name="circle" required>
                    <option value="">Выберите</option>
                    <option value="Робототехника">Робототехника</option>
                    <option value="Рисование">Рисование</option>
                    <option value="Английский для детей">Английский для детей</option>
                    <option value="Шахматы">Шахматы</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="child_age">Возраст ребенка</label>
                <input class="form-control" id="child_age" name="child_age" type="number" min="4" max="17" value="5" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="start_date">Дата начала</label>
                <input class="form-control" id="start_date" name="start_date" placeholder="ДД.ММ.ГГГГ" value="01.01.2023" required>
            </div>
            <div class="mb-4">
                <label class="form-label">Способ оплаты</label>
                <div class="pay-options">
                    <label><input type="radio" name="payment_method" value="cash">Наличными</label>
                    <label><input type="radio" name="payment_method" value="online">Онлайн</label>
                </div>
            </div>
            <button class="btn btn-sun w-100" type="submit">Отправить</button>
        </form>
    </div>
</section>
