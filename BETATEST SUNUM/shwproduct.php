<?php
		if($sorgu){
					while($duyuru = mysql_fetch_array($sorgu)){
																 
						$product_id=$sorgu['product_id'];
						$product_name=$sorgu['product_name'];
						$product_description=$sorgu['product_description'];
						$product_category_name=$sorgu['product_category_name'];					
						$product_price=$sorgu['product_price'];
						$product_gender=$sorgu['product_gender'];
						$product_image=$sorgu['product_image'];	
						$numberofproduct=$sorgu['numberofproduct'];	
					echo'<div id ="showproductsol">';
						echo'<div id ="showproductsolresim">';
							echo '<img src="'.$duyuru['product_image'].'" height="100%" width="100%" />';
						echo'</div>';
							echo'<h3>Product Description</h3>';
						echo'<div id ="showproductsolicerik">';
							echo'<p>'.$duyuru['product_description'].'</p>';
						echo'</div>';
					echo'</div>';
					echo'<div id ="showproductsag">';
					echo'<form action="addtocart.php" method="post">';
						echo'<h4>Product ID</h4>';
						echo'<h2>'.$duyuru['product_id'].'</h2>';
						echo'<h4>Product Name</h4>';
						echo'<h2>'.$duyuru['product_name'].'</h2>';
						echo'<h4>Availability: Available</h4>';
						echo'<h4>Product Price TL</h4>';
						echo'<h2>'.$duyuru['product_price'].'</h2>';
						echo'<h4>Adet</h4>';
						echo'<h2>'.$duyuru['adet'].'</h2>';
						
						echo'<div id ="addtocartbuton">';
							
							if($_SESSION['email']){
								echo"<a href=addtocart.php?deger=".$duyuru["product_id"].">ADD TO CART</a>";
							}else{
								echo'<a href="register.php">Üye Ol</a>';
							}
						echo'</div>';
						echo'</form>';
					echo'</div>';
					}
		}
?>