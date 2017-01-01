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
							<h5>Home / Manager</h5>
						</div>
						
						<div id ="productustsag">
						<a href="addAdmin.php">	<img src="img/add.png"/></a>
						</div>
				</div>

			<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * FROM  `admin`")
			?>
						<div id = "ordertable">
						<h4>Manager Table</h4>
	<table style="width:100%"; style ="border:1px">
  <tr>
  <td style="font-weight:bold">Admin ID</td>
  <td style="font-weight:bold">Admin User Name</td>
  <td style="font-weight:bold">Admin Password</td>
  <td style="font-weight:bold">Admin Type</td>
  <td style="font-weight:bold">Product Status / Action</td>
  </tr>
 <?php
		 if($sorgu){
						 while($duyuru = mysql_fetch_array($sorgu)){
								echo '<tr>';
								echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['admin_ID'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['admin_username'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['adminpass'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['admintype'].'</td>';
								echo "<td><a href=adminduzenle.php?deger=".$duyuru["admin_ID"].">DÜZENLE</a> - <a href=adminsil.php?deger=".$duyuru["admin_ID"].">SİL</a></td>";

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