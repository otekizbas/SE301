			
						<?php
			$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
			$db_sunucu  = "Localhost";       #Sunucu Adı
			$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
			$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
			$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
			if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
			mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
			
			$username = $_POST['username'];
			$userpassword = $_POST['userpassword'];
			$firstname = $_POST['firstname'];
			$lastname = $_POST['lastname'];
			$adres = $_POST['adres'];
			$telephone = $_POST['telephone'];
			$email = $_POST['email'];
			
			$sorgu = mysql_query("insert into user(username, userpassword, firstname, lastname, adres, telephone, email) VALUES ('$username','$userpassword','$firstname','$lastname','$adres','$telephone','$email')");
			
						    if ($sorgu){
	    echo "Kayıt Başarılı";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu!";
    }
?>

<p>Kullanıcı kaydınız başarıyla gerçekleştirildi.</p>
<a href="addUser.php"><h3>Kullanucı Ekle</h3></a>