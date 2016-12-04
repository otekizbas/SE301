			
						<?php
			$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
			$db_sunucu  = "Localhost";       #Sunucu Adı
			$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
			$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
			$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
			if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
			mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
			
			$category_name = $_POST['category_name'];
			$category_URL = $_POST['category_URL'];
			$category_description = $_POST['category_description'];

			$sorgu = mysql_query("insert into category(category_name, category_URL, category_description) VALUES ('$category_name','$category_URL','$category_description')");
			
	if ($sorgu){
	    echo "Kayıt Başarılı";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu!";
    }
?>

<p>Kategori ekleme işlemi başarıyla gerçekleştirildi.</p>
<a href="addcategory.php"><h3>Kategori Ekle</h3></a>