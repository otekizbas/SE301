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
				<div id = "dashboard">
						<hr/>
						<div id = "usticerik">
							<div id="satistoplami">
								<div id ="image">
									<img src ="img/sales.png"/>
								</div>
								<div id = "altyaziimage">
								<h3>200</h3>
								<div id = "altyaziimagegreen"; style=" background-color : #5cb85c;margin-top:0px; width:270px; height : 45px;padding-top:1px; color:white" >
									<h3>Total Sales</h3>
								</div>								
								</div>
							</div>
							<div id = "toplamkullanici">
								<div id ="image">
									<img src ="img/totalvisitor.png"/>

								</div>
								<div id= "altyaziimage">
								<h3>200</h3>
									<div id= "altyaziimageblue"; style=" background-color : #4cb1cf;margin-top:0px; width:270px; height : 45px;padding-top:1px;color:white" >
										<h3>Total User</h3>
									</div>
								</div>
							</div>
							<div id = "toplamkullanici">
								<div id ="image">
									<img src ="img/totalproduct.png"/>

								</div>
								<div id= "altyaziimage">
								<h3>200</h3>
									<div id= "altyaziimageblue"; style=" background-color : #4cb1cf;margin-top:0px; width:270px; height : 45px;padding-top:1px;color:white" >
										<h3>Total Product</h3>
									</div>
								</div>
							</div>
							<div id ="siteyegiris">
								<div id ="image">
									<img src ="img/entersite.png"/>
								</div>
								<div id = "altyaziimageyellow"; style=" background-color : #f0ad4e;margin-top:47px; width:270px; height : 51px;padding-top:1px;color:white" >
									<h3>Enter Website</h3>
								</div>
							</div>
						</div>
				</div>
				
				 								<?php
			include "db_baglan.php";
$sorgu = mysql_query("` SELECT * 
FROM  `order`")


?>
						
						<div id = "ordertable">
	<table style="width:100%">
  <tr>
  <td style="font-weight:bold">Order ID</td>
  <td style="font-weight:bold">First Name</td>
  <td style="font-weight:bold">Last Name</td>
  <td style="font-weight:bold">Product ID</td>
  <td style="font-weight:bold">Product Name</td>  
  <td style="font-weight:bold">Quantity</td>
  <td style="font-weight:bold">Product Price</td>
  <td style="font-weight:bold">Order Status</td>
  <td style="font-weight:bold">Product Status / Action</td>
  </tr>
 <?php
		 if($sorgu){
						 while($duyuru = mysql_fetch_array($sorgu)){
								echo '<tr>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['orderid'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['firstname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['lastname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['product_id'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['product_name'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['adet'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['product_price'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['orderstatus'].'</td>';
								 echo "<td><a href=orderduzenle.php?deger=".$duyuru["orderid"].">DÜZENLE</a> - <a href=ordersil.php?deger=".$duyuru["orderid"].">SİL</a></td>";
								 
								 echo '</tr>';
					}
		}

?>
</table>
						  </div>
				</div>
		</div>
</body>
</html>