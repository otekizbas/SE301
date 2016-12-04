			
						<?php
			$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
			$db_sunucu  = "Localhost";       #Sunucu Adı
			$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
			$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
			$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
			if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
			mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
			
			$admin_username = $_POST['admin_username'];
			$adminpass = $_POST['adminpass'];
			$admintype = $_POST['admintype'];

			$sorgu = mysql_query("insert into admin(admin_username, adminpass, admintype) VALUES ('$admin_username','$adminpass','$admintype')");
			
						    if ($sorgu){
	    echo "Kayıt Başarılı";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu!";
    }
?>

<p>Yönetici kaydınız başarıyla gerçekleştirildi.</p>
<a href="addAdmin.php"><h3>Yönetici Ekle</h3></a>