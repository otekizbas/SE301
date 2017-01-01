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


			<form method="post" name ="form" action="adminekle.php">			

				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Admin</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<a href ="adminpage.php"><img src="img/cancel.png"/></a>
						</div>
				</div>

				
				<div id="addproduct">
					<div id="addproduct1">
						<h5>Admin User Name</h5>
						<input type="text" name="admin_username" value="" placeholder="Admin User Name" id="input-name1" class="form-control">
					</div>
					<h5>Admin Password</h5>
					<input type="text" name="adminpass" value="" placeholder="Admin Password" id="input-name2" class="form-control">
					
				</div>
						
					<div id="addproduct2">
						<h5>Admin Type</h5>
							<select name="admintype">
								  <option value="Admin">Admin</option>
								  <option value="Product Manager">Product Manager</option>
							</select>							
					</div>		
							
				</div>
				</form>
		</div>
</body>
</html>