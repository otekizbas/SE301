<?php
			include "db_baglan.php";
		
			$username = $_POST['username'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$email = $_POST['email'];

			if(!empty($username) and !empty($firstname) and !empty($lastname) and !empty($email)){
				$sorgu = mysql_query("insert into forgatpassword(username,firstname, lastname, email) VALUES ('$username','$firstname','$lastname','$email')");
						
						if ($sorgu){
							echo "Kayıt Başarılı";
							echo'<p>Bilgileriniz bize ulaştırıldı, en kısa zamanda şifrenizi size göndereceğiz.</p>';
						}
						else{
							echo "Kayıt Esnasında Bir Sorun Oluştu!";
						}
			}
			else{
				echo "Gerekli alanları lütfen boş bırakmayın!";
			}
?>
<a href="forgatpassword.php"><h3>Şifremi Unuttum</h3></a>