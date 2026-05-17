<?php $old = $old ?? []; $errors = $errors ?? []; ?>
<div class="mb-3">
    <label class="form-label" for="login">Login</label>
    <input class="form-control" id="login" name="login" value="<?= h($old['login'] ?? '') ?>" required pattern="[A-Za-z0-9]{6,50}">
    <div class="field-error"><?= h($errors['login'] ?? '') ?></div>
</div>
<div class="mb-3">
    <label class="form-label" for="password">Password</label>
    <input class="form-control" id="password" name="password" type="password" required minlength="8">
    <div class="field-error"><?= h($errors['password'] ?? '') ?></div>
</div>
<div class="mb-3">
    <label class="form-label" for="full_name">ФИО</label>
    <input class="form-control" id="full_name" name="full_name" value="<?= h($old['full_name'] ?? '') ?>" required>
    <div class="field-error"><?= h($errors['full_name'] ?? '') ?></div>
</div>
<div class="mb-3">
    <label class="form-label" for="phone">Телефон</label>
    <input class="form-control" id="phone" name="phone" placeholder="8(999)123-45-67" value="<?= h($old['phone'] ?? '') ?>" required>
    <div class="field-error"><?= h($errors['phone'] ?? '') ?></div>
</div>
<div class="mb-3">
    <label class="form-label" for="email">Email</label>
    <input class="form-control" id="email" name="email" type="email" value="<?= h($old['email'] ?? '') ?>" required>
    <div class="field-error"><?= h($errors['email'] ?? '') ?></div>
</div>
