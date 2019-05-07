function valid()
{
    var v1=document.getElementById("Regno").value;
    var v2=document.getElementById("Pass").value;

    if( isNaN(v1.charAt(2,3)) && isNaN(v1.charAt(3)) && isNaN(v1.charAt(4))&& v1.length==9 && v2.length==8 && v2.search(/[0-9]/)!=-1 && v2.search(/[A-Z]/)!=-1)
    {
        if(v1=="17MIS1020" && v2=="Karthik2")
        window.location.assign("afterlogin.html")
        else
        {
            alert("Invalid Username/Password");
        }
        
    }
    else
	{
        alert("Enter Details Correctly!\n1.Regno shouldn't be empty\n2.Regno should have Alphabets only at 2,3,4 positions \n3.Regno should have length of 9\n4.Password shouldn't be empty and sould have lenght 8\n4.Password should contain atleast one capital letter and one number");
        document.getElementById("Regno").style.border="3px solid red";
        document.getElementById("Pass").style.border="3px solid red";
      
    }
}