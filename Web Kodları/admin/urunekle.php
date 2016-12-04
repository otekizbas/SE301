						<?php
			$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
			$db_sunucu  = "Localhost";       #Sunucu Adı
			$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
			$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
			$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
			if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
			mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
			
			$product_name = $_POST['product_name'];
			$product_description= $_POST['product_description'];
			$product_category_name = $_POST['product_category_name'];
			$product_price	 = $_POST['product_price	'];
			$product_gender= $_POST['product_gender'];
			$product_image = $_POST['product_image'];
			$numberofproduct = $_POST['numberofproduct'];
			
			$sorgu = mysql_query("insert into product(product_name, product_description, product_category_name,product_price, product_gender, product_image,numberofproduct) VALUES ('$product_name','$product_description','$product_category_name', '$product_price','$product_gender','$product_image','$numberofproduct')");
			
	if ($sorgu){
	    echo "Kayıt Başarılı";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu!";
    }
?>

<p>Ürün ekleme işlemi başarıyla gerçekleştirildi.</p>
<a href="addproduct.php"><h3>Ürün Ekle</h3></a>