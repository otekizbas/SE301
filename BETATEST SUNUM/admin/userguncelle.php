<?php
			include "db_baglan.php";
				
								$user_id=$sorgu['user_id'];
								$username=$sorgu['username'];
								$userpassword=$sorgu['userpassword'];
								$firstname=$sorgu['firstname'];		
								$lastname=$sorgu['lastname'];
								$adres=$sorgu['adres'];
								$telephone=$sorgu['telephone'];
								$email=$sorgu['email'];									

$sorgu=mysql_query("update user set user_id='$user_id', username='$username', userpassword='$userpassword' , firstname='$firstname', lastname='$lastname', adres='$adres', telephone='$telephone' , email='$email' where user_id='$user_id'");
	
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
<a href ="userpage.php"><h4>Return User Page</h4></a>