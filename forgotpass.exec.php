<?php
include("includes.php");
if(isset($_POST['sub']))
    {
        $uname=$_POST['uname'];
        $table=$_POST['table'];
        $num=$_POST['num'];
        $email=$_POST['email'];
        $query="select phno, email from $table where uname='$uname'";
        $result=mysqli_fetch_array(mysqli_query($conn,$query));
        $chkphno=$result['phno'];
        $chkemail=$result['email'];
        if($email==$chkemail&&$num==$chkphno)
        {
        $query="select pass from sigin where uname='$uname'";
        $result=mysqli_fetch_array(mysqli_query($conn,$query));
        $pass=$result['pass'];
        header("location:forgotpass.php?pwd=$pass");
        }
        else
        {   
            $err='Phone Number or Email ID Does Not Match';
            header("location:forgotpass.php?error=$err");
        }
    }
?>