<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Azizoğulları İnşaat | Giriş Ekranı</title>
	<style>
		body {
			font-family: 'Arial', sans-serif;
			background-color: #f2f2f2;
			margin: 0;
			display: flex;
			justify-content: center;
			align-items: center;
			height: 100vh;
		}

		form {
			background-color: #fff;
			padding: 20px;
			border-radius: 8px;
			box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			width: 300px;
			text-align: center;
		}

		h1 {
			color: #333;
		}

		input {
			width: 100%;
			padding: 10px;
			margin: 8px 0;
			box-sizing: border-box;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		input[type="submit"] {
			background-color: #4caf50;
			color: white;
			cursor: pointer;
		}

		input[type="submit"]:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
<form action="<?php echo base_url("admin/login_post")?>" method="post">
	<h1>Admin Giriş Ekranı</h1>
	<input type="text" name="username" id="username" placeholder="Kullanıcı Adı" required>
	<input type="password" name="password" id="password" placeholder="Şifre" required>
	<input type="submit" value="Gönder">
</form>
</body>
</html>
