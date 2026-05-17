<section class="container auth-wrap">
    <div class="form-card">
        <h1>Регистрация</h1>
        <form method="post" action="/register" data-validate="register" novalidate>
            <div class="mb-3">
                <label class="form-label" for="login">Login</label>
                <input class="form-control" id="login" name="login" value="" required
                    pattern="[A-Za-z0-9]{6,50}">
                <div class="field-error"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="password">Password</label>
                <input class="form-control" id="password" name="password" type="password" required minlength="8">
                <div class="field-error"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="full_name">ФИО</label>
                <input class="form-control" id="full_name" name="full_name" value=""
                    required>
                <div class="field-error"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="phone">Телефон</label>
                <input class="form-control" id="phone" name="phone" placeholder="8(999)123-45-67"
                    value="" required>
                <div class="field-error"></div>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" id="email" name="email" type="email" value=""
                    required>
                <div class="field-error"></div>
            </div>

            <button class="btn btn-sun w-100" type="submit">Создать пользователя</button>
        </form>
        <p class="form-link">Уже зарегистрированы? <a href="/login">Войти</a></p>
    </div>
</section>