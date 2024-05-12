<?php
    // Подключение к базе данных
    $connectionDB = mysqli_connect(
 
        "localhost", 
 
        "root", 
 
        "q", 
 
        "assortment" 
    );
 
    // Проверка подключения
    if (mysqli_connect_errno()) {
 
        echo "Невозможно подключится к MySQL: " . mysqli_connect_error();
 
    }
?>