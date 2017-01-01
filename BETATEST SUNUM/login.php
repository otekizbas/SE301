<?php 
 
include("db_baglan.php");
ob_start();
session_start();
 
$email = $_POST['email'];
$userpassword = $_POST['userpassword'];

$sql_check = mysql_query("select * from user where email='".$email."' and userpassword='".$userpassword."' ") or die(mysql_error());
 
if(mysql_num_rows($sql_check))  {
    $_SESSION["login"] = "true";
    $_SESSION["email"] = $email;
    $_SESSION["userpassword"] = $userpassword;
    header("Location:index.php");
}
else {
    if($email=="" or $userpassword=="") {
        echo "<center>Lutfen kullanici adi ya da sifreyi bos birakmayiniz..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Kullanici Adi/Sifre ya da Kullanıcı Tipini Yanlis.<br><a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
}
 
ob_end_flush();
?>