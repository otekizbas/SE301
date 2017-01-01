						<?php
			include "db_baglan.php";
			
			$product_name = $_POST['product_name'];
			$product_description= $_POST['product_description'];
			$category_name = $_POST['category_name'];
			$product_price	 = $_POST['product_price'];
			$product_gender= $_POST['product_gender'];
			$product_image = $_POST['product_image'];
			$numberofproduct = $_POST['numberofproduct'];
			
			$sorgu = mysql_query("insert into product(product_name, product_description, category_name,product_price, product_gender, product_image,numberofproduct) VALUES ('$product_name','$product_description','$category_name', '$product_price','$product_gender','$product_image','$numberofproduct')");

	
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
<a href="addproduct.php"><h3>Ürün Ekle</h3></a>