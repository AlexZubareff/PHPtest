<?php
require_once 'connect_db.php';

if (isset($_GET['id'])) {
    $imageId = $_GET['id']; //Получаем id картинки из GET запроса
    mysqli_query($connect, "UPDATE images SET vote_count = vote_count + 1 WHERE id = $imageId"); // Обновляем счетчик просмотрров в БД
    $res = mysqli_query($connect, "SELECT * FROM images WHERE id = $imageId"); // получаем данные из БД по id картинки
    $row = mysqli_fetch_assoc($res); // преобразуем в массив
    echo '<img src = "' . $row['path'] . $row['filename'] . '" >'; // Показываем картинку
    echo '<h1>Количество просмотров: ' . $row['vote_count'] . '</h1>'; // Выводим информацию о количестве просмотров
}

