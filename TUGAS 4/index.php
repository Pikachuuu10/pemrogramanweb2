<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum 4</title>
</head>
<body>
    <h1>Konsep Pewarisan</h1>
    <div class="">
        <?php
            require_once "orangbiasa.php";
            require_once "orang inggris.php";
            require_once "mahasiswa.php";

            $james = new OrangInggris();
            $james->setNama('James smith');
            $james->ucapSalam();

            echo "<br>";

            $rano = new OrangBiasa();
            $rano->setNama('Rano karno');
            $rano->ucapSalam();

            echo "<br>";

            $mahasiswa = new Mahasiswa();
            $mahasiswa->setNama('erika');
            $mahasiswa->setNim("701230056");

            $nilaiMahasiswa = new Nilai();
            $nilaiMahasiswa->setTugas(70);
            $nilaiMahasiswa->setUts(67);
            $nilaiMahasiswa->setUas(90);

            $Mahasiswa->SetNilai($nilaiMahasiswa);

            $mahasiswa->ucapSalam();
            $mahasiswa->tampilkanData();
    ?>
    </div>
</body>
</html>