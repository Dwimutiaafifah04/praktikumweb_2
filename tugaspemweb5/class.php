<?php

class Student {
    public $nim;
    public $nama;
    public $matkul;
    public $nilai;
    public $hasilUjian;
    public $grade;

    public function __construct($nim, $nama, $matkul, $nilai) {
        $this->nim = $nim;
        $this->nama = $nama;
        $this->matkul = $matkul;
        $this->nilai = $nilai;
        $this->hitungHasilUjian();
        $this->hitungGrade();
    }
    public function hitungHasilUjian() {
        // Implementasi perhitungan hasil ujian sesuai kebutuhan
        // Contoh: Misalnya 70 adalah batas kelulusan
        $this->hasilUjian = ($this->nilai >= 70) ? "Lulus" : "Tidak Lulus";
    }

    public function hitungGrade() {
        // Implementasi perhitungan grade sesuai kebutuhan
        // Contoh: A untuk nilai >= 80, B untuk nilai >= 70, dan seterusnya
        if ($this->nilai >= 80) {
            $this->grade = 'A';
        } elseif ($this->nilai >= 70) {
            $this->grade = 'B';
        } elseif ($this->nilai >= 60) {
            $this->grade = 'C';
        } elseif ($this->nilai >= 50) {
            $this->grade = 'D';
        } else {
            $this->grade = 'E';
        }
    }

    public function __toString() {
        return "NIM: $this->nim<br>
                Nama: $this->nama<br>
                Mata Kuliah: $this->matkul<br>
                Nilai: $this->nilai<br>
                Hasil Ujian: $this->hasilUjian<br>
                Grade: $this->grade";
    }
}

// Cek apakah ada data yang diterima dari form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil data dari form
    $nim = $_POST["nim"];
    $nama = $_POST["nama"];
    $matkul = $_POST["matkul"];
    $nilai = $_POST["nilai"];

    // Membuat objek mahasiswa
    $mahasiswa = new Student($nim, $nama, $matkul, $nilai);

    // Menampilkan hasil
    echo "<h2>Hasil Ujian:</h2>";
    echo $mahasiswa;
}

?>
