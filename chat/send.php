<?php
if ($_POST["msgtxt"]!="")
{
	$string=$_COOKIE["chtlogin"].": ".$_POST["msgtxt"]."\n";
	$F = fopen('chat.txt','a+');
	fwrite($F,$string);
	fclose($F);	
	
}
include 'main.php';
#include 'wake.php';
    
?>