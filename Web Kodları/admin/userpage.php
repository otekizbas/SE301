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
							<h5>Home / User</h5>
						</div>
						
						<div id ="productustsag">
						<a href="addUser.php">	<img src="img/add.png"/></a>
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
			$sorgu = mysql_query("SELECT * FROM  `user`")
			?>
						<div id = "ordertable">
						<h4>User Table</h4>
	<table style="width:100%"; style ="border:1px">
  <tr>
  <td style="font-weight:bold">User ID</td>
  <td style="font-weight:bold">User Name</td>
  <td style="font-weight:bold">User Password</td>
  <td style="font-weight:bold">First Name</td>
  <td style="font-weight:bold">Last Name</td>
  <td style="font-weight:bold">Address</td>
  <td style="font-weight:bold">Telephone</td>
  <td style="font-weight:bold">Email Address</td>
  <td style="font-weight:bold">Product Status / Action</td>
  </tr>
 <?php
		 if($sorgu){
						 while($duyuru = mysql_fetch_array($sorgu)){
								echo '<tr>';
								echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['user_id'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['username'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['userpassword'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['firstname'].'</td>';
								echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['lastname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['adres'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['telephone'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['email'].'</td>';								 
								echo "<td><a href=userduzenle.php?deger=".$duyuru["user_id"].">DÜZENLE</a> - <a href=usersil.php?deger=".$duyuru["user_id"].">SİL</a></td>";

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