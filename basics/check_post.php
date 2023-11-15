<?php
    $name = $_POST['user_name'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $_POST['password'] = md5($pass);

    if (trim($name) == '') {
        echo 'Введите имя!';
    } else if (strlen(trim($name)) <= 4) {
        echo 'Слишком мало символов, введите имя заново!';
    } else {
        echo "Все данные:";
        foreach ($_POST as $key => $value) {
            echo "<p>$value</p>";
        }
    }
