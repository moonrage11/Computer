<?php
require_once ('config/connect.php');
$Модель = $_POST['Модель'];
$Тип = $_POST['Тип'];
$Объем = $_POST['Объем'];
$Чтение = $_POST['Чтение'];
$Запись = $_POST['Запись'];
$sql = "INSERT INTO `Накопитель`(`Модель`, `Тип`, `Объем`, `Чтение`, `Запись`) 
VALUES ('$Модель','$Тип','$Объем','$Чтение','$Запись')";
$connect -> query ($sql);
header ('location: index5.php');
?>