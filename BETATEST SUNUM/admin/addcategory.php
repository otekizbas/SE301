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
			
			<form method="post" name ="form" action="kategoriekle.php">			
			
				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Category</h5>
						</div>
						
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<a href = "categories.php"><img src="img/cancel.png"/></a>
						</div>
				</div>
						
				<div id="addproduct">
					<div id="addproduct1">
						<h5>Category Name</h5>
						<input type="text" name="category_name" value="" placeholder="Category Name" id="input-name1" class="form-control">
					</div>
					<h5>Category Description</h5>
					<textarea rows="4" cols="500" name="category_description" id="input-name2" placeholder="Category Description"; style="height:300px; margin-top:5px">

					</textarea>
					
				</div>
						
					<div id="addproduct2">
						
						<h5>Category Gender</h5>
												<select name="category_gender">
															<option value="man">man</option>
															<option value="woman">woman</option>
															<option value="kid">kid</option>
												</select> 
					<div id="addproduct3">
						<iframe src="uploadresim.php"></iframe>
					</div>
							
					</div>		
				</form>
				</div>
		</div>
</body>
</html>