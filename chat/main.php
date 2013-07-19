<?php


	echo '<form method="POST" action="send.php">
<p> <input type="text" name="msgtxt" size="40" maxlength="100">
 <input type="submit" name="enter" value="Send"></p>
 </form> <script src="/script.js"></script> <script> reload(); </script>';

 	#echo file_get_contents('chat.txt');
	$lines=file('chat.txt');
    foreach ($lines as $line_num => $line)
     {
        echo htmlspecialchars($line) . "<br />\n";
     }

     #include 'wake.php';
 	
?>