<?php
include("includes.php");
if(isset($_POST['sub']))
    {
        $uname=$_POST['uname'];
        $num=$_POST['num'];
        $email=$_POST['email'];
        $query="select phno, email from signin where uname='$uname'";
        $result=mysqli_fetch_array(mysqli_query($conn,$query));
        $chkphno=$result['phno'];
        $chkemail=$result['email'];
        if($email==$chkemail&&$num==$chkphno)
        {
        $query="select pass from signin where uname='$uname'";
        $usbresults=mysqli_query($conn,$query);
        $result=mysqli_fetch_array($usbresults);
        $pass=$result['pass'];
        header("location:forgotpass.php?pwd=$pass");
        }
        else
        {   
            $err='Phone Number or Email ID Does Not Match';
            header("location:forgotpass.php?error=$err");
        }
    }
    else
    {
        header("location:forgotpass.php");
    }
?>