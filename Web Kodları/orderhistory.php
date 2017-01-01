<?php
			include "db_baglan.php";
			$sorgu = mysql_query("SELECT * FROM  `order`")
?>
						<div id = "ordertable">
	<table style="width:100%">
  <tr>
  <td style="font-weight:bold">Order ID</td>
  <td style="font-weight:bold">First Name</td>
  <td style="font-weight:bold">Last Name</td>
  <td style="font-weight:bold">Product ID</td>
  <td style="font-weight:bold">Product Name</td>
  <td style="font-weight:bold">Product Price</td>
  <td style="font-weight:bold">Order Status</td>
  </tr>
<?php
if($_SESSION["login"])
{
			 if($sorgu){
						 while($duyuru = mysql_fetch_array($sorgu)){
								echo '<tr>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['orderid'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['firstname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['lastname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['productid'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['productname'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['productprice'].'</td>';
								 echo '<td align="left"; style="font-style: italic; color: #666">'.$duyuru['orderstatus'].'</td>';
								 
								 echo '</tr>';
					}
		}

echo'</table>';

}
else
{
	echo'Lütfen oturum açın';
}
?>