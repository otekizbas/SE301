﻿<form action="addtocart.php" method="post">

								<?php
							
										if($sorgu){
											while($duyuru = mysql_fetch_array($sorgu)){
												echo'<div id = "urun_icerik">';
												echo'<div id = "urun_resim">';
												echo '<img src="img/'.$duyuru['product_image'].'" height="200" width="200" />';

												echo'</div>';
												echo"<a href=showproduct.php?deger=".$duyuru["product_id"].">".$duyuru["product_name"]."</a>";
												echo'<div id="urun_aciklama">'.$duyuru['product_description'].'</div>';
												echo'<div id="product_price">'.$duyuru['product_price'].'TL</div>';
												echo'<div id ="addtocartbuton">';
													echo"<a href=showproduct.php?deger=".$duyuru["product_id"].">ADD TO CART</a>";
												echo'</div>';
												echo'</div>';
											}
										}
								?>
</form>