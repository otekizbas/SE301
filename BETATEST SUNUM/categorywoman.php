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
					include 'categorymenuwoman.php';
				?>
			</div>
			<div id ="row"> 
					<?php
							include "db_baglan.php";
							$sorgu = mysql_query("SELECT * FROM  `product` where product_gender ='woman' LIMIT 8")
					?>
								<?php
							if($sorgu){
								while($duyuru = mysql_fetch_array($sorgu)){					
					echo'<div id ="urunlistegoster">';
						echo'<div id ="urunresim">';
							echo'<img src="'.$duyuru['product_image'].'" height="100%" width="100%" />';
						echo'</div>';
						echo'<div id ="urunicerik">';
							echo"<a href=showproductcategory.php?deger=".$duyuru["product_id"].">".$duyuru["product_name"]."</a>";
							echo'<P>'.$duyuru['product_description'].'</P>';
							echo'<P>'.$duyuru['product_price'].'</P>';
																			echo'<div id="product_price">'.$duyuru['product_price'].'TL</div>';
												echo'<div>';
														if($_SESSION['email']){
															echo"<a href=showproduct.php?deger=".$duyuru["product_id"].">ADD TO CART</a> - 

															<a href=showproductfavori.php?deger=".$duyuru["product_id"].">ADD TO FAVORITES</a>";
														}else{
																echo'<a href="register.php">Üye Ol</a>';
														}
												echo'</div>';
						echo'</div>';

					echo'</div>';
							}
						}
					?>
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