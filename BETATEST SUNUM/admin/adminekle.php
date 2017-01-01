			
						<?php
			include "db_baglan.php";
			
			$admin_username = $_POST['admin_username'];
			$adminpass = $_POST['adminpass'];
			$admintype = $_POST['admintype'];

			$sorgu = mysql_query("insert into admin(admin_username, adminpass, admintype) VALUES ('$admin_username','$adminpass','$admintype')");
			
	if(((strlen($adminpass) < 6) )){
		echo " sifre kisa"; 
		echo "Kayıt Başarısız";
	}else{
			if($sorgu){
					echo "Kayıt Başarılı";

			}
	}
?>

<p>Yönetici kaydınız başarıyla gerçekleştirildi.</p>
<a href="addAdmin.php"><h3>Yönetici Ekle</h3></a>