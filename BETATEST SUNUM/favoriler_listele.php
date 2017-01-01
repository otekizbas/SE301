				<h2>Favorites List</h2>

				<table style="width:100%;border= 1">
								  <thead>
									  <tr>
										  <td style="font-weight:bold">Product ID</td>
										  <td style="font-weight:bold">User Name</td>
										  <td style="font-weight:bold">Product Name</td>
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
											  echo '<td style="font-weight:bold">'.$duyuru['username'].'</td>';
											  echo '<td style="font-weight:bold">'.$duyuru['product_name'].'</td>';
											  echo '<td style="font-weight:bold">'.$duyuru['product_price'].'</td>';
											echo "<td><a href=favorilersil.php?deger=".$duyuru["favori_id"].">SİL</a></td>";

										  echo '</tr>';

											}
									  }
									  ?>
								  </thead>	
							</table>