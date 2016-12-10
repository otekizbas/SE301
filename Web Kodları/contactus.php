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
						?>	</div>
		</div>
		
		<div id="orta">
		
			<h1>Contact Us</h1>
			<div id ="adres_telefon">
				<div id ="adres">
					<h3>
						Adres
					</h3>
				</div>
				<div id ="telefon">
					<h3>
						Telefon
					</h3>
				</div>
			</div> 
		<h1>Contact Us</h1>
		<div id="contact_us">
			<h3>Contact Form</h3>
			<div>
				<label class="col-sm-2 control-label" for="input_name">Your Name</label>
				<input type="text" name="input_name" value="" id="input_name" class="form-control"/>
			</div>
			<div>
				<label class="col-sm-2 control-label" for="input_email">E-Mail Address</label>
				<input type="text" name="input_email" value="" id="input_email" class="form-control"/>
			<div>
				<label class="col-sm-2 control-label" for="input_enquiry">Enquiry</label>
				<textarea name="input_enquiry" rows="10" id="input_enquiry" class="form-control"></textarea>
			</div>
		</div>
		<input class="buton" type="submit" value="Submit">
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