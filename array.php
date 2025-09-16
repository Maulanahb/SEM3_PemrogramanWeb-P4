<?php
    $nilaiSiswa = [85, 92, 78, 64, 90, 55, 88, 79, 70, 96];
    $nilaiLulus = [];

    foreach ($nilaiSiswa as $nilai) {
        if ($nilai >= 70) {
            $nilaiLulus[] = $nilai;
        }
    }
    echo "Daftar nilai siswa yang lulus: " . implode(', ', $nilaiLulus);
    echo "<br>";

    $daftarKaryawan=[
        ['Alice',7],
        ['Bob',3],
        ['Charlie',9],
        ['Diana',5],
        ['Eve',6]
    ];

    $karyawanPengalamanLimaTahun=[];
    foreach($daftarKaryawan as $karyawan){
        if($karyawan[1]>5){
            $karyawanPengalamanLimaTahun[]=$karyawan[0];
        }
    }
    echo "Daftar karyawan dengan penglaman kerja lebih dari 5 tahun: ".implode(", ",$karyawanPengalamanLimaTahun);
    echo "<br>";
    $daftarNilai =[
        'Matematika'=>[
            ['Alice',85],
            ['Bob',94],
            ['Charlie',78],
        ],
        'Fisika'=>[
            ['Alice',90],
            ['Bob',88],
            ['Charlie',75],
        ],
        'Kimia'=>[
            ['Alice',92],
            ['Bob',80],
            ['Charlie',85],
        ],
    ];
    $mataKuliah ='Fisika';

    echo "Daftar nilai mahasiswa dalam mata kuliah $mataKuliah:<br>";

    foreach($daftarNilai[$mataKuliah] as $nilai){
        echo "Nama: {$nilai[0]}, Nilai: {$nilai[1]}<br>";
    }
    //soal 5.4
    //Membuat array dua dimensi untuk data siswa
    $daftarSiswa = [
        ["nama" => "Alice", "nilai" => 85],
        ["nama" => "Bob", "nilai" => 92],
        ["nama" => "Charlie", "nilai" => 78],
        ["nama" => "David", "nilai" => 64],
        ["nama" => "Eva", "nilai" => 90]
    ];

    //Hitung total nilai untuk menemukan rata-rata
    $totalNilai = 0;
    foreach ($daftarSiswa as $siswa) {
        $totalNilai += $siswa["nilai"];
    }

    $rataRataKelas = $totalNilai / count($daftarSiswa);
    echo "Rata-rata kelas adalah: " . number_format($rataRataKelas, 2) . "<br>";

    //Filter dan tampilkan siswa yang nilainya di atas rata-rata
    echo "Daftar siswa dengan nilai di atas rata-rata:<br>";
    foreach ($daftarSiswa as $siswa) {
        if ($siswa["nilai"] > $rataRataKelas) {
            echo "Nama: " . $siswa["nama"] . ", Nilai: " . $siswa["nilai"] . "<br>";
        }
    }
?>
