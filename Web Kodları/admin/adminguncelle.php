<?php
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
								$admin_ID=$sorgu['admin_ID'];
								$admin_username=$sorgu['admin_username'];
								$adminpass=$sorgu['adminpass'];
								$admintype=$sorgu['admintype'];					

$sorgu=mysql_query("update admin set admin_ID='$admin_ID', admin_username='$admin_username', adminpass='$adminpass' , admintype='$admintype' where admin_ID='$admin_ID'");
			if($sorgu)
				{
					 echo "Kaydınız başarıyla düzenlenmiştir";
					 header("Refresh:2;url=adminpage.php");
				}
				else 
	  			{
					 echo "Bir sorun çıktı";
					 header("Refresh:2;url=adminpage.php");
				}
?>
<a href ="adminpage.php"><h4>Return Admin Page</h4></a>