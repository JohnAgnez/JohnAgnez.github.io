<?php
$email = $_POST[’email’];
$fp = fopen(”formdata.txt”, “a”);
$savestring = $email . “n”;
fwrite($fp, $savestring);
fclose($fp);
echo “<h1>You data has been saved in a text file!</h1>”;
?>