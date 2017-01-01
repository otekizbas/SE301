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
				$sql = mysql_query("SELECT *  FROM  `category` where category_id=$duzenle")
				

					?>
			
			<form method="post" name ="form" action="kategoriguncelle.php">			
			
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
								$category_id=$sorgu['category_id'];
								$category_name=$sorgu['category_name'];
								$category_description=$sorgu['category_description'];
								$category_gender=$sorgu['category_gender'];

				echo '<div id="addproduct">';
					echo '<div id="addproduct1">';
						echo '<h5>Category ID</h5>';
						echo '<input type="text" name="category_id" value="'.$category_id.'" placeholder="Category ID" id="input-name1" class="form-control">';
					echo '</div>';
					
					echo '<div id="addproduct1">';
						echo '<h5>Category Name</h5>';
						echo '<input type="text" name="category_name" value="'.$category_name.'" placeholder="Category Name" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<h5>Category Description</h5>';
					echo '<textarea rows="4" cols="500" name="category_description" id="input-name2" value="'.$category_description.'"  placeholder="Category Description"; style="height:300px; margin-top:5px">';

					echo '</textarea>';
					
				echo '</div>';
						
					echo '<div id="addproduct2">';
						
						
						echo '<h5>Category Gender</h5>';
																echo'<select name="category_gender">
															<option value="man">man</option>
															<option value="woman">woman</option>
															<option value="kid">kid</option>
												</select>'; 			
					echo '</div>';	
										
					
					}
			?>	
			</form>
				</div>
		</div>
</body>
</html>