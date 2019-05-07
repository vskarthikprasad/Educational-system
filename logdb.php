<?php
$con=mysqli_connect("localhost","root","");
$sel=mysqli_select_db($con,"logindb");
$c=$_POST["Regno"];
$b=$_POST["Pass"];
$stu="select * from login";
$row =mysqli_query($con,$stu);
while($r=mysqli_fetch_array($row))
{
    //echo $r['login'].$r['password'].$r['sno'];
    if($c==$r['regno'] and $b==$r['pass'])
    {
        
        header("Location: http://localhost/acme/afterlogin.php");
        
    }
    else
    {
        
        $error = "<center><font size='2px' color='#FF0000'>Incorrect Username or Password</font></center>";
        include "new.php";
    }
}
    
?>