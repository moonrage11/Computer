<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Компьютер`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Компьютер</title>
</head>
<body>
<body background = "picture/3.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Название</th>
      <th>Производитель</th>
      <th>ID сотрудник</th>
      <th>ID процессор</th>
      <th>ID материнская плата</th>
      <th>ID видеоадаптер</th>
      <th>ID ОЗУ</th>
      <th>Количество плашек ОЗУ</th>
      <th>ID охлаждение процессора</th>
      <th>ID накопитель</th>
      <th>ID блок питания</th>
      <th>ID корпус</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                <td><?php echo $item[4] ?></td>
                <td><?php echo $item[5] ?></td>
                <td><?php echo $item[6] ?></td>
                <td><?php echo $item[7] ?></td>
                <td><?php echo $item[8] ?></td>
                <td><?php echo $item[9] ?></td>
                <td><?php echo $item[10] ?></td>
                <td><?php echo $item[11] ?></td>
                <td><?php echo $item[12] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить новый компьютер</h2>
        <form action = "Update.php" method="post">
            <p>Название</p>
            <input type = "text"  name = "Название">
            <p>Производитель</p>
            <input type = "text"  name = "Производитель">
            <p>ID сотрудник</p>
            <input type = "text"  name = "ID_сотрудник">
            <p>ID процессор</p>
            <input type = "text"  name = "ID_процессор">
            <p>ID материнская плата</p>
            <input type = "text"  name = "ID_материнская_плата">
            <p>ID видеоадаптер</p>
            <input type = "text"  name = "ID_видеоадаптер">
            <p>ID ОЗУ</p>
            <input type = "text"  name = "ID_ОЗУ">
            <p>Количество плашек ОЗУ</p>
            <input type = "text"  name = "Количество_плашек_ОЗУ">
            <p>ID охлаждение процессора</p>
            <input type = "text"  name = "ID_охлаждение_процессора">
            <p>ID накопитель</p>
            <input type = "text"  name = "ID_накопитель">
            <p>ID блок питания</p>
            <input type = "text"  name = "ID_блок_питания">
            <p>ID корпус</p>
            <input type = "text"  name = "ID_корпус">
            <button type = "submit">Добавить</button>
        </form>