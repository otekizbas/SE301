<?php
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
								$product_id=$sorgu['product_id'];
								$product_name=$sorgu['product_name'];
								$product_category_name=$sorgu['product_category_name'];
								$product_price=$sorgu['product_price'];					
								$product_gender=$sorgu['product_gender'];
								$product_description=$sorgu['product_description'];
								$product_image=$sorgu['product_image'];					
								$numberofproduct=$sorgu['numberofproduct'];					

								$sorgu=mysql_query("update product set product_id='$product_id', product_name='$product_name', product_category_name='$product_category_name' , product_price='$product_price', product_gender='$product_gender', product_description='$product_description', product_image='$product_image' , numberofproduct='$numberofproduct' where product_id='$product_id'");
			if($sorgu)
				{
					 echo "Kaydınız başarıyla düzenlenmiştir";
					 header("Refresh:2;url=order.php");
				}
				else 
	  			{
					 echo "Bir sorun çıktı";
					 header("Refresh:2;url=order.php");
				}
?>
<a href ="order.php"><h4>Return Order Page</h4></a>