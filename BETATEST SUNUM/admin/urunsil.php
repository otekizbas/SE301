			<?php
			include "db_baglan.php";

			if(!empty($_GET['deger'])){
			$sil=$_GET["deger"];
			
			$sorgu="delete from product where product_id=".$sil;
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt silinmiştir";
			}
		}
			?>
			<a href ="dashboard.php">Ürün silme işlemi başarıyla tamamlandı</a>