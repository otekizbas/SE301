<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ONLINE CLOTHING</title>
<link href="css/style2.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="ust">
		<div id = "solust"></div>
		<div id = "sagust">
			<img src="img/telefon.png" style="width:25px; height:25px"/>
			+90 543 601 76 10
			<img src="img/accound.png" style="width:25px; height:25px; margin-left: 10px; margin-top: 5px;"/>
			My Account
			<img src="img/shopingcard.png" style="width:25px; height:25px; margin-left: 10px; margin-top: 5px;"/>
			Shoping Cart
		</div>
	</div>
	
				<?php
			$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
			$db_sunucu  = "Localhost";       #Sunucu Adı
			$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
			$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
			$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
			if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
			mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
			$sorgu = mysql_query("SELECT * FROM  `category`")
			?>
	<div id ="genel">
		<div id="baslık">
			<div id ="ustbaslik">
					<div id ="logo">
						<img src="img/logo.png" style="width:100px; height:50px"/>
					</div>
					<div id ="search">
						<input type="text" name="searchtext" value="" placeholder="Search" class="form-control input-lg"; style="width:70%; height: 30px">
						<button type="button" class="btn btn-default btn-lg"style="width:20%; height: 30px;">Search</button>
					</div>
					<div id ="shopingcart">
					<button type="button" data-toggle="dropdown" style="width:100%; height: 30px;"><span id="cart-total">0 item(s) - $0.00</span></button></div>
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
				<h3>If you already have an account with us, please login at the <a href=""> login page.</a></h3>
				<h2>Your Personal Details</h2>
				<hr/>
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
						<input type="text" name="address" value="" placeholder="Address" id="register_adres" class="form-control">
					</div>	

					<h2>User Details</h2>					
					<hr/>
					<div id= "inform">
						User Name
						<input type="text" name="username" value="" placeholder="User Name" id="register_username" class="form-control">
					</div>
					<div id= "inform">
						Password
						<input type="text" name="password" value="" placeholder="Password" id="register_password" class="form-control">
					</div>
					<div id= "inform">
						Password Confirm
						<input type="text" name="password_confirm" value="" placeholder="Password Confirm" id="register_passwordconfirm" class="form-control">
					</div>
					<input type="checkbox" name="agree" value="1">
					I have read and agree to the Privacy Policy
					<br/>
					<input type="submit" value="" class="btn btn-primary" id="submit_registration">
			</div>

		</div>
	</div>
	<div id ="footer">
		<div id="information">
			<h3>Information</h3>
		</div>
		<div id="costumer_service">
			<h3>Costumer Service</h3>
		</div>
	<div id="my_account">
			<h3>My Accound</h3>
		</div>
	</div>
</body>
</html>