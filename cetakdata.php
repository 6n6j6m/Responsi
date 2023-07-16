<?php
    $nama = $_POST['nama'];
    $jarak = $_POST['jarak'];
    $hasil = $jarak * 15000;
    $biaya = "Nama : $nama, Jarak : $jarak, dan Total biaya : $hasil \n\n";
    $file = 'data.txt';

    file_put_contents($file, $biaya, FILE_APPEND);

    echo "Pesanan anda sudah terkirim";
    // $file = fopen("data.txt", "w+");

    // fwrite($file, $biaya);

    // fclose($file);
?>