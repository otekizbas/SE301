<?php
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
								$orderid=$sorgu['orderid'];
								$firstname=$sorgu['firstname'];
								$lastname=$sorgu['lastname'];
								$productid=$sorgu['productid'];					
								$productname=$sorgu['productname'];
								$productprice=$sorgu['productprice'];
								$orderstatus=$sorgu['orderstatus'];					

								$sorgu=mysql_query("update order set orderid='$orderid', firstname='$firstname', lastname='$lastname' , productid='$productid', productname='$productname', productprice='$productprice', orderstatus='$orderstatus' where orderid='$orderid'");
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