<?php
$mahasiswa = [
    ["Nama","Nim","Kelas"],
    ["Muhammad Ilham Pratama",210101071,"SI21A2"],
    ["Haidar",210101072,"SI21A2"],
    ["Yusuf Aidan",210101073,"SI21A2"],
    ["Yusuf Fahrul",210101074,"SI21A2"],
    ["Muhammad Aidan",210101075,"SI21A2"]
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
<?= $mahasiswa[1][1]; ?>

<!-- Cara cetak array -->
    <h1>Table Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
<?php foreach ($mahasiswa as $mhs): ?>
<tr>
    <td><?= $mhs[0]; ?></td>
    <td><?= $mhs[1]; ?></td>
    <td><?= $mhs[2]; ?></td>  
</tr>
    <?php endforeach; ?>
</body>
</html>