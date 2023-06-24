<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?></title>
</head>
<body>
    <nav>
        <a href="http://localhost/Work2/reg/reg.php">Регистрация</a><br>
        <a href="http://localhost/Work2/login/login.php">Вход</a><br>
        <a href="http://localhost/Work2/posts/posts_async.php">Объявления</a><br>
        <a href="http://localhost/Work2/login/logout.php">Выход</a>
    </nav>
    <h1><?= $page_title ?></h1>
    <main>
        <?= $content ?>
    </main>
</body>
</html>