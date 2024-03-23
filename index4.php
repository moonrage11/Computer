<?php
require_once 'config/connect.php';
$goods = mysqli_query($connect,"SELECT * FROM `Материнская плата`");
$goods = mysqli_fetch_all($goods);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "stylesheet" href = "css/style.css">
    <title>Материнская плата</title>
</head>
<body>
<body background = "picture/5.jpg" style="background-size: cover;
background-repeat: no-repeat; background-position: center;">
    <table>
      <tr>
      <th>ID</th>
      <th>Модель</th>
      <th>Сокет</th>
      <th>Форм фактор</th>
      <th>Тип ОЗУ</th>
      <th>Количество слотов ОЗУ</th>
      <th>Максимальная частота ОЗУ</th>
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
                </tr>

                <?php
            }

        ?>

        </tr>
        </table>
        <h2>Добавить данные о материнской плате</h2>
        <form action = "Update3.php" method="post">
            <p>Модель</p>
            <input type = "text"  name = "Модель">
            <p>Сокет</p>
            <input type = "text"  name = "Сокет">
            <p>Форм фактор</p>
            <input type = "text"  name = "Форм_фактор">
            <p>Тип ОЗУ</p>
            <input type = "text"  name = "Тип_ОЗУ">
            <p>Количество слотов ОЗУ</p>
            <input type = "text"  name = "Количество_слотов_ОЗУ">
            <p>Максимальная частота ОЗУ</p>
            <input type = "text"  name = "Максимальная_частота_ОЗУ">
            <button type = "submit">Добавить</button>
        </form>
        </body>
        </html>