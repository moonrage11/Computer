<?php
require_once ('config/connect.php');
$Модель = $_POST['Модель'];
$Тип = $_POST['Тип'];
$Объем = $_POST['Объем'];
$Тактовая_частота = $_POST['Тактовая_частота'];
$Запись = $_POST['Запись'];
$sql = "INSERT INTO `ОЗУ`(`Модель`, `Тип`, `Объем`, `Тактовая_частота`, `Тайминги`) 
VALUES ('$Модель','$Тип','$Объем','$Тактовая_частота','$Тайминги')";
$connect -> query ($sql);
header ('location: index6.php');
?>