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
// daftar nilai dari 10 siswa
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
echo "Daftar Nilai Siswa awal: " . implode(", ", $nilaiSiswa) . "<br>";

// mengurutkan nilai dari yang terkecil ke terbesar
sort($nilaiSiswa);

// ambil dua nilai terendah
$nilaiTerendah = [$nilaiSiswa[0], $nilaiSiswa[1]];

// ambil dua nilai tertinggi
$duaTertinggi = [$nilaiSiswa[count($nilaiSiswa)-2], $nilaiSiswa[count($nilaiSiswa)-1]];

echo "Dua nilai terendah: " . implode(", ", $nilaiTerendah) . "<br>";
echo "Dua nilai tertinggi: " . implode(", ", $duaTertinggi) . "<br>";

// mengaabaikan nilai terendah dan tertinggi
$nilaiDiabaikan = array_merge($nilaiTerendah, $duaTertinggi);
echo "Nilai yang diabaikan: [" . implode(", ", $nilaiDiabaikan) . "]<br>";

// membuang dua nilai terendah dan dua nilai tertinggi dari daftar nilai
array_shift($nilaiSiswa); // hapus nilai terendah pertama
array_shift($nilaiSiswa); // hapus nilai terendah kedua
array_pop($nilaiSiswa);   // hapus nilai tertinggi pertama
array_pop($nilaiSiswa);   // hapus nilai tertinggi kedua

// menghitung total dan rata-rata nilai yang tersisa
$totalNilai = array_sum($nilaiSiswa);
$rata = $totalNilai / count($nilaiSiswa);

echo "Total nilai yang digunakan untuk rata-rata adalah: $totalNilai<br>";
echo "Rata-rata nilai: $rata";
?>