<?php
    $title = 'Регистрация в системе';
    $css = [
        'register/main.css'
    ];
    @include_once 'header.php';
?>

<?= ( isset($_GET['error_password'])
    ? "<div class='error'>Пароли не совпали!</div>"
    : "" )
?>
<link rel="stylesheet" href="/assets/css/register/main.css">
<body>
<form action="" method="POST">
    <input type="text" name="name" placeholder="Фамилия Имя Отчество" required>
    <input type="text" name="login" placeholder="Укажите логин:" required>
    <input type="password" name="passsword" placeholder="Укажите пароль:" required>
    <input type="password" name="passsword_confirmed" placeholder="Укажите пароль повторно:" required>
    <input class="buttonhtml" type="submit" value="Регистрация">
</form>
</body>

<?php @include_once 'footer.php'; ?>