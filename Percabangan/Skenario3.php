<body>
    <?php
    $jam = date("16:00");
    $ada_tugas = "gak maju";
    $waktu_ngobrol = "maju";

    if ($jam > date("15:30") && $jam <= date("15:45")) {
        echo "$jam = Andi perjalanan pulang ke rumah dari sekolah";
    } else if ($jam > date("15:45") && $jam <= ("16:15")) {
        echo "$jam = Andi membeli bumbu";
    } else if ($jam > date("16:15") && $jam <= date("16:30")) {
        echo "$jam = Andi sedang mandi";
    } else if ($jam > date("16:30") && $jam <= date("17:00")) {
        echo "$jam = Andi sedang mengaji";
    } else if ($jam > date("17:00") && $jam <= date("17:30")) {
        echo "$jam = Andi chatting dengan raya";
    } else if ($jam > date("17:30") && $jam <= date("18:00")) {
        echo "$jam = Andi sedang menghafalkan dialog";
    } else if ($jam > date("18:00") && $jam <= date("18:10")) {
        echo "$jam = Andi sholat Maghrib";
    } else if ($jam > date("18:10") && $jam <= date("18:30")) {
        echo "$jam = Andi makan malam bersama keluarga";
    } else if ($jam > date("18:30") && $jam <= date("19:00")) {
        echo "$jam = waktu luang";
    } else if ($jam > date("19:00") && $jam <= date("19:10")) {
        echo "$jam = Andi sholat Isya";
    } else if ($jam >= date("04:00") && $jam <= date("05:00")) {
        echo "$jam = Andi sedang sholat Subuh dan mengaji";
    } else if ($jam < date("07:00") && $jam > date("05:00")) {
        echo "$jam = Andi persiapan dan berangkat ke sekolah";
    } else if ($jam >= date("07:30") && $jam <= date("15:30")) {
        echo "$jam = Andi masih di sekolah";
    } else if ($jam > date("19:10") && $jam <= date("22:00")) {
        if ($ada_tugas == "ada") {
            if ($jam > date("19:10") && $jam <= date("21:10")) {
                echo "$jam = Andi mengerjakan tugas sekolah";
            } else if ($jam > date("21:10") && $jam <= date("21:40")) {
                echo "$jam = Andi mengobrol dengan keluarga";
            } else {
                echo "$jam = Andi punya waktu luang hingga sebelum tidur";
            }
            if ($waktu_ngobrol = "maju") {
                echo "<br> catatan: permintaan waktu ngobrol di" . $waktu_ngobrol . "kan ditolak";
            }
        } else {
            if ($waktu_ngobrol = "maju") {
                if ($jam > date("19:10") && $jam <= date("19:40")) {
                    echo "$jam Andi mengobrol bareng keluarga,";
                } else {
                    echo "$jam = Andi punya waktu luang hingga sebelum tidur";
                }
        } else {
            if ($jam > date("19:10") && $jam <= date("21:30")) {
                echo "$jam = Andi punya waktu luang sampai jam 21:30";
            } else {
                echo "$jam = Andi mengobrol bareng keluarga";
                }
            }
            echo "<br> Yash! saatnya main game";
        }
    } else if ($jam > date("22:00") && $jam < date("24:00")) {
        echo("$jam = Andi Tidur");
    } else if ($jam > date("00:00") && $jam < date("04:00")) {
        echo("$jam = Andi Tidur");
    } else if ($jam > date("04:00") && $jam < date("07:00")) {
        echo("$jam = Andi bersiap siap ke sekolah");
    } else if ($jam > date("07:00") && $jam < date("15:30")) {
        echo("$jam = Andi Sekolah");
    } else {
        echo ("$jam = Dunia Lain");
    }
    ?>

<?php
$jadwal = [
    ["15:30", "15:45", "Andi perjalanan pulang ke rumah dari sekolah"],
    ["15:45", "16:15", "Andi membeli bumbu"],
    ["16:15", "16:30", "Andi sedang mandi"],
    ["16:30", "17:00", "Andi sedang mengaji"],
    ["17:00", "17:30", "Andi chatting dengan Raya"],
    ["17:30", "18:00", "Andi sedang menghafalkan dialog"],
    ["18:00", "18:10", "Andi sholat Maghrib"],
    ["18:10", "18:30", "Andi makan malam bersama keluarga"],
    ["18:30", "19:00", "Waktu luang"],
    ["19:00", "19:10", "Andi sholat Isya"],
    ["04:00", "05:00", "Andi sedang sholat Subuh dan mengaji"],
    ["05:00", "07:00", "Andi persiapan dan berangkat ke sekolah"],
    ["07:30", "15:30", "Andi masih di sekolah"],
    ["19:10", "21:10", "Andi mengerjakan tugas sekolah"],
    ["21:10", "21:40", "Andi mengobrol dengan keluarga"],
    ["22:00", "04:00", "Andi tidur"],
    
];
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h3>Jadwal Andi</h3>
    <table>
        <tr>
            <th>Mulai</th>
            <th>Selesai</th>
            <th>Aktivitas</th>
        </tr>
        <?php foreach ($jadwal as $item) : ?>
        <tr>
            <td><?php echo $item[0]; ?></td>
            <td><?php echo $item[1]; ?></td>
            <td><?php echo $item[2]; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
