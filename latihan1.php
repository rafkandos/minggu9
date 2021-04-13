<?php
    $mahasiswa = [
        [
        	"Nama" => "Raffli", 
        	"NIM" => "20510015", 
        	"Jurusan" => "Sistem Informasi", 
        	"Email" => "raffli_20510015@stimata.ac.id",
        	"Gambar" => "bocil1.jpg"
        ],
        [
        	"Nama" => "Firmansyah", 
        	"NIM" => "20511212", 
        	"Jurusan" => "Teknik Informasi", 
        	"Email" => "firman@stimata.ac.id",
        	"Gambar" => "bocil2.jpg"
        ],
        [
        	"Nama" => "Baru", 
        	"NIM" => "28931237", 
        	"Jurusan" => "Manajemen Informasi", 
        	"Email" => "baru@stimata.ac.id",
        	"Gambar" => "bocil3.jpg"
        ]
    ];

    $film = [
    	[
    		"judul" => "The Raid",
    		"sutradara" => "Ario Sagantoro",
    		"durasi" => "101 Menit",
    		"genre" => "Action",
    		"poster" => "The-Raid.jpg"
    	],
    	[
    		"judul" => "Dua Garis Biru",
    		"sutradara" => "Gina S. Noer",
    		"durasi" => "1 jam 53 menit",
    		"genre" => "Drama Keluarga",
    		"poster" => "dua-garis-biru-691x1024.jpg"
    	],
    	[
    		"judul" => "Cek Toko Sebelah",
    		"sutradara" => "Ernest Prakasa",
    		"durasi" => "98 menit",
    		"genre" => "Drama keluarga, Komedi",
    		"poster" => "Cek_Toko_Sebelah-768x960.jpg"
    	],
    	[
    		"judul" => "Ayat-ayat Cinta",
    		"sutradara" => "Hanung Bramantyo",
    		"durasi" => "121 menit",
    		"genre" => "Drama, romansa",
    		"poster" => "Ayat-ayat-Cinta-694x1024.jpg"
    	],
    	[
    		"judul" => "Critical Eleven",
    		"sutradara" => "Monty Tiwa",
    		"durasi" => "135 menit",
    		"genre" => "Drama romantis",
    		"poster" => "Critical-Eleven-768x960.jpg",
    	],
    	[
    		"judul" => "Gundala",
    		"sutradara" => "Joko Anwar",
    		"durasi" => "123 menit",
    		"genre" => "Action",
    		"poster" => "Gundala-695x1024.jpg"
    	]    	
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tugas 5</title>
</head>
<body>
    <h1>Data Film</h1>
    <ul>
        <?php foreach($film as $f) { ?>
            <li>
                <a href="latihan2.php?judul=<?=$f["judul"]?>&sutradara=<?=$f["sutradara"]?>&durasi=<?=$f["durasi"]?>&genre=<?=$f["genre"]?>&poster=<?=$f["poster"]?>"><?=$f["judul"]?></a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>