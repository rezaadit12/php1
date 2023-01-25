<?php

$data = mysqli_connect("localhost","root","","phpdasar");

function query($query){
    global $data;
    $result = mysqli_query($data, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;

}

function add($tambah){
    global $data;

    $nis = htmlspecialchars($_POST["nis"]);
    $nama =$_POST["nama"];
    $rombel =$_POST["rombel"];


    $query="INSERT INTO murid
            VALUES 
            ('','$nis','$nama','$rombel')";
        mysqli_query($data, $query);


        $pjok = $_POST["pjok"];
        $inggris = $_POST["inggris"];
        $pipas =$_POST["pipas"];
        $mtk =$_POST["mtk"];
    
        $raichan ="INSERT INTO nilai
                VALUES
                ('$pjok','$inggris','$pipas','$mtk')";
                mysqli_query($data, $raichan);

        return mysqli_affected_rows($data);


}

// function nilai($nilai){
//     global $data;
//     $pjok = $_POST["pjok"];
//     $inggris = $_POST["inggris"];
//     $pipas =$_POST["pipas"];
//     $mtk =$_POST["mtk"];

//     $raichan ="INSERT INTO nilai
//             VALUES
//             ('$pjok','$inggris','$pipas','$mtk')";
//             mysqli_query($data, $raichan);

// }

?>