<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ONLINE CLOTHING || ADMIN PANEL</title>
<link href="css/style2.css" type="text/css" rel="stylesheet" />

</head>
<body>
		<div id="genel">
						<div id = "logo">
					<img src="img/logo.png" style="width:100px; height:50px"/>
					
										<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
}
else {
    echo "<center>Admin sayfasina hosgeldiniz..! ";
    echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?>
				</div>
			<div id  = "sag">


					<div id= "menu">
					<?php
if($_SESSION['admintype'] == 'admin')
{
	include 'menuadmin.php';
}else{
  if($_SESSION['admintype'] == 'Product Manager')
	  	include 'menu.php';
}
?>
					</div>
			</div>
			
			
				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
			<form method="post" name ="form" action="urunekle.php">			

				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Product</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<a href ="product.php"><img src="img/cancel.png"/></a>
						</div>
				</div>
						
				<div id="addproduct">
					<div id="addproduct1">
						<h5>Product Name</h5>
						<input type="text" name="productname" value="" placeholder="Product Name" id="input-name1" class="form-control">
					</div>
					<h5>Product Description</h5>
					<textarea rows="4" cols="500" name="productname" id="input-name2" placeholder="Product Name"; style="height:300px; margin-top:5px">

					</textarea>
					
				</div>
						
					<div id="addproduct2">
						<h5>Product Category</h5>
												<?php
															
														$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
														$db_sunucu  = "Localhost";       #Sunucu Adı
														$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
														$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
														$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
														if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
														mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
														
														$duzenle=$_GET["deger"];
														$sql = mysql_query("SELECT category_name FROM  `category`")
												?>
												<? 
												echo' 
												<select name="product_category_name">'; 
														while($Veriler = mysql_fetch_array($sql)){ 
															echo'<option value="'.$Veriler['category_name'].'">'.$Veriler['category_name'].'</option>'; 
														} 
													echo' 
												</select>'; 
												?> 
						<h5>Product Price</h5>
						<input type="text" name="productprice" value="" placeholder="Product Price" id="input-price" class="form-control">		
					
						<h5>Product Gender</h5>
						<input type="text" name="productgender" value="" placeholder="Product Gender" id="input-gender" class="form-control">
					
						<h5>Number Of Product</h5>
						<input type="text" name="numberofproduct" value="" placeholder="Number Of Product" id="input-numberofproduct" class="form-control">

					</div>		


					
					<div id="addproduct3">
<?php

	if(isset($_FILES['image'])){
		$errors= array();
		$file_name = $_FILES['image']['name'];
		$file_size =$_FILES['image']['size'];
		$file_tmp =$_FILES['image']['tmp_name'];
		$file_type=$_FILES['image']['type'];   
		$file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
		
		$expensions= array("jpeg","jpg","png"); 		
		if(in_array($file_ext,$expensions)=== false){
			$errors[]="extension not allowed, please choose a JPEG or PNG file.";
		}
		if($file_size > 2097152){
		$errors[]='File size must be excately 2 MB';
		}				
		if(empty($errors)==true){
			move_uploaded_file($file_tmp,"images/".$file_name);
			
			echo "Success";
		}else{
			print_r($errors);
		}
	}
?>

<form action="" method="POST" enctype="multipart/form-data">
<input type="file" name="product_image" />

<input type="submit"/>
</form>
					</div>	
</form>					
				</div>
		</div>
</body>
</html>