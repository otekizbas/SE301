<?php
$db_adi     = "yazilimt_se301";  #Veritaban�m�z�n Ad�
$db_sunucu  = "Localhost";       #Sunucu Ad�
$db_kulladi = "yazilimt_onlineclothing";            #Sunucu Kullan�c� Ad�
$db_sifre   = "vJ9o2H#GF6+z";                #Sunucu Kullan�c� �ifre

$veriyolu   = mysql_connect($db_sunucu,$db_kulladi,$db_sifre);
if (! $veriyolu) die ("MySql Ba�lant�s� Sa�lanamad�");
mysql_select_db($db_adi,$veriyolu) or die ("Veri Taban� Ba�lant�s� Sa�lanamad�");
?>