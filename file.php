
<?php
$myfile = fopen("newfile.txt", "a");
$a=$_GET["name"];
$ab = "$a\n";
fwrite($myfile, $ab);
fclose($myfile);

?>