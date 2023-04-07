<?php
//Macam - macam Penulisan array 

// $mahasiswa = array("Ilham",210101072,TRUE);
// //single array
// $mahasiswa1 = ["Ilham",210101072,FALSE];
// //multi dimension array
// $mahasiswa2 = [
//     ["Ilham",210101072,FALSE],
//     ["Ilham",210101072,FALSE],
//     ["Ilham",210101072,FALSE],
//     ["Ilham",210101072,FALSE]
// ];

// array associative
// key string

$mahasiswa2 = [
[
    "nama" => "Ilham",
    "nim" => 210101072,
    "Kelas" => "SI21A2",
    "tugas" => [90,80,98]
],

[
    "nama" => "Haidar",
    "nim" => 210101072,
    "Kelas" => "SI21A2",
],

];

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
<h1>Table Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
<?php foreach ($mahasiswa2 as $mhs): ?>
<ul>
    <li>Nim : <?= $mhs["nim"]; ?></li>
    <li>Nama :<?= $mhs["nama"]; ?></li>
    <li><?= $mhs["Kelas"]; ?></li> 
</ul>
    <?php endforeach; ?>
</body>
</html>