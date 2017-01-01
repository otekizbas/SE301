<?php
			include "db_baglan.php";
				
								$category_id=$_POST['category_id'];
								$category_name=$_POST['category_name'];
								$category_description=$_POST['category_description'];
								$category_gender=$_POST['category_gender'];

$sorgu=mysql_query("update category set category_id='$category_id', category_name='$category_name', category_description='$category_description' , category_gender='$category_gender' where category_id='$category_id'");
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