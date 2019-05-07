<html>

    <head>
        <link rel="stylesheet" type="text/css" href="login.css"> 
        </head>
   
    <body background="12.jpg"> 
            <center>
            
                  <form method="POST" action="logdb.php">
                        
                   
<center><font size="4" >
	<div class="login-box">
	<img src="avatar.png" class="avatar">

Registration  : 
<input type="text" name="Regno" id="Regno" placeholder="Registration no." size="20" required> 
<?php global $error; echo $error; ?>
<br>
<br>
Password : 
<input type="password" name="Pass" id="Pass" placeholder="Password" size="40" required>
<br>
<br>
<input type="submit" name="login" value="login" > 
<input type="submit" name="Register" value="Register" onclick="window.location.href='http://localhost/acme/old.html'">
<input type="submit" name="home" value="Home" onclick="window.location.href='http://localhost/acme/index.html'">
<div>

</font>
</center>

                  </form>  
               
            </center>
            </body>
</html>