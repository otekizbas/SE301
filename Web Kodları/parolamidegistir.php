<?php
	include "db_baglan.php";

	$username = $_POST['username'];
	$email = $_POST['email'];	
	$userpassword = $_POST['userpassword'];

	
	$sorgu=mysql_query("update user set userpassword = '$userpassword' where username = '$username' AND email = '$email'");

			if(!(empty($userpassword)) and  $username =='username' and $email =='email' and (strlen($userpassword) > 6)){
					echo "Kayıt Başarılı";

			}else{
				echo "Kayıt başarılı";
			}

?>
