<?php
$to = "medasanichaithanya1999@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: vskarthikprasad@gmail.com" . "\r\n" .
"CC:medasanichaithanya1999@gmail.com";

mail($to,$subject,$txt,$headers);
?>