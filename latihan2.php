<?php 
	if (!isset($_GET["judul"])) {
		header("Location: latihan1.php");
		exit;
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Hasi Get Latihan 2</title>
</head>
<body>
	<ul>
		<li>
			<img src="img/<?= $_GET["poster"] ?>" style="width: 230px; height: 350px;" alt="">
		</li>
		<li><?= $_GET["judul"] ?></li>
		<li><?= $_GET["sutradara"] ?></li>
		<li><?= $_GET["durasi"] ?></li>
		<li><?= $_GET["genre"] ?></li>
	</ul>

	<a href="latihan1.php">Kembali ke halaman sebelumnya</a>
</body>
</html>