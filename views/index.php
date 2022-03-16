<?php
    $title = 'Моя главная страница';
    $javascript = [
        ['src' => 'user.js', 'defer' => true]
    ];
    @include_once 'header.php'
?>
<link rel="stylesheet" href="/assets/css/index/styleindex.css">
<body>
<div class="form">
    <h2>Мой первый проект</h2>
    <ul>
        <li><a href="/login">Авторизация</a></li>
        <li><a href="/register">Регистрация</a></li>
        <li><a href="/category">Категории</a></li>
        <li><a href="/categoryread">Вывести категорию</a></li>
    </ul>
</div>
</body>
<?php
@include_once 'footer.php'
?>