			<?php
			include "db_baglan.php";

			if(!empty($_GET['deger'])){
			$sil=$_GET["deger"];
			
			$sorgu="delete from category where category_id=".$sil;
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt silinmiştir";
			}
		}
			?>
			<a href ="dashboard.php">Kategori silme işlemi başarıyla tamamlandı</a>