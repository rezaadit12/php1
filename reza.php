<?php


require 'functions.php';

$jaya = query("SELECT * FROM murid");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Hallo Selamat Datang</h2>

        <table border="1" cellpadding="10" cellspacing="0">
            <tr> 
                <th>No.</th>
                <th>Nis</th>
                <th>Nama</th>
                <th>Rombel</th>
            </tr>
        <?php $i=1;?>
        <?php foreach($jaya as $hai):?>
            <tr>
                <td><?= $i?></td>
                <td><?= $hai["nis"]?></td>
                <td><?= $hai["nama"]?></td>
                <td><?= $hai["rombel"]?></td>
            </tr>
        <?php $i++; ?>
        <?php endforeach;?>
        </table>
        <br><br>

        <a href="add.php">Tambahkan Data!</a>
    </center>
</body>
</html>