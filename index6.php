<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `ОЗУ`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>ОЗУ</title>
</head>
<body>
<body background = "picture/7.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Тип</th>
      <th>Объем</th>
      <th>Тактовая частота</th>
      <th>Запись</th>
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
                <td><?php echo $item[4] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о оперативной памяти</h2>
        <form action = "Update5.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Тип</p>
            <input type = "text"  name = "Тип">
            <p>Объем</p>
            <input type = "text"  name = "Объем">
            <p>Тактовая частота</p>
            <input type = "text"  name = "Тактовая_частота">
            <p>Тайминги</p>
            <input type = "text"  name = "Тайминги">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>