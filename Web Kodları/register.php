<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ONLINE CLOTHING</title>
<link href="css/style2.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="ust">
		<div id = "solust">
										<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
	
}
else {
    echo "<center>Sayfamıza hosgeldiniz..!";
	echo '<input type="text" name="email" value="'.$_SESSION['email'].'" placeholder="email" id="input-name1" class="form-control">';

    echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?>
	
		</div>
		<div id = "sagust">
						<?php	
							include "sagust.php";
						?>
		</div>
	</div>
	
				<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * FROM  `category`")
			?>
	<div id ="genel">
		<div id="baslık">
			<div id ="ustbaslik">
						<?php	
							include "ustbaslik.php";
						?>			
			</div>
			
			<div id ="menu">
						<?php	
							include "menu.php";
						?>
			</div>
		</div>
		
		<div id="orta">
			<div id ="register">
				<?php
					include 'registermenu.php';
				?>
			</div>
			<div id ="row"> 
				<h1>Register Account</h1>
				<h3>If you already have an account with us, please login at the <a href="account.php"> login page.</a></h3>
				<h2>Your Personal Details</h2>
				<hr/>
				
				<form method="post" name ="form" action="userekle.php">
				
					<div id= "inform">
						First Name
						<input type="text" name="firstname" value="" placeholder="First Name" id="register_firstname" class="form-control">
					</div>
					<div id= "inform">
						Last Name
						<input type="text" name="lastname" value="" placeholder="Last Name" id="register_lastname" class="form-control">
					</div>
					<div id= "inform">
						E - Mail
						<input type="email" name="email" value="" placeholder="E-Mail" id="register_email" class="form-control">
					</div>
					<div id= "inform">
						Telephone
						<input type="tel" name="telephone" value="" placeholder="Telephone" id="register_telephone" class="form-control">
					</div>
					<hr/>
					<div id= "adres_inform">
						Adres
						<input type="text" name="adres" value="" placeholder="Address" id="register_adres" class="form-control">
					</div>	

					<h2>User Details</h2>					
					<hr/>
					<div id= "inform">
						User Name
						<input type="text" name="username" value="" placeholder="User Name" id="register_username" class="form-control">
					</div>
					<div id= "inform">
						Password
						<input type="password" name="userpassword" value="" placeholder="Password" id="register_password" class="form-control">
					</div>
					<input type="submit" value="" class="btn btn-primary" id="submit_registration">
					
				</form>	
					
			</div>

		</div>
	</div>
	<div id ="footer">
		<div id="information">
			<h3>Information</h3>
			
						<?php	
							include "bilgi.php";
						?>
			
		</div>
		<div id="costumer_service">
			<h3>Costumer Service</h3>
			
						<?php	
							include "costumerservice.php";
						?>
			
		</div>
	<div id="my_account">
			<h3>My Accound</h3>
			
						<?php	
							include "my_account.php";
						?>
			
		</div>

	</div>
</body>
</html>