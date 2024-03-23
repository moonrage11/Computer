<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Видеоадаптер`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Видеоадаптер</title>
</head>
<body>
<body background = "picture/11.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Средняя частота</th>
      <th>Объем видеопамяти</th>
      <th>Тип памяти</th>
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
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о видеокарте</h2>
        <form action = "Update9.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Средняя частота</p>
            <input type = "text"  name = "Средняя_частота">
            <p>Объем видеопамяти</p>
            <input type = "text"  name = "Объем_видеопамяти">
            <p>Тип памяти</p>
            <input type = "text"  name = "Тип_памяти">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>