			
						<?php
			include "db_baglan.php";
			
			$ad = $_POST['ad'];
			$emailadres = $_POST['emailadres'];
			$mesaj = $_POST['mesaj'];		

			if(!empty($ad) and !empty($emailadres) and !empty($mesaj)){
				
			$sorgu = mysql_query("insert into contact(ad, emailadres, mesaj) VALUES ('$ad','$emailadres','$mesaj')");
			
						    if ($sorgu){
								echo "Kayıt Başarılı";
								echo'<p>İletişim kaydınız bize iletildi.</p>';
							}
							
							else{
								echo "Kayıt Esnasında Bir Sorun Oluştu!";
							}				
				
				
			}
			else{
				echo "Gerekli alanları lütfen boş bırakmayın!";
			}
?>
<a href="contactus.php"><h3>İletişime geç</h3></a>