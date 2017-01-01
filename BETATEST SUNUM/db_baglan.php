<?php
$db_adi     = "yazilimt_se301";  #Veritabanımızın Adı
$db_sunucu  = "Localhost";       #Sunucu Adı
$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanıcı Adı
$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanıcı Şifre

$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
if (! $veriyolu) die ("MySql Bağlantısı Sağlanamadı");
mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabanı Bağlantısı Sağlanamadı");
?>