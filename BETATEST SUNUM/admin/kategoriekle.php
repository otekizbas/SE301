			
						<?php
			include "db_baglan.php";
			
			$category_name = $_POST['category_name'];
			$category_description = $_POST['category_description'];
			$category_image_URL = $_POST['category_image_URL'];
			$category_gender = $_POST['category_gender'];
			
			$sorgu = mysql_query("insert into category(category_name, category_description,category_image_URL, category_gender) VALUES ('$category_name','$category_description','$category_image_URL' ,'$category_gender')");
			
	if ($sorgu){
	    echo "Kayıt Başarılı";
    }
    else{
	    echo "Kayıt Esnasında Bir Sorun Oluştu!";
    }
?>

<p>Kategori ekleme işlemi başarıyla gerçekleştirildi.</p>
<a href="addcategory.php"><h3>Kategori Ekle</h3></a>