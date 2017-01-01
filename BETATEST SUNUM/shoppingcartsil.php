			<?php
			include "db_baglan.php";

			if(!empty($_GET['deger'])){
			$sil=$_GET["deger"];
			
			$sorgu="delete from shoppingcart where shoppingcart_ID=".$sil;
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt silinmiştir";
			}
		}
		
			?>
			
			<a href ="shopping_cart.php"><h4>Shopping Cart Sayfasına Geri Dön</h4></a>
					