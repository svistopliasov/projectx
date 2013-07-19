<?php

	$clog=$_POST["login"];
	setcookie("chtlogin",$clog,time()+3600,'/');
	#echo $_COOKIE["chtlogin"];
	#echo "<p></p>";
	include 'main.php';

?>