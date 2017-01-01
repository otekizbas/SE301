<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
$admin_username = $_POST['admin_username'];
$adminpass = $_POST['adminpass'];
$admintype = $_POST['admintype'];

$sql_check = mysql_query("select * from admin where admin_username='".$admin_username."' and adminpass='".$adminpass."' and admintype='".$admintype."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["admin_username"] = $admin_username;
    $_SESSION["adminpass"] = $adminpass;
	$_SESSION["admintype"] = $admintype;
    header("Location:dashboard.php");
}
else {
    if($admin_username=="" or $adminpass=="" or $admintype=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi ya da kullanını tipini bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre ya da Kullanıcı Tipini Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>