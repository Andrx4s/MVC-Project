<?php
$title = 'Посты';
@include_once 'header.php';
?>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6 border border-1 rounded-2 mt-2 p-2">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="inputName" class="form-label">title</label>
                    <input type="text" name="name" id="inputName" placeholder="Фамилия Имя Отчество">
                </div>
                <div class="mb-3">
                    <label for="inputLogin" class="form-label">Ваш логин:</label>
                    <textarea name="login" id="inputLogin" placeholder="Укажите логин" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Регистрация</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>


<?php @include_once 'footer.php'; ?>
