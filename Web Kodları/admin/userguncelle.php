<?php
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
								$user_id=$sorgu['user_id'];
								$username=$sorgu['username'];
								$userpassword=$sorgu['userpassword'];
								$firstname=$sorgu['firstname'];		
								$lastname=$sorgu['lastname'];
								$adres=$sorgu['adres'];
								$telephone=$sorgu['telephone'];
								$email=$sorgu['email'];									

$sorgu=mysql_query("update user set user_id='$user_id', username='$username', userpassword='$userpassword' , firstname='$firstname',     lastname='$lastname', adres='$adres', telephone='$telephone' , email='$email' where user_id='$user_id'");
			if($sorgu)
				{
					 echo "Kaydınız başarıyla düzenlenmiştir";
					 header("Refresh:2;url=userpage.php");
				}
				else 
	  			{
					 echo "Bir sorun çıktı";
					 header("Refresh:2;url=userpage.php");
				}
?>
<a href ="userpage.php"><h4>Return User Page</h4></a>