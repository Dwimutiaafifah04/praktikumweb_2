<?php

// Deklarasi array multidimensi mahasiswa
$mahasiswa = [
  ["Ziyad", "Teknik Informatika", "Depok"],
  ["Farhan", "Manajemen", "Jakarta"],
  ["Cindy", "Akuntansi", "Bandung"],
  ["Aisyah", "Ilmu Komunikasi", "Bogor"]
];

// Cetak isi array menggunakan perulangan foreach
foreach ($mahasiswa as $mhs) {
  echo "Nama : " . $mhs[0] . "<br>";
  echo "Jurusan : " . $mhs[1] . "<br>";
  echo "Kota : " . $mhs [2] . "<br>";
  echo "<br>";
}

?>