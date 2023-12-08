<?php
    $title = "Главная страница";
    require "blocks/header.php";
?>
<h1>Главная</h1>
<?php
function performOperation($callback) {
    // Выполнение некоторой операции
    echo "Выполняется операция...\n";

    // Вызов колбэк функции
    call_user_func($callback);
}

function myCallbackFunction() {
    echo "Это моя колбэк функция!\n";
}

// Передача колбэк функции в качестве аргумента
performOperation('myCallbackFunction');
?>