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
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Products</h5>
						</div>
						
						<div id ="productustsag">
						<a href="addproduct.php"><img src="img/add.png"/></a>
						</div>
				</div>
					<form method= "post" name = "form" action = "searchproduct.php">	
						<div id="search">
							<h4 style="padding-top:10px;margin-left: 10px;">Seach</h4>
							
											

										<div id="s1">
											<h5>
												Product Name
											</h5>
											<input type="text" name="product_name" value="" placeholder="Product Name" id="input-name" class="form-control" autocomplete="off">
										</div>
										<div id="s2">
											<h5>
												Price
											</h5>
											<input type="text" name="product_price" value="" placeholder="Price" id="input-price" class="form-control">
										</div>
										<div id="s3">
											<h5>
												Gender
											</h5>
											<input type="text" name="product_gender" value="" placeholder="Gender" id="input-gender" class="form-control">		
											<button type="button" id="searh_button"></button>									
										</div>
								
							</div>
						</form>
			<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * 
FROM  `product`")
			?>
						
						<div id = "ordertable">
						<h4>Product Table</h4>
							<table style="width:100%;border= 1">
								  <thead>
									  <tr>
										  <td style="font-weight:bold">Product ID</td>
										  <td style="font-weight:bold">Category Name</td>										  
										  <td style="font-weight:bold">Product Image</td>
										  <td style="font-weight:bold">Product Name</td>
										  <td style="font-weight:bold">Product Gender</td>
										  <td style="font-weight:bold">Product Price</td>
										   <td style="font-weight:bold">Number of Product</td>
										  <td style="font-weight:bold">Action</td>
									  </tr>
								  </thead>	
<thead>								  
								  <?php
											 if($sorgu){
															 while($duyuru = mysql_fetch_array($sorgu)){

											echo '<tr>';
										   echo '<td style="font-weight:bold">'.$duyuru['product_id'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['category_name'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_image'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_name'].'</td>';
										 echo '<td style="font-weight:bold">'.$duyuru['product_gender'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['product_price'].'</td>';
										  echo '<td style="font-weight:bold">'.$duyuru['numberofproduct'].'</td>';
										echo "<td><a href=productduzenle.php?deger=".$duyuru["product_id"].">DÜZENLE</a> - <a href=urunsil.php?deger=".$duyuru["product_id"].">SİL</a></td>";

									  echo '</tr>';

										}
								  }
								  ?>
								  </thead>	
							</table>
						  </div>
				</div>
		</div>
</body>
</html>