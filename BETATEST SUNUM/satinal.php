<?php   
			include "db_baglan.php";			
			
			$username = $_SESSION['username'];	
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];			
			$orderstatus = $_POST['orderstatus'];
			$order_adres = $_POST['order_adres'];

    $query = mysql_query("SELECT * FROM shoppingcart WHERE email='$email'");
			
			while($veri = mysql_fetch_array($query)){
			$product_id = $veri['product_id'];			
			$product_name = $veri['product_name'];			
			$adet = $veri['adet'];
			$product_price = $veri['product_price'];
				
			
			echo'<h4>First Name = '.$firstname.'</h4>';	
			echo'<h4>Last Name = '.$lastname.'</h4>';
			echo'<h4>Product ID = '.$product_id.'</h4>';
			echo'<h4>Product Name = '.$product_name.'</h4>';
			echo'<h4>Quantity = '.$adet.'</h4>';
			echo'<h4>Product Price = '.$product_price.'</h4>';
			echo'<h4>Order Status = '.$orderstatus.'</h4>';
			echo'<h4>Order Adres = '.$order_adres.'</h4>';
			
					$sorgu = mysql_query(" INSERT INTO `order`(`firstname`, `lastname`, `product_id`,`product_name`,'adet','product_price','orderstatus','order_adres') 
											     VALUES (`$firstname`, `$lastname`, `$product_id`,`$product_name`,'$adet','$product_price','$orderstatus','$order_adres') ");
							
							if ($sorgu){
								 echo "Kayıt Başarılı";
							}
							else{
								echo "Kayıt Esnasında Bir Sorun Oluştu!";
							}	
				echo'<hr/>';
			}

?>