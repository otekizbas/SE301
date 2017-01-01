<?php
$product_name = $_POST['product_name']; 
$product_price = $_POST['product_price']; 
$product_gender = $_POST['product_gender']; 

if(empty($product_name) OR empty($product_price) OR empty($product_gender)){
		echo 'Arama alanını boş bıraktın';
		echo "<script type='text/javascript'>alert('failed!')</script>";
	}else{
			$bilgi= mysql_query("SELECT * FROM product WHERE product_name LIKE $product_name%´"); 
				while ($duyuru = mysql_fetch_array($bilgi)){ 
																echo '<tr>';
										   echo '<td style="font-weight:bold">'.$duyuru['product_id'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_image'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_name'].'</td>';
										 echo '<td style="font-weight:bold">'.$duyuru['product_gender'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_price'].'</td>';
										echo "<td><a href=productduzenle.php?deger=".$duyuru["product_id"].">DÜZENLE</a> - <a href=urunsil.php?deger=".$duyuru["product_id"].">SİL</a></td>";

									  echo '</tr>';

				}
		else{
			echo'Kayıt Bulunamadı.';
		}
	}
	
?>