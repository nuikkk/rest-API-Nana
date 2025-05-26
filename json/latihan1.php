<?php

// $mahasiswa = [
//     [
//         "nama" => "Husna Haryadi",
//         "nim" => "2217020070",
//         "email" => "Husna Haryadi00@gmail.com"
//     ],
//     [
//         "nama" => "M.Irpandi Attarza",
//         "nim" => "2617020039",
//         "email" => "mirpandiattarza@gmail.com"
//     ],
//     [
//         "nama" => "Muhammad Syafar",
//         "nim" => "2917020078",
//         "email" => "syafar1234@gmail.com"
//     ]
// ];

$dbh = new PDO('mysql:host=localhost; dbname=phpdasar', 'root', 
''); 
$db = $dbh->prepare('SELECT * FROM mahasiswa'); 
$db->execute(); 
$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa);
echo $data;
?>
