<?php 
	if (isset($_POST["submit"])) {
		if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
			header("Location: admin.php");
			exit;
		}
		else {
			$error = true;
		}
	}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
</head>
<body>
	<h1>Login Admin</h1>
	<?php if (isset($error)) { ?>
		<p style="color: red; font-style: italic;">Username atau password salah</p>
	<? } ?>
	<ul>
		<form action="" method="post">
			<li>
				<label for="username">Username : </label>
				<input type="text" id="username" name="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" id="password" name="password">
			</li>
			<li>
				<button type="submit" name="submit">Login</button>
			</li>
		</form>
	</ul>
</body>
</html>