<?php
//function

echo date("l");
echo"<br>";

//array

$nama = ["Ilham",1,"Yoi",false,true];
var_dump($nama);
echo"<br>";
$nama[]= "Pratama";
var_dump($nama);

//Array latihan
function salam($nama ="Tama",$umur="20"){
    return "Selamat $nama. $umur!";
}

//pengulangan pada array

$angka = [1,4,6,7,8,95];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .kotak{
            height:50px;
            width:50px;
            text-align: center;
            background-color:salmon;
            line-height:50px;
            margin:3px;
            float:left;
            transition: 1s;


        }
        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%
        }
        .bg{
            background-color:red;
        }
    </style>
</head>
<body>
                <!-- Tampilan -->
            <br><br>
            <?php echo salam();?>
            <br>

            <!-- Kotak angka menggunakan count / for -->

            <?php for ($a=0; $a < count($angka); $a++) :?>
            <div class= "kotak"><?= $angka[$a];?></div>
            <?php endfor; ?>
            <br><br><br><br>

            <!-- Kotak angka menggunakan as / foreach -->

            <?php foreach ( $angka as $b ) : ?>
                <div class="kotak"><?= $b;?></div>
            <?php endforeach; ?>
            <br><br><br><br>

            <!-- Membuat Table menggunkan for dan if PHP  -->
            <table border="1">
                <?php for ( $a=1; $a < 6; $a++ ) : ?>
                    <?php if ($a % 2 == 0 ) : ?>
                        <tr class="bg">
                            <?php else: ?>
                                <tr>
                    <?php endif ; ?>                
                        <?php for ( $b=1; $b < 5; $b++ ) : ?>
                            <td><?= $a,$b ?></td>
                        <?php endfor; ?>
                <?php endfor; ?>  
</body>
</html>



