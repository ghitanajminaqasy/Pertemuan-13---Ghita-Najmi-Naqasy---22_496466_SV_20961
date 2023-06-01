<?php
$kelompok = array(
    array("Nama" => "Naqasy", "NIM" => "496466/"),
    array("Nama" => "Ahmad", "NIM" => "506193"),
    array("Nama" => "Shidqi", "NIM" => "505926"),
    array("Nama" => "Evin", "NIM" => "506178"),
    array("Nama" => "Zahra", "NIM" => "5056193"),
);

foreach ($kelompok as $anggota) {
    $nama = $anggota["Nama"];
    $nim = $anggota["NIM"];

    if ($nim % 2 == 0) {
        $peran = "Back-end Developer";
    } else {
        $peran = "Front-end Developer";
    }

    echo "Nama: " . $nama . "<br>";
    echo "NIM: " . $nim . "<br>";
    echo "Peran: " . $peran . "<br><br>";
}
?>