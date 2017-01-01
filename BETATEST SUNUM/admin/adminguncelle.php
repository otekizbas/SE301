<?php
			include "db_baglan.php";
				
								$admin_ID=$sorgu['admin_ID'];
								$admin_username=$sorgu['admin_username'];
								$adminpass=$sorgu['adminpass'];
								$admintype=$sorgu['admintype'];					

$sorgu=mysql_query("update admin set admin_ID='$admin_ID', admin_username='$admin_username', adminpass='$adminpass' , admintype='$admintype' where admin_ID='$admin_ID'");
	
	if(((strlen($adminpass) < 6) )){
		echo " sifre kisa"; 
		echo "Kayıt Başarısız";
	}else{
			if($sorgu){
					echo "Kayıt Başarılı";

			}
	}
?>
<a href ="adminpage.php"><h4>Return Admin Page</h4></a>