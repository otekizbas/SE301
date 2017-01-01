<?php
$db_adi     = "yazilimt_se301";  #Veritabanýmýzýn Adý
$db_sunucu  = "Localhost";       #Sunucu Adý
$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullanýcý Adý
$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullanýcý Þifre

$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
if (! $veriyolu) die ("MySql Baðlantýsý Saðlanamadý");
mysql_select_db($db_adi,$veriyolu) or die ("Veri Tabaný Baðlantýsý Saðlanamadý");
?>