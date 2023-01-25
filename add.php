<?php
require 'functions.php';

if(isset($_POST["submit"])){

    if(add($_POST) > 0){
        header("Location: reza.php ");
    }else{
        echo "data gagal";
    }
}


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
        <h2>Tambahkan Data!</h2>
        <form action="" method="post">
        <input type="text" name="nis" placeholder="Masukan Nis" required><br><br>
        <input type="text" name="nama" placeholder="Masukan nama"><br><br>
        <input type="text" name="rombel" placeholder="Masukan rombel"><br><br>
       
        
  
    <hr><br>
        <h3>INPUT NILAI!</h3>
        <input type="number" name="pjok" placeholder="Nilai PJOK"><br>
        <input type="number" name="inggris" placeholder="Nilai INGGRIS"><br>
        <input type="number" name="pipas" placeholder="Nilai PIPAS"><br>
        <input type="number" name="mtk" placeholder="Nilai MTK"><br><br>
        <button type="submit" name="submit" >Tambah</button>
    </center>
    </form>
</body>
</html>