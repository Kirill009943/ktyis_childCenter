<section class="container auth-wrap">
    <div class="form-card">
        <h1>Вход</h1>
        <form action="action.php" method="POST">
             <input type="hidden" name="act" value="login">
            <div class="mb-3">
                <label class="form-label" for="login">Логин, телефон, или почта</label>
                <input class="form-control" id="login" name="login" value="" required>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Пароль</label>
                <input class="form-control" id="password" name="password" type="password" required>
            </div>
            <button class="btn btn-sun w-100" type="submit">Войти</button>
        </form>
        <p class="form-link">Еще не зарегистрированы? <a href="/register">Регистрация</a></p>
    </div>
</section>
