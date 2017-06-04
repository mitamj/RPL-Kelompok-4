<?php
	$Open = mysql_connect("localhost","aulianz4_user_hargapasar","Aulianza01");
		if (!$Open){
		die ("Koneksi ke Engine MySQL Gagal !<br>");
		}
	$Koneksi = mysql_select_db("aulianz4_db_hargapasar");
		if (!$Koneksi){
		die ("Koneksi ke Database Gagal !");
		}
?>