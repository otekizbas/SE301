							<?php
		
					include "db_baglan.php";
					
					
				
					$product_id = $_POST['product_id'];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$adet = $_POST['adet'];
					$email = $_POST['email'];
					
					if($adet != null){
					if($product_id){
						$sorgu = mysql_query("INSERT INTO shoppingcart (`product_id`, `email`, `product_name`, `product_price`,`adet`) values('$product_id','$email', '$product_name', '$product_price', '$adet')");
					}	
							if ($sorgu){
								 echo "Kayıt Başarılı";
							}
							else{
								echo "Kayıt Esnasında Bir Sorun Oluştu!";
							}
						
					}
			
			?>
			
			<br/>
			<a href ="index.php">Anasayfaya Geri Dön</a>				
