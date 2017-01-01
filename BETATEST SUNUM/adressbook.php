<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-9" />
<title>ONLINE CLOTHING</title>
<link href="css/style2.css" type="text/css" rel="stylesheet" />
</head>
<body>
	<div id="ust">
		<div id = "solust">
										<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
if(!isset($_SESSION["login"])){
    header("Location:index.php");
	
}
else {
    echo "<center>Sayfamıza hosgeldiniz..!";
	echo '<input type="text" name="email" value="'.$_SESSION['email'].'" placeholder="email" id="input-name1" class="form-control">';

    echo "<a href=logout.php>Guvenli cikis</a></center>";
}
?>
		</div>
		<div id = "sagust">
						<?php	
							include "sagust.php";
						?>
		</div>
	</div>
	
				<?php
			include "db_baglan.php";

			$sorgu = mysql_query("SELECT * FROM  `user` WHERE email='$email'")
			?>
	<div id ="genel">
		<div id="baslık">
			<div id ="ustbaslik">
						<?php	
							include "ustbaslik.php";
						?>			
			</div>
			
			<div id ="menu">
						<?php	
							include "menu.php";
						?>
			</div>
		</div>
		
		<div id="orta">
			<div id ="register">
					<?php
if($_SESSION["login"])
{
	include 'registermenu2.php';
}
else
{
	include 'registermenu.php';
}
?>
			</div>
			<div id ="row"> 
			<?php
			echo'<h2>HOŞGELDİNİZ...</h2>';
			echo'<h4>'.$_SESSION['email'].'</h4>';			
			?>

					
			<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * FROM  `user` WHERE email='$email'")
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
  <td style="font-weight:bold">Action</td>
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
	<div id ="footer">
		<div id="information">
			<h3>Information</h3>
			
						<?php	
							include "bilgi.php";
						?>
			
		</div>
		<div id="costumer_service">
			<h3>Costumer Service</h3>
			
						<?php	
							include "costumerservice.php";
						?>
			
		</div>
	<div id="my_account">
			<h3>My Accound</h3>
			
						<?php	
							include "my_account.php";
						?>
			
		</div>

	</div>
</body>
</html>