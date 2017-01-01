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
						?>	</div>
		</div>
		
		<div id="orta">
		
			<h1>Contact Us</h1>
			<div id ="adres_telefon">
				<div id ="adres">
					<h3>
						Address
					</h3>
					<p>Işık Üniversite Şile Kampüsü Üniversite Sokak No:2 Meşrutiyet Köyü</p>
					<h3>
						Telephone
					</h3>
					<p>0216 712 14 60</p>										
				</div>		
				<div id = "contactsag">
				<img src="img/contact_us.jpg" style="width:30%; height:180px; margin-left:50% ; margin-top:0%"/>
				</div>
			</div> 
		<div id="contact_us">
			<h3>Contact Form</h3>
			
			<form method="post" name ="form" action="contact_us_ekle.php">
			
			<div>
				<label class="col-sm-2 control-label" for="input_name">Your Name</label>
				<input type="text" name="ad" value="" id="input_name" class="form-control"/>
			</div>
			<div>
				<label class="col-sm-2 control-label" for="input_email">E-Mail Address</label>
				<input type="email" name="emailadres" value="" id="input_email" class="form-control"/>
			<div>
				<label class="col-sm-2 control-label" for="input_enquiry">Massage</label>
				<textarea name="mesaj" rows="10" id="input_enquiry" class="form-control"></textarea>
			</div>
		</div>
		<input class="buton" type="submit" value="Submit">
		
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