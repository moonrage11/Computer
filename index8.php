<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Процессор`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Процессор</title>
</head>
<body>
<body background = "picture/9.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Сокет</th>
      <th>Количество ядер</th>
      <th>Количество потоков</th>
      <th>Средняя частота</th>
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
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о процессоре</h2>
        <form action = "Update7.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Сокет</p>
            <input type = "text"  name = "Сокет">
            <p>Количество ядер</p>
            <input type = "text"  name = "Количество_ядер">
            <p>Количество потоков</p>
            <input type = "text"  name = "Количество_потоков">
            <p>Средняя частота</p>
            <input type = "text"  name = "Средняя_частота">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>