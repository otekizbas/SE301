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
				
											<?php
			include "db_baglan.php";
				
				$duzenle=$_GET["deger"];
				$sql = mysql_query("SELECT *  FROM  `product` where product_id=$duzenle")
				

					?>
				
<form method="post" name ="form" action="urunguncelle.php">						

				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Product</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<img src="img/cancel.png"/>
						</div>
				</div>
					
					
			<?php
						while($sorgu=mysql_fetch_array($sql)){			
								$product_id=$sorgu['product_id'];
								$product_name=$sorgu['product_name'];
								$product_description=$sorgu['product_description'];
								$category_name=$sorgu['category_name'];					
								$product_price=$sorgu['product_price'];
								$product_gender=$sorgu['product_gender'];
								$numberofproduct=$sorgu['numberofproduct'];	
								
				echo '<div id="addproduct">';
				
					echo '<div id="addproduct1">';
						echo '<h5>Product ID</h5>';
						echo '<input type="text" name="product_id" value="'.$product_id.'"  placeholder="Product ID" id="input-name1" class="form-control">';

						echo '<h5>Product Name</h5>';
						echo '<input type="text" name="product_name" value="'.$product_name.'"  placeholder="Product Name" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<h5>Product Description</h5>';
					echo '<textarea rows="4" cols="500" name="product_description" value="'.$product_description.'"  id="input-name2" placeholder="Product Description"; style="height:300px; margin-top:5px">';

					echo '</textarea>';
					
				echo '</div>';
						
					echo '<div id="addproduct2">';
						echo '<h5>Product Category</h5>';
												
						echo '<h5>Product Price</h5>';
						echo '<input type="text" name="product_price" value="'.$product_price.'"  placeholder="Product Price" id="input-price" class="form-control">';		
					
						echo '<h5>Product Gender</h5>';
						echo '<input type="text" name="product_gender" value="'.$product_gender.'"  placeholder="Product Gender" id="input-gender" class="form-control">';
					
						echo '<h5>Number Of Product</h5>';
						echo '<input type="text" name="numberofproduct" value="'.$numberofproduct.'"  placeholder="Product Gender" id="input-gender" class="form-control">';							
						echo '<h5>Category Name</h5>';
						echo '<input type="text" name="category_name" value="'.$category_name.'"  placeholder="Category Name" id="input-gender" class="form-control">';							
					echo '</div>';		


					
	
					
		?>			
</form>					
				</div>
		</div>
</body>
</html>