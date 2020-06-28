<?php
session_start();
// error_reporting(0);
include("includes.php");
if(isset($_POST['sub']))
{
    $phno=$_POST['phno'];
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $uname=$_POST['uname'];
    $email=$_POST['email'];
    $uid=$_SESSION['uid'];
    $old_dp_name=$uname;
    $query="select * from signin where uname='$uname'";
    $subresults=mysqli_query($conn,$query);
    $rows=mysqli_num_rows($subresults);
    if($rows==0)
    {
        $query="update signin set fname='$fname', lname='$lname', uname='$uname', email='$email', phno='$phno' where uid='$uid'";
        $subresults=mysqli_query($conn,$query);
        if($subresults)
            {
                $_SESSION['uname']=$uname;
                $_SESSION['fname']=$fname;
                $_SESSION['lname']=$lname;
                $_SESSION['email']=$email;
                $_SESSION['phno']=$phno;
                header("location:profile.php");
            }
        else
            {
                echo "<div style='text-align:center'><br><br><br><br><b>We are facing troubles retrieving your data</b><br><br><br><br></div>".mysqli_error($conn);
            }
    }
    else
        {
            header("location:editprofile.php?err=uname_exists");
        }
}
else
{
    header("location:editprofile.php");
}
?>