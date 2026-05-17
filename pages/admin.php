<?php
$applications = mysqli_query($conn, "SELECT applications.*, users.login, users.full_name, users.phone, users.email FROM applications JOIN users ON applications.user_id = users.id ORDER BY applications.created_at DESC");
?>

<section class="container py-5">
    <div class="d-flex flex-column flex-md-row justify-content-between gap-3 mb-4">
        <div>
            <h1>Админ панель</h1>
            <p class="mb-0 text-muted">Все заявки пользователей</p>
        </div>
        <a class="btn btn-sun align-self-md-start" href="/">На главную</a>
    </div>

    <div class="table-card">
        <div class="table-responsive">
            <table class="table table-hover align-middle mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Пользователь</th>
                        <th>Контакты</th>
                        <th>Кружок</th>
                        <th>Возраст</th>
                        <th>Дата начала</th>
                        <th>Оплата</th>
                        <th>Статус</th>
                        <th>Создана</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if ($applications && mysqli_num_rows($applications) > 0): ?>
                        <?php while ($application = mysqli_fetch_assoc($applications)): ?>
                            <tr>
                                <td><?php echo $application['id']; ?></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($application['login']); ?></strong><br>
                                    <span class="text-muted"><?php echo htmlspecialchars($application['full_name']); ?></span>
                                </td>
                                <td>
                                    <?php echo htmlspecialchars($application['phone']); ?><br>
                                    <span class="text-muted"><?php echo htmlspecialchars($application['email']); ?></span>
                                </td>
                                <td><?php echo htmlspecialchars($application['circle']); ?></td>
                                <td><?php echo htmlspecialchars($application['child_age']); ?></td>
                                <td><?php echo htmlspecialchars($application['start_date']); ?></td>
                                <td><?php echo htmlspecialchars($application['payment_method']); ?></td>
                                <td><span class="status-pill"><?php echo htmlspecialchars($application['status']); ?></span></td>
                                <td><?php echo htmlspecialchars($application['created_at']); ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="9" class="text-center py-4">Заявок пока нет</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
