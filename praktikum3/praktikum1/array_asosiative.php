<?php

//bikin variable
$mahasiswa = [
    "nama" => "Abdul Hamid", 
    "umur" => 20, 
    "alamat" => "depok"
];

echo $mahasiswa["nama"];
echo "<br>";
foreach ($mahasiswa as $mhs) {
    echo $mhs . "<br>";
}
?>