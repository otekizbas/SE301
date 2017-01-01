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
				$sql = mysql_query("SELECT *  FROM  `admin` where admin_ID=$duzenle")

					?>

			<form method="post" name ="form" action="adminguncelle.php">			

				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Admin</h5>
						</div>
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<img src="img/cancel.png"/>
						</div>
				</div>

						
					<?php
						while($sorgu=mysql_fetch_array($sql)){			
								$admin_ID=$sorgu['admin_ID'];
								$admin_username=$sorgu['admin_username'];
								$adminpass=$sorgu['adminpass'];
								$admintype=$sorgu['admintype'];					
					
				echo '<div id="addproduct">';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="admin_ID" value="'.$admin_ID.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin User Name</h5>';
						echo '<input type="text" name="admin_username" value="'.$admin_username.'" placeholder="Admin User Name" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<h5>Admin Password</h5>';
					echo '<input type="text" name="adminpass" value="'.$adminpass.'" placeholder="Admin Password" id="input-name2" class="form-control">';
					
				echo '</div>';
						
					echo '<div id="addproduct2">';
						echo '<h5>Admin Type</h5>';
							echo '<select name="admintype">';
								  echo '<option value="'.$admintype.'">Admin</option>';
								  echo '<option value="'.$admintype.'">Product Manager</option>';
							echo '</select>';							
					echo '</div>';
						}
								




			
				echo'</div>';
				?>	
			</form>
		</div>
</body>
</html>