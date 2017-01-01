<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT `category_name` FROM  `category` WHERE category_gender =  'kid'")			
?>
			<?php
			if($sorgu){
						 while($duyuru = mysql_fetch_array($sorgu)){
								 echo"<a href=categorykidayri.php?deger=".$duyuru['category_name'].">".$duyuru['category_name']."</a>";
								 echo'<hr/>';
						}
		}
?>