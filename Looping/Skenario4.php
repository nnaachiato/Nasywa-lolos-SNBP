<?php
//Kasus 1
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = array("1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13", "14", "15", "16", "17", "18", "19", "20", "21", "22", "23", "24", "25", "26", "27", "28", "29", "30", "31");
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = array("2024", "2025", "2026");

//Senin, 10 - Mar - 2025

echo $hari[1] .", ".$tanggal[9]." - ".$bulan[2]." - ".$tahun[1];
echo "<br>";

//Selasa, 18 - Mar - 2025
echo $hari[2] .", ".$tanggal[17]." - ".$bulan[2]." - ".$tahun[1];

echo "<hr>";
for ($i = 30; $i >= 10; $i--){
    echo $i;
    echo "<br>";
}

echo "<hr>";
$jml_hari = count($hari);
for($h = 0; $h < $jml_hari; $h++ ){
    echo $hari[$h];
    echo "<br>";
}

echo "<hr>";
foreach ($tanggal as $tgl) {
    echo $tgl;
    echo "<br>";
}

echo "<hr>";
$b = 0;
$jml_bulan = count($bulan);
while ($b < $jml_bulan) {
    echo $bulan[$b];
    echo "<br>";
    $b++;
}

echo "<hr>";
$t = 0;
$jml_tahun = count($tahun);
do {
    echo $tahun[$t];
    echo "<br>";
    $t++;
}while ($t < $jml_tahun);

echo "<hr>";

//Kasus 2
echo "Tek kotek kotek kotek" . "<br>";
echo "Anak ayam turun berkotek" . "<br>";
echo "<br>";
for ($i = 30; $i > 1; $i--) {
    echo "Anak ayam turunlah $i, mati satu tinggal " . ($i - 1);
    echo "<br>";
}
echo "Anak ayam tinggal $i, mati satu tinggal induknya:(";

echo "<hr>";

//Kasus3
echo "Mawar Sholeh: ";
$jumlah_sholeh = 0;
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "$mawar, ";
    $jumlah_sholeh++;
}
echo "<br>Jumlah Mawar🌹: $jumlah_sholeh<br><br>";

echo "Mawar untuk Ibu: ";
$jumlah_ibu = 0;
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "$mawar, ";
    $jumlah_ibu++;
}
echo "<br>Jumlah Mawar🌹: $jumlah_ibu<br><br>";

//Kasus4
echo "<hr>";
echo " 🎶Playlist lagu Ambyar : <br><br>";

$lagu_ambyar = [
    "galau" => [
        "judul" => "Mesin Waktu", 
        "penyanyi" => "Budi Doremi"
    ],
    "bersemangat" => [
        "judul" => "Selamat Pagi", 
        "penyanyi" => "Ran"
    ],
    "marah" => [
        "judul" => "Yang Patah Tumbuh, yang Hilang Berganti", 
        "penyanyi" => "Banda Neira"
    ]
];

foreach ($lagu_ambyar as $mood => $semua){
    echo "Ketika ambyar sedang " . $mood . ", dia mendengarkan lagu " . $semua['judul'] . " oleh " . $semua['penyanyi'] . "<br>";
}
?>