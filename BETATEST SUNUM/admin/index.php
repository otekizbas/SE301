<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ONLINE CLOTHING || ADMIN PANEL</title>
<link href="css/style3.css" type="text/css" rel="stylesheet" />

</head>
<body>

<?php
			include "db_baglan.php";
mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
?>

	<div id = "login"; style="width: 31.7%;height: 40%; margin-left: 38%; margin-top: 5%; border-top: 2px solid #bfbfbf; background-image:url(img/loginimage.png)">
	 <h5 style="margin-left: 45px">Please enter your login details.</h5>
<form action="login.php" method="POST">
		<h5 style="margin-left: 20px">
			User Name
		</h5>
		<input type="text" name="admin_username" value="" placeholder="Username" id="input-username" class="form-control"style="margin-left: 20px">
		
		<h5 style="margin-left: 20px">
			Password
		</h5>
		<input type="password" name="adminpass" value="" placeholder="Password" id="input-password" class="form-control" style="margin-left: 20px">
		
				<h5 style="margin-left: 20px">
			Admin Type
		</h5>
		<input type="text" name="admintype" value="" placeholder="admintype" id="input-admintype" class="form-control"style="margin-left: 20px">

		<br/>
		<br/>
		<button type="submit" class="btn btn-primary" style="margin-left: 300px">Login</button>
</form
	</div>
</body>
</html>