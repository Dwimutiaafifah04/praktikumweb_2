<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Nilai Ujian</title>
</head>
<body>
    <h2>Form Nilai Ujian</h2>
    <form action="class.php" method="post">
        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" required><br>
        <label for="nama">Nama Mahasiswa:</label><br>
        <input type="text" id="nama" name="nama" required><br>
        <label for="matkul">Mata Kuliah:</label><br>
        <input type="text" id="matkul" name="matkul" required><br>
        <label for="nilai">Nilai:</label><br>
        <input type="text" id="nilai" name="nilai" required><br><br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>
