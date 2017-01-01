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
			
							<?php
			include "db_baglan.php";
				
				$duzenle=$_GET["deger"];
				$sql = mysql_query("SELECT *  FROM  `order` where orderid=$duzenle")
				

					?>
			
			<form method="post" name ="form" action="orderguncelle.php">			
			
				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Category</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<img src="img/cancel.png"/>
						</div>
				</div>
				
			<?php
						while($sorgu=mysql_fetch_array($sql)){			
								$orderid=$sorgu['orderid'];
								$firstname=$sorgu['firstname'];
								$lastname=$sorgu['lastname'];
								$product_id=$sorgu['product_id'];					
								$product_name=$sorgu['product_name'];
								$adet=$sorgu['adet'];
								$product_price=$sorgu['product_price'];
								$orderstatus=$sorgu['orderstatus'];					
								$order_adres=$sorgu['order_adres'];	

				echo '<div id="addproduct">';
					echo '<div id="addproduct1">';
						echo '<h5>Order ID</h5>';
						echo '<input type="text" name="orderid" value="'.$orderid.'" placeholder="Order ID" id="input-name1" class="form-control">';
					echo '</div>';
					
					echo '<div id="addproduct1">';
						echo '<h5>First Name</h5>';
						echo '<input type="text" name="firstname" value="'.$firstname.'" placeholder="First Name" id="input-name1" class="form-control">';
					echo '</div>';
					
					echo '<div id="addproduct1">';
						echo '<h5>Last Name</h5>';
						echo '<input type="text" name="lastname" value="'.$lastname.'" placeholder="Last Name" id="input-name1" class="form-control">';
					echo '</div>';	

					echo '<div id="addproduct1">';
						echo '<h5>Product ID</h5>';
						echo '<input type="text" name="product_id" value="'.$product_id.'" placeholder="Product ID" id="input-name1" class="form-control">';
					echo '</div>';

					echo '<div id="addproduct1">';
						echo '<h5>Product Name</h5>';
						echo '<input type="text" name="product_name" value="'.$product_name.'" placeholder="Product Name" id="input-name1" class="form-control">';
					echo '</div>';

					echo '<div id="addproduct1">';
						echo '<h5>Product Name</h5>';
						echo '<input type="text" name="adet" value="'.$adet.'" placeholder="Product Name" id="input-name1" class="form-control">';
					echo '</div>';
					
					echo '<div id="addproduct1">';
						echo '<h5>Product Name</h5>';
						echo '<input type="text" name="order_adres" value="'.$order_adres.'" placeholder="Order Adress" id="input-name1" class="form-control">';
					echo '</div>';					
					
					
					echo '<div id="addproduct1">';
						echo '<h5>Product Price</h5>';
						echo '<input type="text" name="product_price" value="'.$product_price.'" placeholder="Product Price" id="input-name1" class="form-control">';
					echo '</div>';								
					
					
				echo '</div>';
						
					echo '<div id="addproduct2">';
						echo '<h5>Order Status</h5>';
							echo '<select name="orderstatus">';
								  echo '<option value="'.$orderstatus.'">Processing</option>';
								  echo '<option value="'.$orderstatus.'">Shipped</option>';
								  echo '<option value="'.$orderstatus.'">Canceled</option>';
								  echo '<option value="'.$orderstatus.'">Complete</option>';								  
								  echo '<option value="'.$orderstatus.'">Denied</option>';
								  echo '<option value="'.$orderstatus.'">Canceled Reversal</option>';
								  echo '<option value="'.$orderstatus.'">Failed</option>';
								  echo '<option value="'.$orderstatus.'">Refunded</option>';
								  echo '<option value="'.$orderstatus.'">Reversed</option>';
								  echo '<option value="'.$orderstatus.'">Chargeback</option>';
								  echo '<option value="'.$orderstatus.'">Pending</option>';
								  echo '<option value="'.$orderstatus.'">Voided</option>';
								  echo '<option value="'.$orderstatus.'">Processed</option>';
								  echo '<option value="'.$orderstatus.'">Expired</option>';
							echo '</select>';							
					echo '</div>';	
					}
			?>	
			</form>
				</div>
		</div>
</body>
</html>