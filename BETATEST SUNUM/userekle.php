			
						<?php
			include "db_baglan.php";	
			
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];
			$telephone = $_POST['telephone'];
			$adres = $_POST['adres'];
			$username = $_POST['username'];
			$userpassword = $_POST['userpassword'];
						
			$sorgu = mysql_query("insert into user(firstname, lastname, email,telephone, adres,username, userpassword) VALUES ('$firstname','$lastname','$email','$telephone','$adres','$username','$userpassword')");
			
		
			
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

<a href="register.php"><h3>Müşteri Ekle</h3></a>