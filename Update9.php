<?php
require_once ('config/connect.php');
$Модель = $_POST['Модель'];
$Средняя_частота = $_POST['Средняя_частота'];
$Объем_видеопамяти = $_POST['Объем_видеопамяти'];
$Тип_памяти = $_POST['Тип_памяти'];
$sql = "INSERT INTO `Видеоадаптер`(`Модель`, `Средняя_частота`, `Объем_видеопамяти`, `Тип_памяти`) 
VALUES ('$Модель','$Средняя_частота','$Объем_видеопамяти','$Тип_памяти')";
$connect -> query ($sql);
header ('location: index10.php');
?>