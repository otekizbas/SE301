<?php
			include "db_baglan.php";
				
								$orderid=$sorgu['orderid'];
								$firstname=$sorgu['firstname'];
								$lastname=$sorgu['lastname'];
								$product_id=$sorgu['product_id'];					
								$product_name=$sorgu['product_name'];
								$adet=$sorgu['adet'];
								$product_price=$sorgu['product_price'];
								$orderstatus=$sorgu['orderstatus'];					
								$order_adres=$sorgu['order_adres'];	
								
								$sorgu=mysql_query("update order set orderid='$orderid', firstname='$firstname', lastname='$lastname' , product_id='$product_id', product_name='$product_name' , adet='$adet', product_price='$product_price', orderstatus='$orderstatus' , order_adres='$order_adres' where orderid='$orderid'");
	
	if(!(is_numeric($adet))){
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