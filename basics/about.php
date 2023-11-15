<?php
    $title = "О нас";
    require "blocks/header.php";
?>
    <div class="container mt-2">
        <h1>О нас</h1>
        <form action="check_post.php" method="post">
            <input type="text" name="user_name" placeholder="Введите имя..." class="form-control"><br>
            <input type="email" name="email" placeholder="Введите почту..." class="form-control"><br>
            <input type="password" name="password" placeholder="Введите пароль..." class="form-control"><br>
            <textarea name="message" class="form-control" placeholder="Введите сообщение..."></textarea><br>
            <input type="submit" value="Отправить">
        </form>
    </div>
<div class="container mt-2">
    <h1>О нас</h1>
    <form action="check_get.php" method="get">
        <input type="text" name="user_name" placeholder="Введите имя..." class="form-control"><br>
        <input type="email" name="email" placeholder="Введите почту..." class="form-control"><br>
        <input type="password" name="password" placeholder="Введите пароль..." class="form-control"><br>
        <textarea name="message" class="form-control" placeholder="Введите сообщение..."></textarea><br>
        <input type="submit" value="Отправить">
    </form>
</div>
<?php
require "blocks/footer.php"
?>
