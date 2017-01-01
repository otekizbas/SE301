				<?php
			include "db_baglan.php";
			$email = $_POST['email'];
			$sorgu = mysql_query("SELECT * 
FROM  `shoppingcart` 
WHERE email = '$email' and shoppingcart_ID = '$shoppingcart_ID'");			
?>
				<h2>Shopping Cart</h2>

				<table style="width:100%;border= 1">
								  <thead>
									  <tr>
										  <td style="font-weight:bold">Product ID</td>
										  <td style="font-weight:bold">Product Name</td>
										  <td style="font-weight:bold">Quantity</td>
										  <td style="font-weight:bold">Product Price</td>
										  <td style="font-weight:bold">Action</td>
									  </tr>
								  </thead>	
								<thead>								  
									  <?php
												 if($sorgu){
																 while($duyuru = mysql_fetch_array($sorgu)){

												echo '<tr>';
											   echo '<td style="font-weight:bold">'.$duyuru['product_id'].'</td>';
											  echo '<td style="font-weight:bold">'.$duyuru['product_name'].'</td>';
											  echo '<td style="font-weight:bold">'.$duyuru['adet'].'</td>';
											  echo '<td style="font-weight:bold">'.$duyuru['product_price'].'</td>';
											echo "<td><a href=shoppingcartsil.php?deger=".$duyuru["shoppingcart_ID"].">SİL</a></td>";

										  echo '</tr>';

											}
									  }
									  ?>
								  </thead>	
							</table>