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
						$numberofproduct=$sorgu['adet'];	
						$adet=$sorgu['numberofproduct'];	
					echo'<div id ="showproductsol">';
						echo'<div id ="showproductsolresim">';
							echo '<img src="img/'.$duyuru['product_image'].'" height="100%" width="100%"/>';
						echo'</div>';
							echo'<h3>Product Description</h3>';
						echo'<div id ="showproductsolicerik">';
							echo'<p>'.$duyuru['product_description'].'</p>';
						echo'</div>';
					echo'</div>';
					
					echo'<div id ="showproductsag">';
							echo'<form action="addtocart.php" method="post">';
								echo'<h4>Product ID</h4>';
								echo '<input type="text" name="product_id" value="'.$duyuru["product_id"].'"  placeholder="Product ID" id="input-name1" class="form-control">';
								echo'<h4>Product Name</h4>';
								echo '<input type="text" name="product_name" value="'.$duyuru["product_name"].'"  placeholder="Product ID" id="input-name1" class="form-control">';
								echo'<h4>Availability: Available</h4>';
								echo'<h4>Product Price TL</h4>';
								echo '<input type="text" name="product_price" value="'.$duyuru["product_price"].'"  placeholder="Product ID" id="input-name1" class="form-control">';
							echo'</form>';
					echo'</div>';
										}
		}
?>