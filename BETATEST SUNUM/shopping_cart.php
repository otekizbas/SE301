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
						?>			</div>
		</div>		
		<div id="orta">
		<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * 
FROM  `shoppingcart` 
WHERE email = '$email' and shoppingcart_ID = '$shoppingcart_ID'");
		?>
			<div id = "aboutsol">
					<?php
					if($_SESSION['email']){
						echo '<input type="text" name="email" value="'.$_SESSION['email'].'" placeholder="email" id="input-name1" class="form-control">';
						include "shoppingcartlistele.php";
					}else{
						echo'<a href="register.php">Üye Ol</a>';
					}
					?>					
					<div id="shoppingcart_buttons">
						<div id="continueshoppingdiv">
							<a href="index.php"><h4>Continue Shopping</h4></a>
						</div>
						<div id="checkoutdiv">
							<a href="checkout.php"><h4>Checkout</h4></a>
						</div>
					</div>
			</div>
			<div id = "aboutsag">
				<img src="img/shop_cart.png" style="width:55%; height:40%; padding:10%"/>
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