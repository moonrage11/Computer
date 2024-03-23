<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Блок питания`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Блок питания</title>
</head>
<body>
<body background = "picture/10.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Мощность</th>
      <th>Форм фактор</th>
      </tr>
        <?php

            foreach($goods as $item)  {
                ?>
                <tr>
                <td><?php echo $item[0] ?></td>
                <td><?php echo $item[1] ?></td>
                <td><?php echo $item[2] ?></td>
                <td><?php echo $item[3] ?></td>
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о блоке питания</h2>
        <form action = "Update8.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Мощность</p>
            <input type = "text"  name = "Мощность">
            <p>Форм фактор</p>
            <input type = "text"  name = "Форм_фактор">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>