<?php
$name = $_GET['user_name'];
$email = $_GET['email'];
$pass = $_GET['password'];
$_GET['password'] = md5($pass);

if (trim($name) == '') {
    echo 'Введите имя!';
} else if (strlen(trim($name)) <= 4) {
    echo 'Слишком мало символов, введите имя заново!';
} else {
    echo "Все данные:";
    foreach ($_GET as $key => $value) {
        echo "<p>$value</p>";
    }
}