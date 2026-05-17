<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Центр развития детей</title>
    <link rel="stylesheet" href="/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <nav class="navbar navbar-expand-lg app-nav">
        <div class="container">
            <a class="navbar-brand" href="/">Центр развития детей</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-2">
                   
                    <li class="nav-item"><a class="nav-link" href="/"><?php echo htmlspecialchars( $_SESSION['username']); ?></a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Главная</a></li>
                    

                </ul>

            </div>

        </div>

    </nav>

    <main class="page-shell fade-in">

        <?php
        $path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';

        if ($path === '/') {
            include '<pages>/main.php';
            return;
        }
        if ($path === '/register') {
            include '<pages>/register.php';
            return;
        }
        if ($path === '/login') {
            include '<pages>/login.php';
            return;
        }
        if ($path === '/apply') {
            include '<pages>/apply.php';
            return;
        }
        if ($path === '/logout') {
            session_destroy();
            header("Location: /login");
            return;
        }
        include '<pages>/main.php';
        ?>


    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>