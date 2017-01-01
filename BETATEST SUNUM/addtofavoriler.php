						<?php
					include "db_baglan.php";
				
					$product_id = $_POST['product_id'];
					$username= $_SESSION["email"];
					$product_name = $_POST['product_name'];
					$product_price = $_POST['product_price'];
					$sorgu = mysql_query("INSERT INTO favoriler(`product_id`, `username`, `product_name`, `product_price`) values('$product_id','$username', '$product_name', '$product_price')");
							
							if ($sorgu){
								 echo "Kayıt Başarılı";
							}
							else{
								echo "Kayıt Esnasında Bir Sorun Oluştu!";
							}			
			?>
			<br/>
			<a href ="index.php">Favorilerime Ekleme İşlemi Başarıyla Tamamlandı. Anasayfaya Geri Dön</a>