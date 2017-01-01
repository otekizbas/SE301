<?php
			include "db_baglan.php";
				
								$product_id=$sorgu['product_id'];
								$product_name=$sorgu['product_name'];
								$category_name=$sorgu['category_name'];
								$product_price=$sorgu['product_price'];					
								$product_gender=$sorgu['product_gender'];
								$product_description=$sorgu['product_description'];
								$product_image=$sorgu['product_image'];					
								$numberofproduct=$sorgu['numberofproduct'];					

								$sorgu=mysql_query("update product set product_id='$product_id', product_name='$product_name', category_name='$category_name' , product_price='$product_price', product_gender='$product_gender', product_description='$product_description', product_image='$product_image' , numberofproduct='$numberofproduct' where product_id='$product_id'");
	
	if(!(is_numeric($product_price)) and !(is_numeric($numberofproduct))){
		echo "Lütfen sayı girin"; 
		echo "Kayıt Başarısız";
	}else{
			if($sorgu){
					echo "Sayıdır"; 
					echo "Kayıt Başarılı";

			}
	}
?>
<a href ="order.php"><h4>Return Order Page</h4></a>