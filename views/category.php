<?php
$title = 'Категории';
@include_once 'header.php';
?>
    <link rel="stylesheet" href="/assets/css/register/main.css">
    <body>
    <form action="" method="POST">
        <input type="text" name="name" placeholder="Имя" required>
        <input type="text" name="primary" placeholder="Приоретет" required>
        <input class="buttonhtml" name="btn_delete" type="submit" value="Заполнить">
    </form>
    </body>

<?php @include_once 'footer.php'; ?>