<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Корпус`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Корпус</title>
</head>
<body>
<body background = "picture/4.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Типоразмер</th>
      <th>Ориентация материнской платы</th>
      <th>Вес</th>
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
        <h2>Добавить данные о корпусе</h2>
        <form action = "Update2.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Типоразмер</p>
            <input type = "text"  name = "Типоразмер">
            <p>Ориентация материнской платы</p>
            <input type = "text"  name = "Ориентация_материнской_платы">
            <p>Вес</p>
            <input type = "text"  name = "Вес">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>