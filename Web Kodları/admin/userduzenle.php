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
							
				$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
				$db_sunucu  = "Localhost";       #Sunucu Adı
				$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
				$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre
				$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
				if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
				mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
				
				$duzenle=$_GET["deger"];
				$sql = mysql_query("SELECT *  FROM  `user` where user_id=$duzenle")

					?>

			<form method="post" name ="form" action="userguncelle.php">			

				<div id= "icerik">
				<h1 style="margin-left=50px">Dashboard</h1>
				
				<div id="productust">
						<div id ="productustsol">
							<h5>Home / Add Admin</h5>
						</div>
						<div id ="productustsag">
						<input type="submit" value=""; id ="save" />
							<a href="userpage.php"><img src="img/cancel.png"/></a>
						</div>
				</div>

						
					<?php
						while($sorgu=mysql_fetch_array($sql)){			
								$user_id=$sorgu['user_id'];
								$username=$sorgu['username'];
								$userpassword=$sorgu['userpassword'];
								$firstname=$sorgu['firstname'];
								$lastname=$sorgu['lastname'];
								$adres=$sorgu['adres'];
								$telephone=$sorgu['telephone'];
								$email=$sorgu['email'];					
								
					
				echo '<div id="addproduct">';
					echo '<div id="addproduct1">';
						echo '<h5>User ID</h5>';
						echo '<input type="text" name="user_id" value="'.$user_id.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="username" value="'.$username.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="userpassword" value="'.$userpassword.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="firstname" value="'.$firstname.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="lastname" value="'.$lastname.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="adres" value="'.$adres.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="telephone" value="'.$telephone.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';
					echo '<div id="addproduct1">';
						echo '<h5>Admin ID</h5>';
						echo '<input type="text" name="email" value="'.$email.'" placeholder="Admin ID" id="input-name1" class="form-control">';
					echo '</div>';





					
				echo '</div>';

						}
								




			
				echo'</div>';
				?>	
			</form>
		</div>
</body>
</html>