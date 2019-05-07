<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("newfile.txt", "r") or die("Unable to open file!");
// Output one line until end-of-file

  echo fread($myfile,filesize("newfile.txt")) . "<br>";

fclose($myfile);
?>

</body>
</html>