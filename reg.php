<?php

	$conn = mysql_connect("localhost", "root", "") 
		or die ("��� ���������� � �����" .mysql_error());

	mysql_select_db("Registration");
	
	$name = $_POST['email'];
	
	echo $name;
	
?>