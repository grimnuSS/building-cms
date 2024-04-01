<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<?php
		foreach ($veriler->result() as $veri) {
			echo $veri->header."<br>";
			echo $veri->body."<br>";
			echo $veri->image."<br>";
			echo "<a href='".base_url("edit/yeni_projeler/$veri->id")."'>Düzenle</a>";
			echo "<hr>";
		}
	?>
</body>
</html>