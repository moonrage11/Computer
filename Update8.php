<?php
require_once ('config/connect.php');
$Модель = $_POST['Модель'];
$Мощность = $_POST['Мощность'];
$Форм_фактор = $_POST['Форм_фактор'];
$sql = "INSERT INTO `Блок питания`(`Модель`, `Мощность`, `Форм_фактор`) 
VALUES ('$Модель','$Мощность','$Форм_фактор')";
$connect -> query ($sql);
header ('location: index9.php');
?>