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
							<h5>Home / Categories</h5>
						</div>
						
						<div id ="productustsag">
							<a href = "addcategory.php"><img src="img/add.png"/></a>
						</div>
				</div>

						
			<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * 
FROM  `category`")
			?>
						
						<div id = "ordertable">
						<h4>Category Table</h4>
								<table style="width:100%"; style ="border:1px">
							  <tr>
							  <td style="font-weight:bold">Category ID</td>
							  <td style="font-weight:bold">Category Name</td>
							  <td style="font-weight:bold">Category Gender</td>
							  <td style="font-weight:bold">Product Status / Action</td>
							  </tr>
									 <?php
											 if($sorgu){
															 while($duyuru = mysql_fetch_array($sorgu)){
																	echo '<tr>';
																	 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['category_id'].'</td>';
																	 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['category_name'].'</td>';
																	 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['category_gender'].'</td>';
																	 echo "<td><a href=categoryduzenle.php?deger=".$duyuru["category_id"].">DÜZENLE</a> - <a href=kategorisil.php?deger=".$duyuru["category_id"].">SİL</a></td>";
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