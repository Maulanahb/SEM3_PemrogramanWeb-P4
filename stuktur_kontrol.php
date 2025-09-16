<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik <= 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik <= 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf: D";
}
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}
echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 5000 kilometer."
;
echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;
for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}
echo "Jumlah buah yang dihasilkan dari $jumlahLahan lahan adalah $jumlahBuah buah.";
echo "<br>";

$skorUjian=[85,92,78,96,88];
$totalSkor=0;
foreach($skorUjian as $skor){
    $totalSkor+=$skor;
}
echo "Total skor ujian adalah $totalSkor.";
echo "<br>";

$nilaiSiswa=[85,92,58,64,90,55,88,79,70,96];
foreach($nilaiSiswa as $nilai){
    if($nilai < 60){
        echo "Nilai: $nilai (Tidak Lulus)<br>";
        continue;
    }else{
        echo "Nilai:$nilai (Lulus)<br>";
    }
}
echo "<br>";
//dafatar nilai dari 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
//urutkan aaray dari nilai rendah ke tinggi
sort($nilaiSiswa);
//mencari nilai terendah dan tertinggi secara otomatis
$nilaiTerendah1 = $nilaiSiswa[0];
$nilaiTerendah2 = $nilaiSiswa[1];
$nilaiTertinggi1 = end($nilaiSiswa);//end untuk mengambil nilai terakhir pada array;
array_pop($nilaiSiswa);//menghapus nilai terakhir pada array
$nilaiTertinggi2 = end($nilaiSiswa);//end untuk mengambil nilai terakhir pada array;
// Mengurutkan kembali array dan membuang 2 nilai terendah dan 2 nilai tertinggi
$nilaiUntukDihitung = array_slice($nilaiSiswa, 2, -2);
    
    // Menghitung total nilai dari sisa array
    $totalNilai = 0;
    foreach ($nilaiUntukDihitung as $nilai) {
        $totalNilai += $nilai;
    }

    // Menampilkan hasilnya
    echo "Daftar nilai awal: " . implode(", ", $nilaiSiswa) . "<br>";
    echo "Dua nilai terendah: $nilaiTerendah1 dan $nilaiTerendah2<br>";
    echo "Dua nilai tertinggi: $nilaiTertinggi2 dan $nilaiTertinggi1<br>";
    echo "Nilai yang diabaikan: [$nilaiTerendah1, $nilaiTerendah2, $nilaiTertinggi2, $nilaiTertinggi1]<br>";
    echo "Total nilai yang digunakan untuk rata-rata adalah: $totalNilai";

?>