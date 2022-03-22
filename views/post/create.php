<?php
$title = 'Создание постов';
@include_once __DIR__ . '/../header.php';
?>
<?= ( isset($errors['error_auth'])
    ? "<div class='alert alert-danger'>Логин и пароль не верный!</div>"
    : "" )
?>

<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-6 border border-1 rounded-2 mt-2 p-2">
            <form action="" method="POST">
                <div class="mb-3">
                    <label for="inputTitle" class="form-label">Заголовок</label>
                    <input type="text" name="tilte" <?= $isError('title', true) ?> id="inputTitle" placeholder="" required>
                    <?= $isError('title') ?>
                </div>
                <div class="mb-3">
                    <label for="textBody" class="form-label">Описание</label>
                    <textarea name="body" id="textBody" <?= $isError('password', true) ?> placeholder="" required></textarea>
                    <?= $isError('password') ?>
                </div>
                <button type="submit" class="btn btn-primary">Создать</button>
            </form>
        </div>
        <div class="col"></div>
    </div>
</div>

<?php @include_once __DIR__ . '/../footer.php'; ?>