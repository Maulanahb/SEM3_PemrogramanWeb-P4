<?php
    $a=10;
    $b= 5;

    $hasilTambah= $a+$b;
    $hasilKurang= $a-$b;
    $hasilKali= $a*$b;
    $hasilBagi= $a/$b;
    $sisaBagi= $a%$b;
    $pangkat= $a**$b;

    echo "Hasil Tambah : $hasilTambah <br>";
    echo "Hasil Kurang : $hasilKurang <br>";
    echo "Hasil Kali : $hasilKali <br>";
    echo "Hasil Bagi : $hasilBagi <br>";
    echo "Sisa Bagi : $sisaBagi <br>";
    echo "Pangkat : $pangkat <br>";

    $hasilSama= $a == $b ;
    $hasilTidakSama= $a != $b ;
    $hasilLebihKecil= $a < $b ;
    $hasilLebihBesar= $a > $b ;
    $hasilLebihKecilSama = $a <= $b ;
    $hasilLebihBesarSama = $a >= $b ;

    echo "Hasil Sama : "; var_dump($hasilSama); echo "<br>";
    echo "Hasil Tidak Sama : "; var_dump($hasilTidakSama); echo "<br>";
    echo "Hasil Lebih Kecil : "; var_dump($hasilLebihKecil); echo "<br>";
    echo "Hasil Lebih Besar : "; var_dump($hasilLebihBesar); echo "<br>";
    echo "Hasil Lebih Kecil Sama : "; var_dump($hasilLebihKecilSama); echo "<br>";
    echo "Hasil Lebih Besar Sama : "; var_dump($hasilLebihBesarSama); echo "<br>";
?>