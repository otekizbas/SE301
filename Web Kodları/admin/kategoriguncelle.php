<?php
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
								$category_id=$_POST['category_id'];
								$category_name=$_POST['category_name'];
								$category_description=$_POST['category_description'];
								$category_URL=$_POST['category_URL'];

$sorgu=mysql_query("update category set category_id='$category_id', category_name='$category_name', category_description='$category_description' , category_URL='$category_URL' where category_id='$category_id'");
			if($sorgu)
				{
					 echo "Kaydınız başarıyla düzenlenmiştir";
					 header("Refresh:2;url=listele.php");
				}
				else 
	  			{
					 echo "Bir sorun çıktı";
					 header("Refresh:2;url=listele.php");
				}
?>
<a href ="categories.php"><h4>Return Category Page</h4></a>