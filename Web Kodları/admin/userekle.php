			
						<?php
			include "db_baglan.php";
			
			$username = $_POST['username'];
			$userpassword = $_POST['userpassword'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$adres = $_POST['adres'];
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];
			
			$sorgu = mysql_query("insert into user(username, userpassword, firstname, lastname, adres, telephone, email) VALUES ('$username','$userpassword','$firstname','$lastname','$adres','$telephone','$email')");
			
	if(!(is_numeric($telephone)) or ((strlen($userpassword) < 6) and (ctype_alnum($userpassword) ) )){
		echo "Sayı değildir veya sifre kisa"; 
		echo "Kayıt Başarısız";
	}else{
			if($sorgu){
					echo "Sayıdır"; 
					echo "Kayıt Başarılı";

			}
	}
?>

<p>Kullanıcı kaydınız başarıyla gerçekleştirildi.</p>
<a href="addUser.php"><h3>Kullanucı Ekle</h3></a>