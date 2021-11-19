<?php
// Подключаем базу данных из файла подключения coonect_db.php
require_once 'connect_db.php';
// Подключаем style.css
echo "<link rel='stylesheet' href= style.css>";

if ($connect) {
   $res = mysqli_query($connect, "SELECT * FROM images ORDER BY vote_count DESC");
   $result = [];
   while ($row = mysqli_fetch_assoc($res)) {
      $result[] = $row;
   }
   echo '<div class = "image_galery">';
   foreach ($result as $item) {
      echo '<div class = "image_item">';
      echo '<a target="_blanc" href="photo.php?id=' . $item['id'] . '"><img id="' . $item['id'] . '" src = "' . $item['path'] . $item['filename'] . '" width="320" height="180" ></a>';
      echo '<h4>Число кликов по картинке: ' . $item['vote_count'] . '<h4/>';
      echo '</div>';
   }
   mysqli_close($connect);
} else {
   die('нет связи с базой данных gb');
}
echo '</div>';


