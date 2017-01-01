			<?php
			include "db_baglan.php";

			if(!empty($_GET['deger'])){
			$sil=$_GET["deger"];
			
			$sorgu="delete from user where user_id=".$sil;
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt silinmiştir";
			}
		}
		
			?>
			
			<a href ="userpage.php"><h4>Kullanıcı Sayfasına Geri Dön</h4></a>
					