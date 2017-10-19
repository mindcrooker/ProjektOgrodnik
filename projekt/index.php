<!DOCTYPE html>
<html>
	<head lang="pl">
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<meta charset="utf-8"/>
		<title>Ogrodnix 5000 ULTRA</title>
	</head>
	<body>
		<div id="container">
			<div class="header">
				<img src="logo.png"/>
			</div>
			<div class="control">
				<p>Tutaj bedzie panel sterowania. </p>
			</div>
			<div class="main">
				<?php
					require_once "DBconnect.php";
					
					$connect=@new mysqli($host, $db_user, $db_password, $db_name); 
					if($connect->connect_errno!=0){
						echo $connect->errno;
					}else{
						echo "Polaczono sie pomyslnie z baza danych. ";
					}
						
				?>
			</div>
			<div class="footer">
				<p>Olaf Drozdowski, Paweł Zgorzały. 2017 &copy All rights reserved.</p>
			</div>
		</div>
	</body>
</html>