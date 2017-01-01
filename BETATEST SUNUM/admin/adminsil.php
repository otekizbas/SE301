			<?php
			include "db_baglan.php";

			if(!empty($_GET['deger'])){
			$sil=$_GET["deger"];
			
			$sorgu="delete from admin where admin_ID=".$sil;
			if(mysql_query($sorgu) or die (hata))
			{
				echo " kayıt silinmiştir";
			}
		}
		
			?>
			
			<a href ="adminpage.php"><h4>Admin Sayfasına Geri Dön</h4></a>
					