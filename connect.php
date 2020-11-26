<?php
	$host = "ec2-34-237-236-32.compute-1.amazonaws.com";
	$user = "oxlvpglpeheqjd";
	$pass = "a1638f74b0c9ea8687aa5ec65e72ae3104e7eec1c8b57d20c811c2fdd436b483";
	$port = "5432";
	$dbname = "de2lo4f4skqep2";
	$conn = pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$pass) or die("Gagal");
?>