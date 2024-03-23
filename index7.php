<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Охлаждение процессора`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Охлаждение процессора</title>
</head>
<body>
<body background = "picture/8.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Сокет</th>
      <th>Рассеиваемая мощность</th>
      <th>Материал основания</th>
      <th>Максимальная скорость вращения</th>
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
        <h2>Добавить данные о охлаждение процессора</h2>
        <form action = "Update6.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Сокет</p>
            <input type = "text"  name = "Сокет">
            <p>Рассеиваемая мощность</p>
            <input type = "text"  name = "Рассеиваемая_мощность">
            <p>Материал основания</p>
            <input type = "text"  name = "Материал_основания">
            <p>Максимальная скорость вращения</p>
            <input type = "text"  name = "Максимальная_скорость_вращения">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>