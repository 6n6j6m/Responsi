<?php
    $jarak = $_POST['jarak'];
    $hasil = $jarak * 15000;
    $biaya = "Jarak : $jarak dan Total biaya : $hasil \n\n";
    $file = 'data.txt';

    file_put_contents($file, $biaya, FILE_APPEND);

    // $file = fopen("data.txt", "w+");

    // fwrite($file, $biaya);

    // fclose($file);
?>