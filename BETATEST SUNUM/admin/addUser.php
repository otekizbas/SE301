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


			<form method="post" name ="form" action="userekle.php">			

				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add User</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<a href ="userpage.php"><img src="img/cancel.png"/></a>
						</div>
				</div>

				
				<div id="addproduct">
					<div id="addproduct1">
						<h5>User Name</h5>
						<input type="text" name="username" value="" placeholder="User Name" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>Password</h5>
						<input type="text" name="userpassword" value="" placeholder="Password" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>First Name</h5>
						<input type="text" name="firstname" value="" placeholder="First Name" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>Last Name</h5>
						<input type="text" name="lastname" value="" placeholder="Last Name" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>Address</h5>
						<input type="text" name="adres" value="" placeholder="Address" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>Telephone</h5>
						<input type="text" name="telephone" value="" placeholder="Telephone" id="input-name1" class="form-control">
					</div>
					
					<div id="addproduct1">
						<h5>Email Address</h5>
						<input type="text" name="email" value="" placeholder="Email Address" id="input-name1" class="form-control">
					</div>
					
				</div>
							
							
				</div>
				</form>
		</div>
</body>
</html>